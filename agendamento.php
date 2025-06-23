<?php
$anoAtual = date("Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Agendamento - Victor Glamour Hair</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-image: url('Img/fundo-salao.jpg'); /* ajuste o caminho da imagem */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: #fff;
    }

    .conteudo {
      background-color: rgba(255, 189, 202, 0.6);
      padding: 40px;
      border-radius: 10px;
      max-width: 600px;
      margin: 60px auto;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-top: 20px;
    }

    input, textarea {
      padding: 10px;
      border-radius: 5px;
      border: none;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color:rgb(177, 68, 88);
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #c2185b;
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
        <input type="text" name="nome" placeholder="Seu nome completo" required>
        <input type="email" name="email" placeholder="Seu e-mail" required>
        <input type="tel" name="telefone" placeholder="Seu telefone" required>
        <input type="date" name="data" required>
        <input type="time" name="hora" required>
        <textarea name="mensagem" rows="4" placeholder="Mensagem ou serviço desejado"></textarea>
        <input type="submit" value="Agendar">
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; <?php echo $anoAtual; ?> Victor Glamour Hair. Todos os direitos reservados.</p>
  </footer>
</body>
</html>

