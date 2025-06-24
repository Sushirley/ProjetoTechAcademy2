<?php
$anoAtual = date("Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Serviços - Victor Glamour Hair</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="Img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-image: url('Img/AT WORK (4).png');
      background-size: 120% 150%;
      background-position: center -65px;
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
      padding: 60px;
      border-radius: 10px;
      max-width: 1100px;
      width: 100%;
      margin: 50px auto;
    }

    .info-box {
      background: rgba(0, 0, 0, 0.3);
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0,0,0,0.4);
      transition: transform 0.3s ease;
      height: 100%;
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
      font-size: 1.3rem;
    }

    .info-box p {
      font-size: 0.95rem;
    }

    footer {
      text-align: center;
      margin-top: 30px;
      padding: 20px;
      font-size: 0.9rem;
      color: black;
      background-color: #fff;
    }

    /* Responsivo */
    @media (max-width: 768px) {
      body {
       background-size: 500% 189%;
      background-position: center -230px;
      }

      .conteudo {
        padding: 25px 20px;
        margin: 20px auto;
        width: 95%;
      }

      .info-box img {
        width: 65px;
        height: 65px;
      }

      .info-box h3 {
        font-size: 1.1rem;
      }

      .info-box p {
        font-size: 0.85rem;
      }

      footer {
        font-size: 0.8rem;
      }
    }

    @media (max-width: 480px) {
      .info-box {
        padding: 15px;
      }

      .info-box img {
        width: 55px;
        height: 55px;
      }

      .info-box h3 {
        font-size: 1rem;
      }

      .info-box p {
        font-size: 0.8rem;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-custom">
    <div class="container justify-content-center">
      <a class="navbar-brand" href="index.html" title="Victor Glamour">
        <img src="Img/LogoCerta.png" alt="Logo Victor Glamour Hair" />
      </a>
    </div>
  </nav>

  <!-- Conteúdo -->
  <main class="conteudo text-center text-white">
    <h2 class="mb-4">Nossos Serviços</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

      <div class="col">
        <div class="info-box">
          <img src="Img/hair-cut.png" alt="Corte">
          <h3>Corte</h3>
          <p>Transforme seu visual com cortes modernos, clássicos ou personalizados, sempre valorizando sua identidade.</p>
        </div>
      </div>

      <div class="col">
        <div class="info-box">
          <img src="Img/hair-color.png" alt="Progressiva">
          <h3>Progressiva</h3>
          <p>Alisamento duradouro com brilho e maciez, ideal para quem busca praticidade no dia a dia.</p>
        </div>
      </div>

      <div class="col">
        <div class="info-box">
          <img src="Img/mask.png" alt="Hidratação">
          <h3>Hidratação</h3>
          <p>Tratamentos profundos para repor nutrientes e devolver a vitalidade dos fios.</p>
        </div>
      </div>

      <div class="col">
        <div class="info-box">
          <img src="Img/hair-dryer.png" alt="Escova">
          <h3>Escova</h3>
          <p>Finalização perfeita com escova lisa, modelada ou com volume, para qualquer ocasião.</p>
        </div>
      </div>

    </div>
  </main>

 
</body>
</html>