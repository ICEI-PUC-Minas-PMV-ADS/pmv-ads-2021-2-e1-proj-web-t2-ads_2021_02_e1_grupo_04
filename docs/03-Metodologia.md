
# Metodologia.

<span style="color:red">Pré-requisitos: <a href="2-Especificação do Projeto.md"> Documentação de Especificação</a></span>

##  Relação de Ambientes de Traalho

Os artefatos do projeto são desenvolvidos a partir de diversas plataformas e a relação dos ambientes com seu respectivo propósito é apresentada na tabela que se segue.

| **Ambiente** | **Plataforma** | **Link de Acesso** |
|--- |--- |--- |
| Repositório de código fonte e arquivos| GitHub |https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2021-2-e1-proj-web-t2-ads_2021_02_e1_grupo_04/blob/main/docs/03-Metodologia.md|
| Reuniões  | Teams | https://teams.microsoft.com/l/team/19%3a5hjt0p_P8CTVN1IqTwvwXQAorCU6LlM92bSIR99wn0c1%40thread.tacv2/conversations?groupId=1ab6ef05-9999-447e-9e1c-a828c3563eb1&tenantId=14cbd5a7-ec94-46ba-b314-cc0fc972a161 |
|Comunicação Assicrona |WhatsApp | https://chat.whatsapp.com/LjVkJ0zumEnFhoyw7U4wyP |
| Projeto de Interface e  Wireframes | Figma | https://www.figma.com/file/fMAMwSgbI0nQLdB8SWCByx/Untitled?node-id=1%3A2 |
| Gerenciamento do Projeto | Trello | https://trello.com/b/6WRrzOdq/jit-home |

### Gestão do Código Fonte
Para gestão do código fonte do software desenvolvido pela equipe, o grupo utilizará um processo baseado em git brahcn, que, para um time de 5 pessoas é aceitável e mais simples de se trabalhar que o modelo gitflow. Incialmente, a necessidade do projeto será atendida com as seguintes branchs. 

- Master, onde  ficará a aplicação já pronta para a produção.
- Homolog, onde ficará uma versão estável pronta para testes.
- Dev 1 , que contará com o trabalho de 3 analistas.
- Dev 2, que contará com o trabalho de 2 analistas

Gestao do Fonte via Branch
[link text]
(https://ibb.co/4SF3mQb)

#### Gerenciamento do Projeto

A equipe utiliza metodologias ágeis, tendo escolhido o Scrum como base para definição do processo de desenvolvimento. 
A equipe está organizada da seguinte maneira: 
- Scrum Master: Felipe Helison dos Santos Desidério
- Product Owner: Alex de Souza Galdino
- Equipe de Desenvolvimento:
- Oscar Pereira
- Lívia Cristina
- Alex Galdino
- Gabriel de Matos
- Equipe de  Design
- Gabriel de Matos

Para organização e distribuição das tarefas do projeto, a equipe está utilizando o Trello estruturado com as seguintes listas:

- Design: esta lista apresenta necessidades identificadas para ajustes / alteração de desing.
- Backlog: recebe as tarefas a serem trabalhadas e representa o Product Backlog. Todas as atividades identificadas no decorrer do projeto também devem ser incorporadas a esta lista. 
- A Fazer: Esta lista representa o Sprint Backlog. Este é o Sprint atual que estamos trabalhando.
- Em Andamento: Quando uma tarefa tiver sido iniciada, ela é movida para cá. 
- Fase de Teste: Checagem de Qualidade. Quando as tarefas são concluídas, eles são movidas para o “CQ”. No final da semana, eu revejo essa lista para garantir que tudo saiu perfeito.
- Concluído: nesta lista são colocadas as tarefas que passaram pelos testes e controle de qualidade e estão prontos para ser entregues ao usuário. Não há mais edições ou revisões necessárias, ele está agendado e pronto para a ação. 
- Impedimentos: Quando alguma coisa impede a conclusão da tarefa, ela é movida para esta lista juntamente com um comentário sobre o que está travando a tarefa. 


O quadro kanban do grupo no Trello está disponível através da URL  JIT-Home | Trelloe é apresentado, no estado atual, na Figura 2. A definição desta estrutura se baseou na proposta feita por Littlefield (2016).

Organização Trello
[link text]
(https://ibb.co/3W5g9hv)


#### Arquitetura da Solução

Nesta seção são apresentados os detalhes técnicos da solução criada pela equipe, tratando dos componentes que fazem parte da solução e do ambiente de hospedagem da solução. 

Diagrama de Computadores

Os componentes que fazem parte da solução são apresentados na Figura que se segue. 

Arquitetura
[link text]
(https://ibb.co/rs7RwxR)

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
  
  A publicação do site no Heroku é feita por meio de uma submissão do projeto (push) via git para o repositório remoto que se encontra no endereço: 
  
