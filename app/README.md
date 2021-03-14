<h1 style="color: #0078ff">ARSENAL - PHP Micro Framework</h1>

<h3>Sobre</h3>
<br>
<p>O ARSENAL PHP Micro Framework é uma ferramenta para agilizar o desenvolvimento de aplicações web</p>
<p>Contém vários pacotes já pré implementados, como:<br>
- Controle de rotas<br>
- ORM para banco de dados e paginação de resultados<br>
- Controllers, Models e Views
</p>

## Instalação

<p>Via composer</p>

```bash
composer create-project arsenal/arsenal my-blog 
```

## Documentação

Saiba mais utilizando a documentação

* <a href="#routes">Rotas</a>
* <a href="#controllers">Controllers</a>
* <a href="#database">Database</a>

<section id="routes">
    <h1>Rotas</h1>
    <p>Para definir uma rota é necessário configurar o arquivo  <b>app/config/routes.php</b> </p>

```php
$router->get('/', '\App\Controllers\WebController@index');

```
<p>Para mais detalhes veja a documentação do componente <a href="https://github.com/bramus/router">AQUI</a></p>

</section>
<section id="controllers">
    <h1>Controllers</h1>
   <p>Para configurar um controller é necessário acessessar o arquivo <b>app/controllers/WebController.php</b>. Você o define o nome do controller. Por padrão temos o WebController</p>

   <h3>Criando um controller</h3>
   <p>Para criar um controller acesse a pasta <b>app/controllers</b>, derntro crie uma classe <b>MeuController.php</b> </p>

```php
<?php

namespace App\Controllers;

class MeuController
{
    //your code
}
```

</section>

<section id="database">
    <h1>Database</h1>

   <p>Para se conectar ao banco acesse <b>app/config/Database.php</b></</p>

```php
<?php

define('DB', [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => '',
    'port' => 3306,
    'driver' => 'mysql', //default = mysql
    'options' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]
]);
```
para mais detalhes acesse a documentação <a href="https://github.com/Guilherme-fagundes/database">Aqui</a>

</section>

