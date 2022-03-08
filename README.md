## API Space Flight News

Este é um desafio para que possam ver as minhas habilidades como Back-end Developer. Nesse desafio foi desenvolvido uma REST API que utiliza os dados do projeto Space Flight News, uma API pública com informações relacionadas a voos espaciais. O projeto desenvolvido por mim tem como objetivo criar a API permitindo assim a conexão de outras aplicações.

## Tecnologias utilizadas

- [PHP Framework Laravel](https://laravel.com/)
- [Git](https://git-scm.com/)
- [Docker](https://www.docker.com/)
- [PostgreSQl](https://www.postgresql.org/)

## Instruções de instalação

### Clone o repositório

`git clone https://github.com/pedroleandro/api_space_flight_news.git`

### Acesse a pasta do projeto

`cd api_space_flight_news/`

### Executando com docker

`docker-compose build app`

### Subindo containers

`docker-compose up -d`

### Acessando container da aplicação

`docker exec -it api_space_flight_news_app_1 bash`

### Execute o comando artisan para gerar chave do projeto

`php artisan key:generate`

### Instale as dependências via composer

`composer install`

### Copie e cole o arquivo .env

`cp .env.example .env`

### Altere as variáveis do banco de dados

As variaveis de ambiente já estão com esses mesmos valores

- `DB_CONNECTION=pgsql`
- `DB_HOST=db`
- `DB_PORT=5432`
- `DB_DATABASE=api_space_flight_news`
- `DB_USERNAME=root`
- `DB_PASSWORD=root`

### Execute as migrações

`php artisan migration:fresh`

### Execute para povoar o banco de dados

`php artisan db:seed`

### Execute o projeto

`php artisan serve`

### Projeto rodando na porta 5000

`http://localhost:5000`

## Code challenge
>  This is a challenge by [Coodesh](https://coodesh.com/)

