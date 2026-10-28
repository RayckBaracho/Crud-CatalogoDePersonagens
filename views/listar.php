
<link rel="stylesheet" href="assets/css/listar.css">

<div class="container-listagem">

    <h1>Catálogo de personagens</h1>

    <p class="descricao">
        Confira os personagens cadastrados na plataforma
    </p>

    <a class="botao-cadastrar" href="index.php?acao=cadastrar">
        + Cadastrar personagem
    </a>

    <div class="lista-personagens">

        <?php if (empty($personagens)) { ?>

            <p class="lista-vazia">
                Nenhum personagem cadastrado.
            </p>

        <?php } ?>

        <?php foreach ($personagens as $personagem) { ?>

            <div class="personagem">

                <p>
                    <strong>ID:</strong>
                    <?php echo $personagem["id"]; ?>
                </p>

                <h2>
                    <?php echo htmlspecialchars($personagem["nome"]); ?>
                </h2>

                <p>
                    <strong>Universo:</strong>
                    <?php echo htmlspecialchars($personagem["universo"]); ?>
                </p>

                <p>
                    <strong>Poder:</strong>
                    <?php echo htmlspecialchars($personagem["poder"]); ?>
                </p>

                <form
                    action="index.php?acao=excluir"
                    method="POST"
                    onsubmit="return confirm('Tem certeza que deseja excluir este personagem?');"
                >

                    <input
                        type="hidden"
                        name="id"
                        value="<?php echo $personagem["id"]; ?>"
                    >

                    <button type="submit" class="botao-excluir">
                        Excluir
                    </button>

                </form>

            </div>

        <?php } ?>

    </div>

</div>
