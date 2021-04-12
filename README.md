# pipegrep - Adianti Framework


Esse framework não é uma criação minha. Foi criado o repositório somente para facilitar os Deploys pra quando eu preciso iniciar um novo projeto.
A criação deste Framework é de autoria de [Pablo Dall'Oglio](https://github.com/pablodalloglio).
(Vocês podem acompanhar também, [blog do Pablo](http://www.dalloglio.net/). Caso queiram, acessem também [Site oficial do Framework](https://www.adianti.com.br/framework) para pegar o Framework puro, sem alterações ).



Para fazer um novo deploy:
- Clone este repositório.
- Crie um novo banco de dados chamado pipegrep
  > Nesse template utiliza-se MariaDB 10.4
- Crie um usuário com permissão ao novo banco criado
  > o padrão que vem com o template é user = pipegrep, password = 123456
- acesse a pasta clonada
  - cd pipegrep_adianti
- acesse o a pasta phinx, dentro de vendor
  - cd vendor/phinx/vendor/
- execute a migration e o seed
  - bin/phinx migrate
  - bin/phinx seed:run


Caso você deseje personalizar a instalação, os seguintes arquivos precisam ser alterados:
- no **vendor/phinx/vendor/phinx.php** os itens:
  - name
  - user
  - pass
- nos arquivos **app/config/communication.php, app/config/permission.php, app/config/log.php e app/config/pipegrep.php**
  - name
  - user
  - pass


### Atenção: 
**Necessita de um Servidor Web para hospedar a aplicação. Eu recomendo o uso do NGINX.**
