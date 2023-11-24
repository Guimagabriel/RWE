<div style="text-align: center">
    <img src="https://static.wixstatic.com/media/c5fb74_c0dfdfe8dc1f4942b587edb6d2a3c950~mv2.png/v1/fill/w_247,h_66,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/RWE_Telemedicina_Transp_NV01.png" alt="RWE Telemedicina">
</div>
<hr>
<h1>Introdução</h1>
<p>Imagine que o sistema existente tenha perfis de usuário, mas eles são relativamente básicos, contendo apenas informações fundamentais como nome, email e uma foto de perfil. Como parte da atualização do sistema, você deseja aprimorar os perfis de usuário com recursos adicionais.</p>
<h1>Como instalar</h1>
<p>Nesta seção estará documentado o passo a passo necessário para instalação do projeto.</p>
<h2>Pré requisitos do sistema</h2>
<p>
    <ul>
        <li>PHP: ^8.2</li>
        <li>MySQL: ^8.1</li>
        <li>Composer: 2</li>
    </ul>
</p>
<h2>Subindo o ambiente</h2>
<p>Inicialmente devemos instalar as dependências do projeto</p>

```shell
$ composer install 
```
<p>Após a instalação das dependências, configure o projeto no arquivo .env com as credenciais do banco de dados:</p>

```txt
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

<p>Após a configuração do banco execute o comando:</p>

```shell
$ php artisan serve
```

<p>Ao terminar a execução a aplicação estará pronta.</p>
<img src="rweTest/images/test.png"/>