<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    .body {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .form {
        background-color: white;
        padding: 100px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 350px;
        display: flex;
        flex-direction: column;
    }

    </style>


</head>

<body>

    <div class="body">
        <form class="form" action="faleconoscorequest.php" method="post">
            <label>Nome: </label>
            <input type="text" name="nome" required> <br>

            <label>Email para contato: </label>
            <input type="text" name="email" required> <br>

            <label>Título: </label>
            <input type="text" name="titulo" required> <br>

            <label>Mensagem: </label>
            <textarea name="mensagem" required></textarea> <br>

            <input type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>