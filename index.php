
<?php

require_once __DIR__ . "/controllers/PersonagemController.php";

$controller = new PersonagemController();

$acao = $_GET["acao"] ?? "listar";

$mensagem = "";

if ($acao == "cadastrar") {

    $mensagem = $controller->cadastrar();

    require __DIR__ . "/views/cadastrar.php";

} elseif ($acao == "excluir") {

    $controller->excluir();

} else {

    $personagens = $controller->listar();

    require __DIR__ . "/views/listar.php";
}

?>
