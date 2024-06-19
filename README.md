# atlas2
trabalho realizado por : Adryelle do Prado Gonçalves, José Ailton Vicente de Carvalho , Júllia Marcos Jardim, Nicoly Eduarda de Souza O. Santos .

Informações Coletadas

Coletamos dados pessoais, como nomes de usuários cadastrados, que são armazenados no banco de dados do nosso software. Nosso site está completamente estruturado e conectado diretamente ao banco de dados, garantindo o armazenamento das informações cadastradas.

Direitos dos Usuários

Segurança: Você tem o direito de esperar que suas informações pessoais sejam protegidas contra vazamentos ou acessos não autorizados.

Controle: Você tem o direito de controlar como suas informações pessoais são coletadas e usadas, podendo consentir ou recusar certos usos.

Visualização de um Site utilizando MySQL e XAMPP

Requisitos:

XAMPP instalado: Certifique-se de ter o XAMPP instalado e funcionando corretamente. XAMPP é um pacote que inclui Apache, MySQL, PHP e Perl.

Banco de Dados MySQL: Você precisa ter um banco de dados MySQL configurado no XAMPP. Se ainda não criou um, siga os passos abaixo.

Passos para Visualização do Site:

1. Inicie o XAMPP:

Abra o XAMPP Control Panel.

Inicie os serviços do Apache e MySQL clicando nos botões "Start" ao lado de cada um.

Acesse o phpMyAdmin:
Abra um navegador da web.

Digite http://localhost/3.3/ na barra de endereço.

Isso abrirá a interface do phpMyAdmin para gerenciar seu banco de dados MySQL.

Importe o Banco de Dados
Se o site já incluir um banco de dados pré-configurado, importe-o para o MySQL usando a guia "Importar" no phpMyAdmin.
Configuração do Site:**
Coloque os arquivos do site na pasta htdocs dentro da pasta do XAMPP (C:\xampp\htdocs\ no Windows ou /Applications/XAMPP/htdocs/ no macOS).

Verifique se os arquivos do site estão configurados para se conectar ao banco de dados MySQL local, utilizando localhost como host, e o nome de usuário e senha do MySQL.

Visualize o Site:**
Abra um navegador da web.

Digite http://localhost/3.3//, onde é o nome da pasta onde estão os arquivos do seu site dentro dehtdocs`.

Verifique a Conexão com o Banco de Dados:**
Certifique-se de que o site esteja se conectando corretamente ao banco de dados MySQL configurado no XAMPP.

Teste funcionalidades que dependem de dados do banco de dados para garantir o funcionamento adequado.

Notas Importantes

7 Configurações Adicionais:** Dependendo da complexidade do site e dos requisitos do MySQL, pode ser necessário ajustar configurações no arquivo php.ini ou my.ini.

Segurança: Para uso em produção, configure adequadamente a segurança do XAMPP e MySQL para evitar acessos não autorizados.

Seguindo esses passos, você poderá visualizar e interagir com seu site localmente utilizando MySQL e XAMPP.
