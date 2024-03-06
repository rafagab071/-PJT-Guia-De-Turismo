<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Central Guia Turístico</title>
   <link rel="stylesheet" href="./testecss.css" />   
   <style>
      /* Adiciona um estilo específico para esconder o formulário inicialmente */
      .login-container {
         display: none;
      }

      /* Posiciona o login acima do texto principal */
      .login-container:before {
         content: "Login";
         display: block;
         font-size: 1.5em;
         margin-bottom: 10px;
         font-weight: bold;
      }
   </style>
</head>
<body>      
  <header>
      <h1>Central Guia Turístico</h1>
  </header>
  <nav id="menu">
      <span class="menu_icon"></span>
      <ul>
          <li><a href="javascript:void(0);" onclick="toggleLoginForm()">Login</a></li>
      </ul>
  </nav>
  
  <main id="container">
    <!-- Adiciona o formulário de login acima do texto principal -->
    <div class="login-container">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <p>Bem-vindo ao nosso portal turístico, onde a aventura começa e as memórias inesquecíveis se formam. Se você está procurando inspiração para a sua próxima jornada ou deseja explorar destinos exóticos, você está no lugar certo!</p>
  </main>

  <script>
      // Função para alternar a visibilidade do formulário de login
      function toggleLoginForm() {
         var loginContainer = document.querySelector('.login-container');
         loginContainer.style.display = (loginContainer.style.display === 'none' || loginContainer.style.display === '') ? 'block' : 'none';
      }
  </script>
  <footer>
    <div id="clock"></div>
  </footer>
  <script src="./teste.js" defer></script>
</body>
</html>
