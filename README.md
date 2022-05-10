# Projeto Agenda_Telefonica PHP/Mysql 
--------------------------------------------------------------------------------------------------------------------
# Agenda Telefônica Web para guardar arquivos em Banco de Dados (CRUD BASICO)
Desenvolvedor: Victor Freitas
Servidor WEB: LARAGON
--------------------------------------------------------------------------------------------------------------------
Linguagens utilizadas: HTML, PHP, openssl
--------------------------------------------------------------------------------------------------------------------
# Forma de acesso e utilização:

-1.Baixe a ferramenta LARAGON
-2.Inicialize a ferramenta LARAGON
-3.Banco de dados: Mysql
-4.Pelo menu de utilidades do LARAGON, acesse o heidisql e acesse 
-5.Utilizador: root | Palavra-passe: crie um pass
-6.Agora voce irá criar um banco de dados e nomeie de "contatos"
-7.Agora crie a tabela e nomeie de "dados"
-8.Adicione 3 colunas sendo: 
a 1° nomeada de id_contato
a 2° nomeada de nome
a 3° nomeada de telefone
-9.Agora no Visual studio code acesse a pasta libs e acesse o config.php
. Preencha no arquivo config.php na pasta libs, o nome do seu servidor e usuario local criados no Laragon em Mysql (editor Heidisql)
. Caso precise, gere senhas no Visual Studio pelo recurso Generate ramdom string/password para a segurança openssl.
. Terminado.
. obs. O arquivo guia e Interface inicial é o index.php
--------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------

- Guarde, Consulte, Edite ou Exclua seus contatos registrados em Banco de Dados.
--------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------

# Agenda Telefônica:
Aplicação WEB desenvolvida como parte do processo de seletivo em uma empresa. (Agenda Telefônica)
Desenvolvedora: Ana Guelfi Erba

# Requisitos para o desenvolvimento:
- Crie uma aplicação de agenda telefônica utilizando os princípios de orientação objeto (página web ou console application), em que seja possível informar nome, telefone e endereço. 
- Permitir incluir, alterar, excluir e exibir os registros cadastrados. 
- Armazene os dados em memória ou usando um banco de dados.
- Utilize o máximo de conhecimento que você possui ao desenvolver este projeto.

# Linguagens utilizadas:
- HTML, PHP, JQUERY+AJAX+JSON

# Estilização:
- Bootstrap

# Servidor WEB:
- USBWEBSERVER v8.6.5: Apache, MySQL e PHP

# Forma de acesso e utilização:
- Baixe a ferramenta USBWEBSERVER v8.6.5.
- Inicialize a ferramenta USBWEBSERVER v8.6.5.
- Banco de dados:
  - Pelo menu de utilidades do USBWEBSERVER, clique em PHPMyAdmin. A página aberta deve possuir o seguinte endereço: http://localhost/phpmyadmin/
  - Utilizador: root | Palavra-passe: usbw
  - No menu de endereço: http://localhost/phpmyadmin/index.php, clique em importar e selecione o arquivo de banco de dados disponibilizado: agenda.sql e conclua a importação.
- Aplicação WEB:
  - Após baixar os arquivos cujo commit seja "Arquivos da aplicação WEB", copie-os para a pasta root do USBWEBSERVER.
  - Arquivos zipados:
    - Descompacte os arquivos zipados de modo que: Bibliotecas de estilização (css.zip) seja mantido numa pasta de nome 'css' e Bibliotecas JQUERY (js.zip) seja mantido numa pasta de nome 'js'. Essa ação é importante para que os recursos de estilização e tráfego de dados realizados pelas referidas bibliotecas possam funcionar.
  - Pelo menu de utilidades do USBWEBSERVER, clique em Localhost. Na barra de pesquisa do navegador, digite http://localhost/cadastro.php ou localhost + o caminho referente ao arquivo cadastro.php.
  
Após seguir os referidos passos, basta utilizar a aplicação WEB.
