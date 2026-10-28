
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastrar Personagem</title>

    <link rel="stylesheet" href="assets/css/cadastrar.css">
</head>
<body>

    <div class="container-cadastro">

        <h1>Cadastrar personagem</h1>

        <p class="descricao">
            Preencha os dados para adicionar um personagem
        </p>

        <?php if ($mensagem != "") { ?>
            <p class="mensagem">
                <?php echo htmlspecialchars($mensagem); ?>
            </p>
        <?php } ?>

        <form class="formulario"
              method="POST"
              action="index.php?acao=cadastrar">

            <label for="nome">Nome:</label>
            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Digite o nome do personagem"
                required
            >

            <label for="universo">Universo:</label>
            <input
                type="text"
                id="universo"
                name="universo"
                placeholder="Digite o universo do personagem"
                required
            >

            <label for="poder">Poder:</label>
            <input
                type="text"
                id="poder"
                name="poder"
                placeholder="Digite o poder do personagem"
                required
            >

            <button type="submit">CADASTRAR</button>

        </form>

        <a class="voltar" href="index.php">
            Voltar para a lista
        </a>

    </div>

</body>
</html>
