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

    php + servidor:porta -t ./pasta_de_inicialização
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
 
    hasMany(), hasOne(), belongsTo().

Métodos de query;

    all() -> busca todos objetos
    find($id) -> busca determinado objeto através do ID
    where($name,$operator,$value) -> clausula de comparação
    andWhere($name,$operator,$value) -> clausula de comparação com lógica
    create(array $attributes) -> cria (cadastra) objeto com os atributos passados por parametro gravando no BD
    update(array $attributes) -> atualiza objeto com os atributos passados por parametro gravando no BD
    delete() -> deleta objeto do BD
    fill(array $attributes) -> cria um objeto sem gravar no BD
    toArray() -> transforma um objeto em Array
    getAttributes() -> captura quais atributos aquele objeto possui
    get() -> Lista o resultado da consulta
    first() -> trás o primeiro objeto da tabela no BD
   
Exemplo:

    <?php
    namespace App\Models;

    use Cac\Model\Model;


    class Client extends Model
    {
        protected $table = "clients";

        public function Password()
        {
            return $this->belongsTo(Personal_Password::class);
        }
    }

#### 5 - Sistema de Rotas 

Localizado no diretório [App\Init.php]
    
    $ar['auth.index']    = ['route' => '/',           'controller' => 'Index', 'action' => 'index'];
    
    Componentes
        'auth' -> nome do módulo
        'home' -> nome da rota. Obs: Não pode haver duplicidade no mesmo módulo
        'route' -> nome url
        'controller' -> nome Controller
        'action' -> método que será chamado na controller
        'method' -> tipo da requisição
        
Exemplo:
    
    <?php

    namespace App;

    use Cac\Init\Bootstrap;

    class Init extends Bootstrap
    {
        protected function initRoutes()
        {
            $ar['auth.index'] = ['route' => '/auth',                        'controller' => 'AuthController',  'action' => 'getLogin' ];
            $ar['auth.login'] = ['route' => '/auth/login', 'method'=>'POST', 'controller' => 'AuthController', 'action' => 'postLogin'];
        }
    }

#### 6 - Controller

Para construir uma controler, crie um classe que extende da classe Action, localizada em: Cac\Controller\Action;

    <?php

    namespace App\Controllers;

    use App\Models\Client;
    use Cac\Controller\Action;

    class ClientController extends Action
    {
        private $client;

        public function __construct()
        {
            $this->client = new Client();
        }
    }

#### 7 - View

Para fazer uma chamada dw view através da controle, use o metodo "$this->render('caminho_da_view', ['varieis ou objetos'])" usando o "echo" para imprimir na tela.
   
    public function index()
    {
        echo $this->render('user.client.index', ['clients' => $this->client->all()]);
    }

Construção do arquivo de view 

    [nome_da_view.html.twig]
Para usar lógica utilize as  tags de interpretação 

    {%  %}
Para exibir uma variável na view utilize as tags de interpretação 

    {{ }}


#### 8 - Envio de E-mail

Para realizar o envio de email, usa o metodo render('caminho_da_view', [objeto]) para construir um HTML, e usa a classe Mail localizada em:  App\Support\Mail, para disparar, new Mail('endereço_que_será_enviado', HTML(renderizado), 'Título do Email');

    use App\Support\Mail;
    
    public function sendEmail()
    {
        $answer  = $this->render('site.email.answer');
        $mail = new Mail('contato@hotspotcwk.com.br', $answer, 'Novo Contato');
       
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

    $file  = new File($_FILES['file'],images);
    $nameFile   = md5(date('H:m:s:'));
    $file->setName($nameFile)->mimeType(['image/png','image/jpeg', 'image/jpg'])->maxSize('3MB')->upload();

#### 10 - Cache

Para usar o sistema de caches, pode-se usar o seguintes métodos:

    Cache::set(‘key’,‘value’); -> cria um cache passando o Indice e seu valor
    Cache::get(‘key’); -> caputa o cache com determinado indice
    Cache::delete(‘key’); -> deleta o cache com determinado indice
    
