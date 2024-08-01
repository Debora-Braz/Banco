<?php
    include "conecta.php";

    echo "<br><br>";
    //Primeira consulta
    echo "<b>Mostrando todos os registros</b><br>";
    $sql = "SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            echo "Id: " . $registro["id"]. " - Nome: " . $registro["nome"]. " " . $registro["senha"]. 
            " - Email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }
    echo "<br>";
    //Segunda consulta
    echo "<b>Nomes que começam com 'L'</b><br>";
    $sql = "SELECT id, nome, senha, email FROM usuario where nome like 'l%'";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            echo "Id: " . $registro["id"]. " - Nome: " . $registro["nome"]. " " . $registro["senha"]. 
            " - Email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }

    echo "<br>";
    //Terceira consulta
    echo "<b>Ordenando registros por email</b><br>";
    $sql = "SELECT id, nome, senha, email FROM usuario order by email";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            echo "Id: " . $registro["id"]. " - Nome: " . $registro["nome"]. " " . $registro["senha"]. 
            " - Email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }

    echo "<br>";
    //Quarta consulta
    echo "<b>Verificando se existe usuário = 'Carlos' com senha = '123' e mostrar seu email. Caso não exista, mostrar uma mensagem.</b><br>";
    $sql = "SELECT id, nome, senha, email FROM usuario where nome='Carlos' and senha='123'";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            echo "Email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }

?>