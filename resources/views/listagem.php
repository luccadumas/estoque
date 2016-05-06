<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <title>Controle :::Estoque:::</title>
    </head>
    <body>
        <h1>Listagem de Produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            <?php foreach ($produtos as $p): ?>
            <tr>
                <td><?= $p->nome ?></td>
                <td><?= $p->valor ?></td>
                <td><?= $p->descricao ?></td>
                <td><?= $p->quantidade ?></td>
                <td>
                    <a href="/produtos/mostra?id=<?= $p->id ?>">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>