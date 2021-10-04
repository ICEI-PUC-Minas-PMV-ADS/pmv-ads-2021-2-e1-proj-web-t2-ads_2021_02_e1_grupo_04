# Arquitetura da Solução

<span style="color:red">Pré-requisitos: <a href="3-Projeto de Interface.md"> Projeto de Interface</a></span>

Nesta seção são apresentados os detalhes técnicos da solução criada pela equipe, tratando dos componentes que fazem parte da solução e do ambiente de hospedagem da solução.

## Diagrama de Computadores

Os componentes que fazem parte da solução são apresentados na Figura que se segue.

![image](https://user-images.githubusercontent.com/91296105/135927197-ff51865f-b650-4086-9311-1c64eddf7fce.png)

A solução implementada conta com os seguintes módos:

- Navegador - Interface básica do sistema.
- Páginas Web - Conjunto de arquivos HTML, CSS, JavaScript e imagens que implementam as funcionalidades do sistema.
- Local Storage - armazenamento mantido no Navegador, onde são implementados bancos de dados baseados em JSON. São eles:
- Cadastro de usuários – Usuários que possuem acesso ao sistema.
- Produtos e Categorias- registro de opiniões dos usuários sobre as notícias.
- Recipe API - plataforma que permite o acesso à receitas exibidas no site.
- Hospedagem - local na Internet onde as páginas são mantidas e acessadas pelo navegador.

Hospedagem 

O site utiliza a plataforma do Heroku como ambiente de hospedagem do site do projeto. O site é mantido no ambiente da URL:

https://git.heroku.com/jithome.git 

A publicação do site no Heroku é feita por meio de uma submissão do projeto (push) via git para o repositório remoto que se encontra no endereço:

https://git.heroku.com/jithome.git 
