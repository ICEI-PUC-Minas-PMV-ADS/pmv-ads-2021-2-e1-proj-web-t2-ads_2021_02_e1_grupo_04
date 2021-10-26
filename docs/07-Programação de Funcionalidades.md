# Programação de Funcionalidades

<span style="color:red">Pré-requisitos: <a href="2-Especificação do Projeto.md"> Especificação do Projeto</a></span>, <a href="3-Projeto de Interface.md"> Projeto de Interface</a>, <a href="4-Metodologia.md"> Metodologia</a>, <a href="3-Projeto de Interface.md"> Projeto de Interface</a>, <a href="5-Arquitetura da Solução.md"> Arquitetura da Solução</a>

![image](https://user-images.githubusercontent.com/91296105/138785342-fec4f375-c2c1-4da9-b87b-dce9a47c6238.png)

![image](https://user-images.githubusercontent.com/91296105/138785350-12aae596-288a-4935-b0b2-ff537fab471d.png)

![image](https://user-images.githubusercontent.com/91296105/138785363-025679f3-dd5b-4aa5-a95b-f1608e68d960.png)

![image](https://user-images.githubusercontent.com/91296105/138785382-fb6a8d4e-7262-4272-bcb8-83b8842cc9e7.png)



<H2> Arquivo de validação do Login </h2>
<code> 
  <?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: login.html"); exit;
  }
  



        // Tenta se conectar ao servidor MySQL
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);     
  $link = mysqli_connect('localhost', 'root', '*Puc@2021') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  mysqli_select_db($link,'usuarios') or trigger_error(mysql_error());

  $usuario = mysqli_real_escape_string($link,$_POST['usuario']);
  $senha = mysqli_real_escape_string($link,$_POST['senha']);


  
  // Validação do usuário/senha digitados
  $sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysqli_query($link,$sql);
  if (mysqli_num_rows( $query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
      
      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();

      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['nivel'];

      // Redireciona o visitante
      header("Location: main.html"); exit;
  }



   
  

  ?>
  
 
 
  </code>
  
  
  <h2> Destruir Sessao - Logout  </h2>
  <code>
  
      session_start(); // Inicia a sessão
      session_destroy(); // Destrói a sessão limpando todos os valores salvos
      header("Location: index.html"); exit; // Redireciona o visitante
  </code>
  







