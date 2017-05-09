# start
Projeto inicial PHP + MVC
## Instalação

#### 1 - Dependências do Projeto

    php 5.3+
    composer

Instalação

#### 2 - Instalação do Projeto

Para instalar as dependências do projeto, execute os seguintes comando:

    git clone https://github.com/code-and-code/start.git
    cd start
    composer install 

#### 3 - Inicializando do Projeto

Para iniciar a aplicação, siga as instruções:

    php -S servidor:porta -t ./pasta_de_inicialização
Exemplo:

    php -S 127.0.0.1:8080 -t ./public

Banco de dados: As configurações de comunicação com o Banco de Dados está localizada em : [App/config/app]

    'database' => [            
       'host'     => '127.0.0.1',
       'dbname'   => 'hotspot',
       'username' => 'root',
       'password' =>  ''
      ],

#### 4 - Models

Para construir uma model, crie um classe que extende da classe Model, localizada em: Cac\Model\Model;

Deve referenciar a tabela que a model irá se comunicar.

Pode criar métodos de relacionamento utilizando os methodos:
 
    hasMany(Class) -> um pra muitos
    hasOne(Class) -> um pra um
    belongsTo(Class) ou  belongsTo(Class, 'coluna_externa', 'coluna_interna') -> um pra um invertido.

Métodos de query;

    all() -> busca todos registros da tabela
    find($id) -> busca determinado registro através do ID
    where($name,$operator,$value) -> clausula de comparação
    andWhere($name,$operator,$value) -> clausula de comparação 
    create(array $attributes) -> cria registro com os atributos passados por parametro 
    update(array $attributes) -> atualiza o registro com os atributos passados por parametro
    delete() -> deleta registro
    fill(array $attributes) -> preenche os atributos do objeto
    toArray() -> transforma um objeto em Array
    getAttributes() -> captura quais atributos aquele objeto possui
    get() -> Lista o resultado da consulta
    first() -> trás o primeiro registro da tabela 
   
Exemplo -  Model:

    <?php
    namespace App\Models;

    use Cac\Model\Model;

    class User extends Model
    {
        protected $table = "users";
    }
    
Exemplo - Relacionamento
    
    Tabelas
    users
        id - integer
        email - string
        profile_id - integer
        
    profile
        id - integer
        name - string

    friends
        id - integer
        user_id - integer
        friend_id - integer
    
    **Models**
    
    <?php
    namespace App\Models;
    use Cac\Model\Model;
    
    class User extends Model {

       protected $table      = “users”;

       public function Profile()
       {
           return $this->hasOne(Profile::class);
       }

       public function Friends()
       {
           return $this->hasMany(Friend::class);
       }

    }
    
    class Profile extends Model {

       protected $table      = “profiles”;

       public function User()
       {
           return $this->belongsTo(User::class);
       }
    }
    
    class Friend extends Model {

       protected $table      = “friends”;

       public function User()
       {
           return $this->belongsTo(User::class,‘id’,‘user_id’);
       }

       public function Friend()
       {
           return $this->belongsTo(User::class,‘id’,‘friend_id’);
       }
    }
    
    

#### 5 - Sistema de Rotas 

Localizado no diretório [App\Init.php]
    
    $ar['user.index']    = ['route' => '/',           'controller' => 'Index', 'action' => 'index'];
    
    Componentes
        'auth' -> nome do módulo
        'home' -> nome da rota. Obs: Não pode haver duplicidade no mesmo módulo
        'route' -> url
        'controller' -> nome Controller
        'action' -> método que será executado na controller
        'method' -> tipo da requisição
        
Exemplo:
    
    <?php
    namespace App;
    use Cac\Init\Bootstrap;

    class Init extends Bootstrap
    {
        protected function initRoutes()
        {
            $ar['user.index'] = ['route' => '/',                              'controller' => 'AuthController',  'action' => 'index'];
            $ar['user.upload'] = ['route' => '/auth/login', 'method'=>'POST', 'controller' => 'AuthController',  'action'=>'upload' ];
        }
    }

