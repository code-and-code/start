# start
Projeto inicial PHP + MVC
## Instalação

#### 1 - Dependências do Projeto

    php 5.3+
    composer

Instalação

#### 2 - Dependências do Projeto

Para instalar as dependências do projeto, execute o seguinte comando:

    composer install

#### - Route [App\Init.php]

    $ar['home']    = ['route' => '/',           'controller' => 'Index', 'action' => 'index'];
    'home' //nome da rota #não pode haver duplicidade
    'route' //nome url
    'controller' // nome Controller
    'action' // metodo controller

#### - View
        
    $this->render('index',['name' => '{CodeAndCode}']);
    $this->maker('index/contact.html',['contact' => 'Your page. Contact'],true);

#### - config




