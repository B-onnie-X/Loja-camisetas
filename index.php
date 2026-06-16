<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Camisetas</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#formCamiseta").submit(function (e) {
                e.preventDefault();

                $.ajax({
                    url: "insere.php",
                    type: "POST",
                    data: {
                        tamanho: $("#tamanho").val(),
                        cor: $("#cor").val()
                    },
                    dataType: "html"

                }).done(function (resposta) {
                     $(".enviar").html(resposta);
                     $('#modalcadastro').modal('hide');

                }).fail(function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);

                }).always(function () {
                    console.log("Completou!");
                });

            });

            $(document).on('click', '.excluir', function () {
              var id = $(this).attr("id");
              if(confirm("Realmente deseja excluir este registro?")){
                 $.ajax({
                    url: "apaga.php",
                    type: "POST",
                    data: "id="+id,
                    dataType: "html"

                }).done(function (resposta) {
                     $(".enviar").html(resposta);

                }).fail(function (jqXHR, textStatus) {
                     $("div").html("Request failed: " + textStatus);

                }).always(function () {
                    console.log("Completou a exclusão!");
                });

              }

        });
        
    });
    
    </script>

</head>

<body>

    <div class="container m-auto">
  <h2>Loja de Camisetas</h2>
  <br>

  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalcadastro">Abrir Cadastro</button>
<br> <br>
  
  <div class="modal fade" id="modalcadastro" role="dialog">
    <div class="modal-dialog">
    

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pedido de Camiseta</h4>
        </div>
        <div class="modal-body">
         <form id="formCamiseta" method="post" action="insere.php">

         <div class="form-group">
            <label for="tamanho">Tamanho:</label>
            <select name="tamanho" id="tamanho" class="form-control">
                <option value="">Selecione</option>
                <option value="PP">PP</option>
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="GG">GG</option>
            </select>
          </div>

            <br><br>

          <div class="form-group">
            <label for="cor">Cor:</label>
            <select name="cor" id="cor" class="form-control">
                <option value="">Selecione</option>
                <option value="Preta">Preta</option>
                <option value="Branca">Branca</option>
                <option value="Roxa">Roxa</option>
                <option value="Azul">Azul</option>
                <option value="Vermelha">Vermelha</option>
                <option value="Rosa">Rosa</option>
                <option value="Verde">Verde</option>
                <option value="Cinza">Cinza</option>
                <option value="Bege">Bege</option>
                <option value="Marrom">Marrom</option>
                <option value="Amarela">Amarela</option>
                <option value="Laranja">Laranja</option>

            </select>
          </div>
            <br><br>

            

        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-default" >Enviar</button>
          <br>
           
        </form >
  
        </div>
      </div>
      
    </div>
  </div>
  
</div>

  <div class="modal fade" id="modaledit" role="dialog">
    <div class="modal-dialog">
    

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alterar pedido de Camiseta</h4>
        </div>
        <div class="modal-body">
         <form id="formCamiseta" method="post" action="insere.php">

         <div class="form-group">
          <label for="tamanho">Tamanho:</label>
              <select name="tamanho" id="tamanho" class="form-control">
                <option value="">Selecione</option>
                <option value="PP">PP</option>
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="GG">GG</option>
            </select>
         </div>

            <br><br>

         <div class="form-group">
            <label for="cor">Cor:</label>
            <select name="cor" id="cor" class="form-control">
                <option value="">Selecione</option>
                <option value="Preta">Preta</option>
                <option value="Branca">Branca</option>
                <option value="Roxa">Roxa</option>
                <option value="Azul">Azul</option>
                <option value="Vermelha">Vermelha</option>
                <option value="Rosa">Rosa</option>
                <option value="Verde">Verde</option>
                <option value="Cinza">Cinza</option>
                <option value="Bege">Bege</option>
                <option value="Marrom">Marrom</option>
                <option value="Amarela">Amarela</option>
                <option value="Laranja">Laranja</option>

            </select>
          </div>
            <br><br>

            

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" >Enviar</button>
          <br>
           
        </form >
        
        </div>
      </div>
      
    </div>
  </div>
  








<div class="enviar">
    <?php
        include 'consulta2.php';
        inserir();
    ?>
</div>




</body>

</html>