<?php   include("../../path.php"); 
        include(ROOT_PATH . "/menu-inicial/reservas.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/style.css"> 
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <title>Document</title>

    <?php include("../header.php"); ?>

  </head>

<body>

<section class="intro">
  <div class="bg-image h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-50 ">
            <div class="card shadow-2-strong" style="background-color: rgb(241, 244, 249);">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-borderless mb-3"> 
                  <div class="texto" style="font-family: 'Dancing Script', cursive; font-size:130px"><h1>Criar Reserva</h1></div>
                   <!-- Formulário -->
                   <div class="center-form">
                   <form action="create.php" method="POST">
                    <div class="form-group">
                      <label for="nome_cliente">Nome Cliente:</label>
                      <input type="text" class="form-control" id="nome" name="nome_cliente" placeholder="Digite o nome do cliente">
                    </div>
                    <div class="form-group">
                      <label for="contato_cliente">Contato</label>
                      <input type="contato_cliente" class="form-control" id="contato" name="contato_cliente" placeholder="Digite o contato do cliente">
                    </div>
                    <select class="form-control nice-select wide" id="acompanhantes" name="acompanhantes" required>
                  <option value="" disabled selected>
                    Acompanhantes?
                  </option>
                  <option value="0">
                    0
                  <option value="1">
                    1
                  </option>
                  <option value="2">
                    2
                  </option>
                  <option value="3">
                    3
                  </option>
                  <option value="4">
                    4
                  </option>
                  <br>
                </select>
                <br>
                <select class="form-control nice-select wide" id="mesa" name="mesa"required>
                  <option value="" disabled selected>
                    Escolha sua mesa:
                  </option>
                  <option value="25">
                    25
                  </option>
                  <option value="34">
                    34
                  </option>
                  <option value="43">
                    43
                  </option>
                  <option value="59">
                    59
                  </option>
                </select>
                <br>
                    <div>
                    <input type="date" class="form-control date-picker" id="data" name="data_reserva" required>
                    </div>
                <br>
                    <input type="time" class="form-control" id="hora" name="hr_reserva" required>
                    </div>
                    <button type="submit" class="btn mt-4" id="btn-add" name="add-reservas" style="color: #ffff; position: relative; bottom: 50%">Reservar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

