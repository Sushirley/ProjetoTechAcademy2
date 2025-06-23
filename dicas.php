<?php
$anoAtual = date("Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Dicas para Cabelos com Progressiva - Victor Glamour Hair</title>
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
      margin-bottom: 40px;
      font-weight: 600;
    }

    /* Grid para as dicas */
    .dicas-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .info-box {
      background: rgba(0, 0, 0, 0.3);
      border-radius: 10px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
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
      margin-top: 0;
      margin-bottom: 15px;
      font-weight: 600;
      color: #f4c2c2;
    }

    .info-box p {
      margin: 0;
      line-height: 1.5;
    }

    footer {
      text-align: center;
      margin-top: 50px;
      padding: 20px;
      font-size: 0.9rem;
    }

    @media (max-width: 400px) {
      .info-box img {
        width: 60px;
        height: 60px;
      }
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
      <h2>Dicas para Cabelos com Progressiva</h2>
      <div class="dicas-grid">

        <div class="info-box">
          <img src="Img/shampoo.png" alt="Shampoo sem sulfato">
          <h3>Use Shampoo Sem Sulfato</h3>
          <p>Shampoos com sulfato removem a progressiva mais rapidamente. Prefira produtos suaves, específicos para cabelos com química.</p>
        </div>

        <div class="info-box">
          <img src="Img/shower.png" alt="Água morna">
          <h3>Evite Lavar com Água Quente</h3>
          <p>Água muito quente abre as cutículas do cabelo, acelerando a saída da progressiva. Use água morna ou fria.</p>
        </div>

        <div class="info-box">
          <img src="Img/body-lotion.png" alt="Hidratação">
          <h3>Hidrate Regularmente</h3>
          <p>Mesmo com progressiva, hidrate seu cabelo para manter brilho e maciez com máscaras nutritivas.</p>
        </div>

        <div class="info-box">
          <img src="Img/spray.png" alt="Protetor térmico">
          <h3>Proteja do Calor</h3>
          <p>Use protetor térmico antes do secador ou chapinha para evitar danos aos fios com progressiva.</p>
        </div>

        <div class="info-box">
          <img src="Img/hair-dye.png" alt="Retoque">
          <h3>Retoque com Cuidado</h3>
          <p>Não reaplique progressiva com muita frequência. Respeite o tempo recomendado e cuide bem do cabelo entre retoques.</p>
        </div>

        <div class="info-box">
          <img src="Img/damaged-hair.png" alt="Retoque">
          <h3>Não prenda o cabelo molhado</h3>
          <p>Prender o cabelo úmido pode causar marcas e até quebra, além de atrapalhar o efeito liso.</p>
        </div>

      </div>
    </section>
  </main>

  <footer>
    <p>&copy; <?php echo $anoAtual; ?> Victor Glamour Hair. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
