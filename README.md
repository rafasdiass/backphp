<h1>Meu Projeto PHP</h1>
<p>Este é o meu projeto PHP, uma API de teste desenvolvida com o framework Laravel, utilizando um banco de dados MySQL. Além disso, foi desenvolvido um frontend utilizando o Angular.</p>

<h2>Configuração do Ambiente</h2>
<p>Siga as instruções abaixo para configurar o ambiente e iniciar o servidor local.</p>

<h3>Servidor Laravel</h3>
<p>Certifique-se de ter o PHP instalado em seu ambiente. Você pode verificar digitando o seguinte comando no terminal:</p>
<pre>php --version</pre>
<p>Se o PHP não estiver instalado, consulte a documentação oficial do PHP para obter instruções de instalação adequadas ao seu sistema operacional.</p>

<p>Clone este repositório em sua máquina local:</p>
<pre>git clone https://github.com/rafasdiass/backphp.git</pre>
<p>Navegue até o diretório do projeto:</p>
<pre>cd meu-projeto-php</pre>
<p>Instale as dependências do Composer:</p>
<pre>composer install</pre>
<p>Copie o arquivo .env.example e renomeie-o para .env:</p>
<pre>cp .env.example .env</pre>
<p>Gere uma nova chave de aplicativo executando o seguinte comando:</p>
<pre>php artisan key:generate</pre>
<p>Configure as informações de conexão do banco de dados no arquivo .env. Certifique-se de fornecer as credenciais corretas para se conectar ao seu banco de dados MySQL.</p>

<p>Execute as migrações do banco de dados para criar as tabelas necessárias:</p>
<pre>php artisan migrate</pre>
<p>Inicie o servidor de desenvolvimento:</p>
<pre>php artisan serve</pre>
<p>O servidor estará em execução em http://localhost:8000.</p>

<h3>Banco de Dados MySQL</h3>
<p>Certifique-se de ter o MySQL instalado em seu ambiente. Você pode verificar digitando o seguinte comando no terminal:</p>
<pre>mysql --version</pre>
<p>Se o MySQL não estiver instalado, consulte a documentação oficial do MySQL para obter instruções de instalação adequadas ao seu sistema operacional.</p>

<p>Inicie o servidor MySQL.</p>

<p>Crie um novo banco de dados para a aplicação.</p>

<p>No arquivo .env, defina as informações de conexão do banco de dados, como nome do banco de dados, usuário e senha.</p>

<p>Execute as migrações do banco de dados para criar as tabelas necessárias:</p>
<pre>php artisan migrate</pre>

<h3>Frontend Angular</h3>
<p>Para executar o frontend Angular, siga as instruções abaixo:</p>

<p>Certifique-se de ter o Node.js e o Angular CLI instalados em seu ambiente. Você pode verificar digitando os seguintes comandos no terminal:</p>
<pre>
node --version 
ng --version
</pre>
<p>Se o Node.js ou o Angular CLI não estiverem instalados, consulte a documentação oficial para obter instruções de instalação adequadas ao seu sistema operacional.</p>

<p>Navegue até o diretório do projeto Angular:</p>
<pre>cd meu-projeto-angular</pre>
<p>Instale as dependências:</p>
<pre>npm install</pre>
<p>Inicie o servidor de desenvolvimento:</p>
<pre>ng serve</pre>
<p>O servidor estará em execução em http://localhost:4200.</p>

<p>Agora você pode acessar a API em http://localhost:8000 e o frontend em http://localhost:4200. Certifique-se de ter ambos os servidores em execução para aproveitar todas as funcionalidades do projeto.</p>
