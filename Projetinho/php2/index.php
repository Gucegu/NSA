<?php
    header("Access-Control-Allow-Origin: *"); // isso aq permite requisições de qualquer origem
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // isso permite esses métodos HTTP
    header("Access-Control-Allow-Headers: Content-Type"); // isso permite headers personalizados
    header("Content-Type: application/json"); // aq é só uma garantia q garante resposta em JSON
    
    
    $hostname = "localhost";
    $bancodedados = "nsa";
    $usuario = "eu nao vou colocar meu user nem minha senha no github ne";
    $senha = "Voces viram que o neymar vai jogar no santos dnv?";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysqli->connect_errno){
        echo "falha ao conectar" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }

    $sql = "SELECT id, Nome FROM instituicao";
    $result = $mysqli->query($sql);

    $escolas = [];
    if ($result->num_rows > 0) {
        while($show = $result->fetch_assoc()) {
            $escolas [] = $show;
        }
    }

    echo json_encode($escolas);

    $mysqli->close()
?>