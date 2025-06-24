<?php
$anoAtual = date("Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Dicas para Cabelos com Progressiva - Victor Glamour Hair</title>
  <link rel="icon" type="image/png" href="Img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-image: url('Img/AT WORK (4).png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: #fff;
    }

    .navbar-custom {
      background-color: #c46a7e;
    }

    .navbar-custom .navbar-brand img {
      height: 60px;
    }

    .conteudo {
      background-color: rgba(147, 50, 69, 0.6);
      padding: 40px;
      border-radius: 10px;
      max-width: 1100px;
      margin: 60px auto;
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

    .info-box img {
      width: 80px;
      height: 80px;
      object-fit: contain;
      margin-bottom: 15px;
    }

    .info-box h3 {
      color: #f4c2c2;
      font-weight: 600;
    }

    footer {
      text-align: center;
      margin-top: 50px;
      padding: 20px;
      font-size: 0.9rem;
      color: white;
    }

    @media (max-width: 576px) {
      .info-box img {
        width: 60px;
        height: 60px;
      }
    }
  </style>
</head>

<body>
  <!-- Header com navbar -->
  <nav class="navbar navbar-custom">
    <div class="container justify-content-center">
      <a class="navbar-brand" href="index.html" title="Victor Glamour">
        <img src="Img/LogoCerta.png" alt="Logo Victor Glamour Hair" />
      </a>
    </div>
  </nav>

  <!-- Conteúdo principal -->
  <main class="conteudo text-center text-white">
    <h2 class="mb-5">Dicas para Cabelos com Progressiva</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

      <div class="col">
        <div class="info-box">
          <img src="Img/shampoo.png" alt="Shampoo sem sulfato">
          <h3>Use Shampoo Sem Sulfato</h3>
          <p>Shampoos com sulfato removem a progressiva mais rapidamente. Prefira produtos suaves, específicos para cabelos com química.</p>
        </div>
      </div>

      <div class="col">
        <div class="info-box">
          <img src="Img/shower.png" alt="Água morna">
          <h3>Evite Lavar com Água Quente</h3>
          <p>Água muito quente abre as cutículas do cabelo, acelerando a saída da progressiva. Use água morna ou fria.</p>
        </div>
      </div>

      <div class="col">
        <div class="info-box">
          <img src="Img/body-lotion.png" alt="Hidratação">
          <h3>Hidrate Regularmente</h3>
          <p>Mesmo com progressiva, hidrate seu cabelo para manter brilho e maciez com máscaras nutritivas.</p>
        </div>
      </div>

      <div class="col">
        <div class="info-box">
          <img src="Img/spray.png" alt="Protetor térmico">
          <h3>Proteja do Calor</h3>
          <p>Use protetor térmico antes do secador ou chapinha para evitar danos aos fios com progressiva.</p>
        </div>
      </div>

      <div class="col">
        <div class="info-box">
          <img src="Img/hair-dye.png" alt="Retoque">
          <h3>Retoque com Cuidado</h3>
          <p>Não reaplique progressiva com muita frequência. Respeite o tempo recomendado e cuide bem do cabelo entre retoques.</p>
        </div>
      </div>

      <div class="col">
        <div class="info-box">
          <img src="Img/hair-clip.png" alt="Retoque">
          <h3>Não prenda o cabelo molhado</h3>
          <p>Prender o cabelo úmido pode causar marcas e até quebra, além de atrapalhar o efeito liso.</p>
        </div>
      </div>

    </div>
  </main>

  <!-- Rodapé -->
  <footer>
    <p>&copy; <?php echo $anoAtual; ?> Victor Glamour Hair. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
