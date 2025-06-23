<?php
$anoAtual = date("Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Agendamento - Victor Glamour Hair</title>
  <link rel="icon" type="image/png" href="Img/favicon.png"> <!-- Aqui -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-image: url('Img/AT WORK (4).png');
    background-size: 100% auto;
    background-position: center;
    background-repeat: no-repeat;
    color: #fff;
  }


    .conteudo {
      background-color: rgba(147, 50, 69, 0.6);
      padding: 40px;
      border-radius: 10px;
      max-width: 600px;
      margin: 60px auto;
      display: flex;
      flex-direction: column;
      align-items: center; /* Centraliza o conteúdo */
    }

    form {
      width: 100%;
      max-width: 550px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input,
    textarea,
    input[type="submit"] {
      width: 100%;
      padding: 12px;
      border-radius: 5px;
      border: none;
      font-size: 16px;
      box-sizing: border-box;
      resize: none; /* impede o redimensionamento */
    }

    input[type="submit"] {
      background-color: rgb(177, 68, 88);
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-weight: 600;
    }

    input[type="submit"]:hover {
      background-color:rgb(139, 58, 81);
    }

    footer {
      text-align: center;
      margin-top: 50px;
      color: #fff;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar">
      <div class="nav-center">
        <a href="index.html" title="Logo Victor Glamour">
          <img src="Img/LogoCerta.png" alt="Logo Victor Glamour Hair" style="height: 60px;" />
        </a>
      </div>
      <div class="menu-toggle" id="menu-toggle">☰</div>
      <ul class="nav-menu" id="menu"></ul>
    </nav>
  </header>

<main class="conteudo">
  <section class="formulario">
    <h2 style="text-align: center;">Agende seu horário</h2>
    <form action="enviar.php" method="post">
      <input type="text" name="nome" placeholder="Seu nome completo" required />
      <input type="email" name="email" placeholder="Seu e-mail" required />
      <input type="tel" name="telefone" placeholder="Seu telefone com DDD" required
             pattern="[0-9]{10,11}" inputmode="numeric"
             title="Digite apenas números com DDD, ex: 11912345678" />
      <input type="date" name="data" required />
      <input type="time" name="hora" required />
      <textarea name="mensagem" rows="4" placeholder="Mensagem ou serviço desejado"></textarea>
      <input type="submit" value="Agendar" />
    </form>
  </section>
</main>


  <footer>
    <p>&copy; <?php echo $anoAtual; ?> Victor Glamour Hair. Todos os direitos reservados.</p>
  </footer>
</body>
</html>