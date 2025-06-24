<?php
$anoAtual = date("Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Sobre o Profissional - Victor Glamour Hair</title>
  <link rel="icon" type="image/png" href="Img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-image: url('Img/AT WORK (4).png');
      background-size: 120% 110%;
      background-position: center -126px;
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

    h2 {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 600;
    }

    .info-box {
      background: rgba(0, 0, 0, 0.3);
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0,0,0,0.4);
      transition: transform 0.3s ease;
    }

    .info-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 20px rgba(255, 189, 199, 0.8);
    }

    .info-box h3 {
      margin-bottom: 15px;
      font-weight: 600;
      color: #f4c2c2;
    }

    .info-box p {
      margin: 0;
      line-height: 1.5;
    }

    .imagem-profissional img {
      width: 100%;
      max-width: 300px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.4);
      margin: 0 auto 30px;
      display: block;
    }

    footer {
      text-align: center;
      margin-top: 50px;
      padding: 20px;
      font-size: 0.9rem;
      color: black;
    }
  </style>
</head>

<body>
  <header>
    <a href="index.html" title="Logo Victor Glamour">
      <img src="Img/LogoCerta.png" alt="Logo Victor Glamour Hair" />
    </a>
  </header>

  <main class="conteudo">
    <h2>Sobre o Profissional</h2>

    <div class="imagem-profissional">
      <img src="Img/victor.png" alt="Foto do Profissional Victor Pereira Constantino">
    </div>

    <div class="row g-4">
      <div class="col-md-6">
        <div class="info-box">
          <h3>Identidade do Profissional</h3>
          <p><strong>Nome:</strong> Victor Pereira Constantino</p>
          <p><strong>Cargo/Especialidade:</strong> Cabeleireiro</p>
          <p><strong>Experiência:</strong> Iniciante na área</p>
          <p><strong>Formação:</strong> Curso de progressiva, escova, etc.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="info-box">
          <h3>Especialidades</h3>
          <p><strong>Técnicas:</strong> Progressiva, escova, hidratação, cortes e cachos</p>
          <p><strong>Estilo de Atendimento:</strong> Trabalho na área da beleza por amor. Desde pequeno, descobri a paixão de transformar visuais com as próprias mãos. Com o tempo, essa paixão cresceu e me inspirou a buscar formação profissional para tornar meu sonho realidade.</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="info-box">
          <h3>Missão e Valores</h3>
          <p><strong>Missão:</strong> Proporcionar transformação, beleza e autoestima às clientes</p>
          <p><strong>Valores:</strong> Respeito, pontualidade e inovação</p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="info-box">
          <h3>Informações do Salão</h3>
          <p><strong>Nome do Salão:</strong> Victor Glamour Hair</p>
          <p><strong>Localização:</strong> Jardim Paulista</p>
          <p><strong>Atendimento:</strong> Espaço próprio e atendimento a domicílio</p>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <p>&copy; <?php echo $anoAtual; ?> Victor Glamour Hair. Todos os direitos reservados.</p>
  </footer>
</body>
</html>


