<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>
</head>

<body>
    <h3>Lanchonete - Pedidos</h3>
    <form action="pedido.php" method="POST">
        <h4>Lanches:</h4>
        <input type="radio" name="lanche" value="X Burger" />
        <label for="lanche">X Burger</label>
        <br>
        <input type="radio" name="lanche" value="X Salada" />
        <label for="lanche">X Salada</label>
        <br>
        <input type="radio" name="lanche" value="X Tudo" />
        <label for="lanche">X Tudo</label>
        <br>
        <h4>Opcionais:</h4>
        <input type="checkbox" name="maionese">
        <label for="maionese">Maionese</label>
        <br>
        <input type="checkbox" name="chaddar">
        <label for="chaddar">Chaddar</label>
        <br>
        <input type="checkbox" name="bacon">
        <label for="bacon">Bacon</label>
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>