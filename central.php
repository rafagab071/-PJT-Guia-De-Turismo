<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Central Guia Turístico</title>
   <link rel="stylesheet" href="./csscentral.css" />   
</head>
<body>      
  <header>
      <h1>Central Guia Turístico</h1>
  </header>
  <nav id="menu">
      <span class="menu_icon"></span>
      <ul>
          <li><a href="./central.php">Home</a></li>
          <li><a href= "./teste.php">Login</a></li>
          <li>
              <a href="#">Países</a>
              <ul id="paises-submenu" class="sub-menu">
                  <li><a href="./chile.php">Chile</a></li>
                  <li><a href="./santiago.php">Uruguai</a></li>
                  <li><a href="./santiago.php">Paraguai</a></li>
                  <li><a href="./santiago.php">Argentina</a></li>
                  <li><a href="./santiago.php">Equador</a></li>
                  <li><a href="./santiago.php">França</a></li>
                  <li><a href="./santiago.php">Alemanha</a></li>
                  <li><a href="./santiago.php">Espanha</a></li>
                  <li><a href="./santiago.php">Portugal</a></li>
              </ul>
          </li>
      </ul>
  </nav>
  
  <main id="container">
    <section class="wrapper">
      <div class="imagem-texto" id="loc">
      <img src="./imagens/localizacao.png">
        <p><strong>Tutorial</strong></p>
        <p>Selecione o <strong>país</strong> que deseja pesquisar na lista, redirecionaremos para a <strong>Capital</strong></p>
      </div>
      <div class="imagem-texto" id="mapa">
        <img src="./imagens/google maps.png" alt="Descrição da imagem 2">
        <p><strong>Deslocamento</strong></p>
        <p>Clique na opção do <strong>menu</strong> para ver o mapa da capital</p>
      </div>
      <div class="imagem-texto" id="pontos">
        <img src="./imagens/visita.png" alt="Descrição da imagem 3">
        <p><strong>Pontos Turísticos</strong></p>
        <p>Selecione a opção de <strong>Lugares Para Visitar</strong></p>
    </section>
  </main>
  <script src="./central.js" defer></script>
</body>
</html>