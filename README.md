## API Operand

## Introdução

Esse projeto se destina à Operand para composição de rotas para o CRUD de usuários encontrado em: https://github.com/RaphaelNunes10/frontend-test, bem como um repositório de facil acesso para aprender sobre o básico de Laravel.

O projeto foi criado utilizando Visual Studio como IDE com Laravel para a criação de uma API onde é possível efetuar um CRUD e outras _queries_ simples em uma base de dados PostgreSQL.

## Requerimentos

-   [VSCode IDE](https://code.visualstudio.com/Download)
-   [GIT](https://git-scm.com/downloads)
-   [Composer](https://getcomposer.org/download/)
-   [PHP](https://www.php.net/downloads.php) OU [Wamp](https://www.wampserver.com/en/) e similares.

## Instalação

-   Baixe e instale as ferramentas requeridas;

-   Tenha certeza que estas _Dynamic Extensions_ NÃO estão comentadas no arquivo de configuração php.ini (encontrado na pasta onde você instalou o PHP):

> -   extension=curl
> -   extension=fileinfo
> -   extension=mbstring
> -   extension=openssl
> -   extension=pdo_pgsql
> -   extension=pgsql

-   No VSCode, abra uma nova pasta/crie um novo projeto;
-   Abra o terminal (Terminal -> Novo Terminal);
-   Inicialize a pasta como um novo repositório:

> git init

-   Adcione este repositório:

> git remote add origin https://github.com/RaphaelNunes10/operand-test-api

-   Puxe o último _commit_:

> git pull origin master

-   Instale o Laravel:

> composer global require laravel/installer

Configure o arquivo .env (renomeie o arquivo .env.example se não houver este arquivo) desta forma:

> -   DB_CONNECTION=pgsql
> -   DB_HOST=127.0.0.1
> -   DB_PORT=5432
> -   DB_DATABASE= -nome-do-seu-banco-de-dados-
> -   DB_USERNAME= -nome-de-usuário-do-seu-banco-de-dados-
> -   DB_PASSWORD= -senha-do-seu-banco-de-dados-

-   Instale os pacotes do projeto:

> composer update

-   Execute as migrations para gerar as tabelas padrões do Laravel:

> php artisan migrate

-   Rode o projeto:

> php artisan serve

-   O projeto abrirá por padrão em http://127.0.0.1:8000, você pode digitar os _endpoints_ na URL para visualizar métodos GET.
