Meu Projeto PHP
Este é o meu projeto PHP, uma API de teste desenvolvida com o framework Laravel, utilizando um banco de dados MySQL. Além disso, foi desenvolvido um frontend utilizando o Angular.

Configuração do Ambiente
Siga as instruções abaixo para configurar o ambiente e iniciar o servidor local.

Servidor Laravel
Certifique-se de ter o PHP instalado em seu ambiente. Você pode verificar digitando o seguinte comando no terminal:


php --version
Se o PHP não estiver instalado, consulte a documentação oficial do PHP para obter instruções de instalação adequadas ao seu sistema operacional.

Clone este repositório em sua máquina local:


git clone https://github.com/rafasdiass/backphp.git
Navegue até o diretório do projeto:


cd meu-projeto-php
Instale as dependências do Composer:


composer install
Copie o arquivo .env.example e renomeie-o para .env:


cp .env.example .env
Gere uma nova chave de aplicativo executando o seguinte comando:


php artisan key:generate
Configure as informações de conexão do banco de dados no arquivo .env. Certifique-se de fornecer as credenciais corretas para se conectar ao seu banco de dados MySQL.

Execute as migrações do banco de dados para criar as tabelas necessárias:


php artisan migrate
Inicie o servidor de desenvolvimento:


php artisan serve
O servidor estará em execução em http://localhost:8000.

Banco de Dados MySQL
Certifique-se de ter o MySQL instalado em seu ambiente. Você pode verificar digitando o seguinte comando no terminal:


mysql --version
Se o MySQL não estiver instalado, consulte a documentação oficial do MySQL para obter instruções de instalação adequadas ao seu sistema operacional.

Inicie o servidor MySQL.

Crie um novo banco de dados para a aplicação.

No arquivo .env, defina as informações de conexão do banco de dados, como nome do banco de dados, usuário e senha.

Execute as migrações do banco de dados para criar as tabelas necessárias:


php artisan migrate
Frontend Angular
Para executar o frontend Angular, siga as instruções abaixo:

Certifique-se de ter o Node.js e o Angular CLI instalados em seu ambiente. Você pode verificar digitando os seguintes comandos no terminal:


node --version
ng --version
Se o Node.js ou o Angular CLI não estiverem instalados, consulte a documentação oficial para obter instruções de instalação adequadas ao seu sistema operacional.

Navegue até o diretório do projeto Angular:


cd meu-projeto-angular
Instale as dependências:



npm install
Inicie o servidor de desenvolvimento:


ng serve
O servidor estará em execução em http://localhost:4200.

Agora você pode acessar a API em http://localhost:8000 e o frontend em http://localhost:4200. Certifique-se de ter ambos os servidores em execução para aproveitar todas as funcionalidades do projeto.
