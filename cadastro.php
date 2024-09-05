<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        form {
            position: fixed;
            top: 30%;
            left: 30%;
        }

        h2 {
            position: fixed;
            top: 10%;
            left: 30%;
        }

        a{
            position: fixed;
            bottom: 15%;
            left: 30%;
        }

        input{
            padding: 7px 50px;
            margin: 8px 0;
            border: 1px solid #000000;
            border-radius: 6px;
        }
    </style>
</head>
<body style="font-size: 30px;">
    
<form action="inserir2.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        <label for="email">Email:</label>
        <input type="text" name="email">
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>

    </form>

</body>
</html>