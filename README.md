# repo_IT
Teste de conhecimento Laravel 7

<h1>Front</h1>
  Laravel mix, Collective, Componentização.<br>
  
  Base de dados deverá se chamar bd_it .<br>
  
  Na raís da pasta CrudIT é necessário rodas nossas migrations <br>
  ```
  php artisan migrate
  ```
  Logo após atualizaremos todas as dependencias php
  
  ```
  composer update
  ```
  
  Na sequencia baixamos nossas dependencias npm
  
  ```
  npm install
  ```
  Por fim rodamos o seguinte comando 
  
  ```
  npm run dev
  ```
  Agora com nossos arquivos compilados  podemos rodas nossa aplicação de crud

   ```
   php artisan serve
   ```
   
   Para a nossa api não é necessário os comandos npm, você pode fer ser funcionamento com
   
   ```
   composer update
   
   php artisan serve
   ```
   Na raíz do nosso repositório temos o arquivo <a href="https://github.com/SysoutLucas/repo_IT/blob/master/API_IT">API_IT </a>, ele deve ser importado no <a href="https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo?hl=pt-BR">Advanced REST client</a> onde ficará disponível nossas rotas para consumo .
   
