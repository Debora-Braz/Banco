<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            margin: 0;
        }

        main{
            display: flex;
            margin: 10px;
            padding: 10px;
        }

        img{
            width: 120px;
            
        }
    #dados{
        background-color: lightcoral;
        width: 80%;
        height: 80%;
        color: green;
        border: 2px solid; 
        border-radius: 10px;
        padding: 10px;
    }
    
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th,td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: lightgrey;
    }
    th {
        background-color: green;
        color: white;
    }
    
    </style>

</head>
<body>
    <main>
            <div id="imagem">
                <img src="imagem.png">
            </div>
    <div id="dados"> 
        <p>
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
            <?php
            include "conecta.php";
            $sql = "SELECT id, nome, senha, email FROM usuario";
            $resultado = mysqli_query($conexao, $sql);
            while ($registro = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td>" . $registro['id'] . "</td>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td>" . $registro['email'] . "</td></tr>";
            }
            ?>
        </table>
        </p>
    </div>
    </main>
</body>
</html>