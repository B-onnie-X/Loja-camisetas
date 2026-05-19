<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Camisetas</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

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

                }).fail(function (jqXHR, textStatus) {
                    alert("Request failed: " + textStatus);

                }).always(function () {
                    alert("Completou!");
                });

            });
        });
    
    </script>

</head>

<body>

    <div class="container">
        <h2>Loja de Camisetas</h2>

        <form id="formCamiseta" method="post" action="insere.php">

            <label>Tamanho:</label>
            <select name="tamanho" id="tamanho">
                <option value="PP">PP</option>
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="GG">GG</option>
            </select>

            <br><br>

            <label>Cor:</label>
            <select name="cor" id="cor">
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
            <br><br>

            <button type="submit">Enviar</button>

        </form >
        <div class="enviar"></div>
    
    </div>





</body>

</html>