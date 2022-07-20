<html>
  <head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro de Alunos</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: #fff6c3;">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style type="text/css">
      #tamanhoContainer {
        width: 500px;
      }
      
      #botao {
        background-color: #FEC68D;
        color: #ffffff
      }
    </style>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
    <h4>Formulário de Cadastro de Alunos</h4>
      <form action="alunos_insert.php" method="post" style="margin-top: 20px">
        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" placeholder="Digite o Nome" required>
        </div>
        <div class="form-group">
          <label>Data de Nascimento</label>
          <input type="text" class="form-control" id="data_de_nascimento" autocomplete="off" name="data de nascimento" placeholder="Digite a Data de Nascimento" required>
        </div>
        <div class="form-group">
          <label>CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira o CPF do Aluno" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Nome Da Mãe</label>
          <input type="text" class="form-control" id="nome_da_mae" name="nome_da_mae" placeholder="Digite o Nome Da Mãe" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Endereço </label>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o Endereço" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Curso</label>
          <input type="text" class="form-control" id="curso" name="curso" placeholder="Insira o Curso" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Digite o Email" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Gênero</label>
          <input type="text" class="form-control" id="genero" name="genero" placeholder="Insira seu Gênero" autocomplete="off" required>
        </div>
      <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        <button type="submit" id="botao" class="btn btn-primary botao">Cadastrar</button>
    </form>
    </div>
  </body>
</html>