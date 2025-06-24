<?php
$anoAtual = date("Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Agendamento - Victor Glamour Hair</title>
  <link rel="icon" type="image/png" href="Img/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="CSS/style.css" />
  <style>
    body {
        margin: 0;
      font-family: 'Poppins', sans-serif;
      background-image: url('Img/AT WORK (4).png');
      background-size: 120% 110%;
      background-position: center -80px;
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
      align-items: center;
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
      resize: none;
    }

    input[type="submit"] {
      background-color: rgb(177, 68, 88);
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-weight: 600;
    }

    input[type="submit"]:hover {
      background-color: rgb(139, 58, 81);
    }

    /* Estilo para o resultado do CEP */
    #resultado-cep {
      margin-top: 10px;
      background-color: rgba(255, 255, 255, 0.9);
      color: #333;
      padding: 12px;
      border-radius: 5px;
      font-size: 14px;
      line-height: 1.4;
      min-height: 70px;
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
      <form action="enviar.php" method="post" id="form-agendamento">
        <input type="text" name="nome" placeholder="Seu nome completo" required />
        <input type="email" name="email" placeholder="Seu e-mail" required />
        <input type="tel" name="telefone" placeholder="Seu telefone com DDD" required
               pattern="[0-9]{10,11}" inputmode="numeric"
               title="Digite apenas números com DDD, ex: 11912345678" />
        
        <!-- Campo CEP -->
        <input type="text" id="cep" name="cep" placeholder="Digite seu CEP (apenas números)" maxlength="8" pattern="\d{8}" title="Digite 8 números do CEP" required />
        
        <!-- Resultado do CEP -->
        <div id="resultado-cep"></div>

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

  <script>
    const formAgendamento = document.getElementById('form-agendamento');
    const inputCep = document.getElementById('cep');
    const resultadoCep = document.getElementById('resultado-cep');

    // Quando o campo cep perder o foco (blur), já buscar o endereço automaticamente
    inputCep.addEventListener('blur', () => {
      let cep = inputCep.value.replace(/\D/g, '');

      if (cep.length !== 8) {
        resultadoCep.textContent = 'Por favor, digite um CEP válido com 8 dígitos.';
        return;
      }

      resultadoCep.textContent = 'Buscando endereço...';

      fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(data => {
          if (data.erro) {
            resultadoCep.textContent = 'CEP não encontrado.';
          } else {
            resultadoCep.innerHTML = `
              <p><strong>Logradouro:</strong> ${data.logradouro || '-'}</p>
              <p><strong>Bairro:</strong> ${data.bairro || '-'}</p>
              <p><strong>Cidade:</strong> ${data.localidade || '-'}</p>
              <p><strong>Estado:</strong> ${data.uf || '-'}</p>
            `;
          }
        })
        .catch(() => {
          resultadoCep.textContent = 'Erro ao buscar o CEP. Tente novamente mais tarde.';
        });
    });

    // Opcional: impedir envio do formulário se o CEP estiver inválido
    formAgendamento.addEventListener('submit', function(event) {
      let cep = inputCep.value.replace(/\D/g, '');
      if (cep.length !== 8) {
        event.preventDefault();
        resultadoCep.textContent = 'Por favor, digite um CEP válido com 8 dígitos antes de enviar.';
        inputCep.focus();
      }
    });
  </script>
</body>
</html>