#### 6 - Controller

Para construir uma controler, crie um classe que extende da classe Action, localizada em: Cac\Controller\Action;

    <?php
    namespace App\Controllers;
    
    use App\Models\User;
    use Cac\Controller\Action;

    class UserController extends Action
    {
        public function index()
        {
            ** Codigo **
        }
    }

#### 7 - View

Para fazer uma chamada de view através da controle, use o metodo "$this->render('caminho_da_view', ['varieis ou objetos'])" usando o "echo" para imprimir na tela.
   
    public function index()
    {
        echo $this->render('user.index', ['user' => $this->user->all()]);
    }

Construção do arquivo de view 

    [nome_da_view.html.twig]
Para usar lógica utilize as  tags de interpretação 

    {%  %}
Para exibir uma variável na view utilize as tags de interpretação 

    {{ }}


#### 8 - Envio de E-mail

Para realizar o envio de email, utilize a classe Mail localizada em:  App\Support\Mail.
new Mail('endereço_que_será_enviado', HTML(renderizado) ou  menssagem, 'Título do Email', html(true, false));
    
    <?php
        namespace App\Controllers;

        use App\Models\User;
        use Cac\Controller\Action;

        class UserController extends Action
        {
            public function sendEmail()
            {
                $mail = new Mail('para@dominio.com.br', 'Menssagem', 'Título', false);
            }
        }
    
Como desparar email com mensagem em HTML.

 Use o metodo render('caminho_da_view', [objeto]) para construir um HTML.
 
     <?php
        namespace App\Controllers;

        use App\Models\User;
        use Cac\Controller\Action;

        class UserController extends Action
        {
            public function sendEmail()
            {
                $html  = $this->render('site.email.answer');
                $mail = new Mail('para@dominio.com.br', $html, 'Título', true);
            }
        }
        
Para Configurar o envio de email, vá ao diretório [App\config\mail.php] e informe as suas configurações de email.

    <?php
    return [
                'default' =>    [  'Host' => 'webmail.dominio.com.br',
                                   'Port' => 587,
                                   'SMTPSecure' => 'tls',
                                   'SMTPAuth' => true,
                                   'SMTPDebug'=> false,
                                   'Username' => 'email_de_desparo@dominio.com.br',
                                   'Password' => '******'
                ]
    ];

#### 9 - Upload 

Para fazer o Upload de arquivo, crie um objeto usando a classe File localizada em: Cac\Support\File , passando como parametro o arquivo e o diretório que será criado automaticamente na pasta [public] onde deverá ser gravado o arquivo. Dê um nome ao arquivo, com o objeto file em mãos use os seguintes metodos:
    
    mimeType(array) -> para informar o tipo do arquivo
    maxSize() ->  para informar o tamanho máximo que o arquivo deve ter
    upload() -> realizar upload
Exemplo:

     <?php

    namespace App\Controllers;

    use App\Models\User;
    use Cac\Controller\Action;

    class UserController extends Action
    {
        public function upload()
        {
            $file  = new File($_FILES['file'],images);
            $nameFile   = md5(date('H:m:s:')); 
            $file->setName($nameFile)->mimeType(['image/png','image/jpeg', 'image/jpg'])->maxSize('3MB')->upload();        
        }
    }

#### 10 - Cache

Para usar o sistema de caches, pode-se usar o seguintes métodos:

    <?php

    namespace App\Controllers;

    use App\Models\User;
    use Cac\Controller\Action;

    class UserController extends Action
    {
        public function getCache()
        {
            Cache::get(‘key’); -> caputa o cache com determinado indice             
        }
        
        
        public function setCache()
        {
            Cache::set(‘key’,‘value’); -> cria um cache passando o Indice e seu valor
        }
        
        
        public function deleteCache()
        {
            Cache::delete(‘key’); -> deleta o cache com determinado indice
        }
    }
