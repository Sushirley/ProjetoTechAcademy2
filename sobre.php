<?php
$anoAtual = date("Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Sobre o Profissional - Victor Glamour Hair</title>
  <link rel="icon" type="image/png" href="Img/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-image: url('Img/AT WORK (4).png');
      background-size: 120% 120%;
      background-position: center;
      background-repeat: no-repeat;
      color: #fff;
    }

    header {
      padding: 20px;
      text-align: center;
    }

    header img {
      height: 60px;
    }

    .conteudo {
      background-color: rgba(147, 50, 69, 0.6);
      padding: 40px;
      border-radius: 10px;
      max-width: 1100px;
      margin: 60px auto;
    }

    .sobre-profissional h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .layout-completo {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      align-items: flex-start;
    }

    .imagem-profissional {
      flex: 1 1 400px;
      max-width: 300px;
      text-align: center;
    }

    .imagem-profissional img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.4);
      object-fit: cover;
       margin-top: 90px;
    }

    .info-container {
      flex: 1 1 250px;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;
    }

    .info-box {
      background: rgba(0, 0, 0, 0.3);
      padding: 20px;
      border-radius: 5px;
      flex: 1 1 400px;
    }

    .info-box h3 {
      margin-top: 0;
      border-bottom: 1px solid #fff;
      padding-bottom: 10px;
    }

    .info-box p {
      margin: 10px 0;
      line-height: 1.5;
    }

    footer {
      text-align: center;
      margin-top: 50px;
      padding: 20px;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="nav-center">
        <a href="index.html" title="Logo Victor Glamour">
          <img src="Img/LogoCerta.png" alt="Logo Victor Glamour Hair" />
        </a>
      </div>
    </nav>
  </header>

  <main class="conteudo">
    <section class="sobre-profissional">
      <h2>Sobre o Profissional</h2>
      <div class="layout-completo">
        
        
        <div class="imagem-profissional">
          <img src="Img/victor.png" alt="Foto do Profissional Victor Pereira Constantino">
        </div>

    
        <div class="info-container">
          <div class="info-box">
            <h3>Identidade do Profissional</h3>
            <p><strong>Nome:</strong> Victor Pereira Constantino</p>
            <p><strong>Cargo/Especialidade:</strong> Cabeleireiro</p>
            <p><strong>Experiência:</strong> Iniciante na área</p>
            <p><strong>Formação:</strong> Curso de progressiva, escova, etc.</p>
          </div>

          <div class="info-box">
            <h3>Especialidades</h3>
            <p><strong>Técnicas:</strong> Progressiva, escova, hidratação, cortes e cachos</p>
            <p><strong>Estilo de Atendimento:</strong> Trabalho na área da beleza por amor. Desde pequeno, descobri a paixão de transformar visuais com as próprias mãos. Com o tempo, essa paixão cresceu e me inspirou a buscar formação profissional para tornar meu sonho realidade.</p>
          </div>

          <div class="info-box">
            <h3>Missão e Valores</h3>
            <p><strong>Missão:</strong> Proporcionar transformação, beleza e autoestima às clientes</p>
            <p><strong>Valores do Atendimento:</strong> Respeito, pontualidade e inovação</p>
          </div>

          <div class="info-box">
            <h3>Informações do Salão</h3>
            <p><strong>Nome do Salão:</strong> Victor Glamour Hair</p>
            <p><strong>Localização:</strong> Jardim Paulista</p>
            <p><strong>Atendimento:</strong> Espaço próprio e atendimento a domicílio</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; <?php echo $anoAtual; ?> Victor Glamour Hair. Todos os direitos reservados.</p>
  </footer>
</body>
</html>

