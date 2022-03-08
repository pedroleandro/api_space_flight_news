## API Space Flight News

Este é um desafio para que possam ver as minhas habilidades como Back-end Developer. Nesse desafio foi desenvolvido uma REST API que utiliza os dados do projeto Space Flight News, uma API pública com informações relacionadas a voos espaciais. O projeto desenvolvido por mim tem como objetivo criar a API permitindo assim a conexão de outras aplicações.

## Tecnologias utilizadas

- [PHP Framework Laravel](https://laravel.com/)
- [Mysql](https://www.mysql.com/)
- [Git](https://git-scm.com/)

## Instruções de instalação

### Clone o repositório

`git clone https://github.com/pedroleandro/api_space_flight_news.git`

### Acesse a pasta do projeto

`cd api_space_flight_news/`

### Execute o comando artisan para gerar chave do projeto

`php artisan key:generate`

### Instale as dependências via composer

`composer install`

### Copie e cole o arquivo .env

`cp .env.example .env`

### Altere as variáveis do banco de dados

Altere de acordo com o banco de dados na sua máquina

- `DB_CONNECTION=mysql`
- `DB_HOST=localhost`
- `DB_PORT=3306`
- `DB_DATABASE=dbname`
- `DB_USERNAME=username`
- `DB_PASSWORD=secret`

### Execute as migrações

`php artisan migration:fresh`

### Execute para povoar o banco de dados

`php artisan db:seed`

### Execute o projeto

`php artisan serve`

## Code challenge
>  This is a challenge by [Coodesh](https://coodesh.com/)

