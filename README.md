
FUNCIONAMENTO DO PROGRAMA:
==============================================================================================================================================

**index.php**:Tela inicial para adiconar tarefas (Titulo e descrição);
**conn.php**: Conexão com o banco de dados;
**adicionarTarefa.php**: Arquivo para salvar as informações do formulário no BD;
**listaTarefa.php**: Tela para visualizar as tarefas, alterar o status e apagar as tarefas.

==============================================================================================================================================

--- ADICIONANDO TAREFA ---

1. Ao abrir o arquivo "index.php", verá 1 tela com 2 inputs, onde está respectivamente para titulo e descrição(ambos os campos são obrigatórios ser preenchidos);
2. Preencha os campos dos inputs e em seguida, clique no botão "Adicionar Tarefa";
3. Ao clicar no botão "Adicionar Tarefa", os arquivos enviados serão salvos no BD(através do arquivo "adicionarTarefa.php") e em seguida, voce será redirecionado para outra página (listaTarefa.php).

--- VISUALIZANDO TAREFA ---

1. Para acessar a página, ainda na tela "index.php", terá 1 botão escrito "VER TAREFAS", ao clicar será redirecionado para a página "listaTarefa.php";
2. No arquivo, terá 1 tabela com os campos de ID, TITULO, DESCRIÇÃO, STATUS e EXCLUIR;
3. As informações que foram inseridas serão exibidas nessa tela, podendo fazer alteração nos campos de Status e Excluir;

--- ALTERANDO STATUS ---
1. Para alterar status, basta clicar no checkbox preenchido, que automáticamente altera o status de "pendente" (que vem como padrão), e edita para "concluida";
OBS: O sistema funciona da seguinte forma: Para alterar os status, Fiz um formulário para esse botão, que, ao clicar nele, consta que o formulário foi preenchido. Portanto criei 1 IF que ao realizar essa alteração no checkbox, altera o status no banco de dados de 0 para 1, alterando o status na tabela para "Concluido".

--- EXCLUIR TAREFA ---
1. Na sessão de EXCLUIR da tabela, terá botões vermelhos em cada linha das tarefas, ao pressionar ele, a tarefa será excluída.
OBS: Criei 1 Formulário para o botão de excluir, fazendo que, ao preencher o formulário(pressionar o botão), acione o IF que exclui todos os itens da linha em que foi pressionada o botão(através do ID do BD). *O CONTEÚDO DA TAREFA TAMBÉM SERÁ DELETADO DO BD*

==============================================================================================================================================

--- LINKANDO BANCO DE DADOS ---

1. Linkei em todas as páginas através do Require_Once, que o torna essencial para o funcionamento normal do site.

==============================================================================================================================================

--- adicionarTarefa.php---
1. Através do formulário com o metódo POST, criei as variáveis e atribui à elas os nomes dos inputs da tela do "index.php". Após isso, fiz essas informações serem enviadas aos elementos da tabela do BD e coloquei para redirecionar para a página "listaTarefa.php".

==============================================================================================================================================
PROGRAMAS UTILIZADOS:
- XAMPP
- MySQL WorkBench
- Visual Studio Code
