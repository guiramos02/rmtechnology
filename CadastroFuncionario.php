<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de cadastro do funcionário</title>
  <link rel="stylesheet" href="CadastroFuncionario.css">

</head>

<body>
  <div id="cliente">
    <div class="product-informations">
      <div class="clientes-img">
        <img src="IMG-20220903-WA0033.jpg">
        <h1>RM Technology</h1>
        <div class="product-button">
          <button><a href="">CONSULTAR CHAMADOS</a></button>
          <button><a href="">CONSULTAR BASE DE CONHECIMENTO</a></button>
          <button><a href="">CHAMADOS ATENDIDOS</a></button>
          <button><a href="">GERAR RELATÓRIOS</a></button>
          <button><a href="">CADASTROS</a></button>
        </div>
      </div>
      <div class="clientes-form">
         <div id="option-form">
          <h2>ESCOLHA O CADASTRO</h2>
          <a href="CadastroCliente.php" target="_blank">
          <button>CLIENTE</button>
          </a>
          <a href="CadastroFuncionario.php">
            <button>FUNCIONÁRIO</button>
          </a>
        </div>
        <form method="post" action="FuncionarioAction.php">
          <div class="nomeEmpresa">
            <span>NOME</span><br>
            <input name="textName" id="textName" class="custom" type="text">
          </div>
          <div>
            <span>E-MAIL</span><br>
            <input name="textEmail" id="textEmail" class="custom" type="email">
          </div>
          <div>
            <span>CPF</span><br>
            <input name="textCpf" id="textCpf" class="custom" type="text">
          </div>
          <div>
            <span>CARGO</span><br>
            <input name="textCargo" id="textCargo" class="custom report" type="text">
          </div>
          <div class="product-button-secondary">
            <button><a href="">CANCELAR</a></button>
            <button value="Criar usuario" name="criar"id="create-form" type="submit" >CRIAR</button>
            <button value="Deletar usuario" name="deletar"id="delete-form" type="submit" >DELETAR</button>
            <button value="Atualizar usuario" name="atualizar"id="update-form" type="submit" >ATUALIZAR</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>