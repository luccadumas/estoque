<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"
</head>

<div class="container">
    <h1>Detalhes do produto: <?=$p->nome?></h1>

    <ul>
        <li>
            <b>Valor:</b> R$ <?=$p->valor?>
        </li>
        <li>
            <b>Descrição:</b> R$ <?=$p->descricao?>
        </li>
        <li>
            <b>Quantidade em estoque:</b> R$ <?=$p->quantidade?>
        </li>
    </ul>
</div>

</html>