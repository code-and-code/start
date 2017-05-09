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

#### 4 - Models

Para consstruir uma model, crie um classe que extende da classe Model, localizada em: Cac\Model\Model;

Deve referenciar a tabela que a model irá se comunicar.

Pode criar métodos de relacionamento utilizando os methodos:
    hasMany(), hasOne(), belongsTo().

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
            $ar['auth.index'] = ['route' => '/auth', 'controller' => 'AuthController', 'action' => 'getLogin'   ];
            $ar['auth.login'] = ['route' => '/auth/login', 'method'=>'POST', 'controller' => 'AuthController', 'action' => 'postLogin'];
        }
    }

#### - View
        
    $this->render('index',['name' => '{CodeAndCode}']);
    $this->maker('index/contact.html',['contact' => 'Your page. Contact'],true);

#### - config




