<?php

$missao = "Realçar a beleza única de cada cliente.";
$visao = "Ser referência em estilo, inovação e cuidado.";
$valores = ["Confiança", "Dedicação", "Criatividade"];
$anoAtual = date("Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sobre Nós - Victor Glamour Hair</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1 class="titulo-section">Sobre Nós</h1>
  </header>

  <main class="conteudo" style="padding: 20px;">
    <section class="texto">
      <p><strong>Missão:</strong> <?php echo $missao; ?></p>
      <p><strong>Visão:</strong> <?php echo $visao; ?></p>
      <p><strong>Valores:</strong> <?php echo implode(", ", $valores); ?></p>
    </section>
  </main>

  <footer style="text-align: center; margin-top: 50px;">
    <p>&copy; <?php echo $anoAtual; ?> Victor Glamour Hair. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
