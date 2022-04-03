<head>
    <link href="css/agenda.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="cabecalho">Contatos</h1>
        <hr>
    </header>
    <main>
        <div class="container all">
            <table class="table table-hover">
                <thead>
                    <tr class="table-top">
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Ativo</th>
                        <th>Data de criação</th> 
                        <th>Última modificação</th>
                        <th><a href="?controller=ContatosController&method=criar"><img src="img/perfil.png"></a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($contatos) {
                        foreach ($contatos as $contato) {
                            ?>
                            <tr class="table-corpo">
                                <td><?php echo $contato->nome; ?></td>
                                <td><?php echo $contato->email; ?></td>
                                <td><?php echo $contato->senha; ?></td>
                                <td><?php echo ($contato->ativo == 's' ? 'Ativo' : 'Inativo')?> </td>
                                <td><?php echo date('d/m/Y à\s H:i:s', strtotime($contato->create_date));?></td>
                                <td><?php echo date('d/m/Y à\s H:i:s', strtotime($contato->update_date));?></td>
                                <td>
                                    <a href="?controller=ContatosController&method=editar&id=<?php echo $contato->id; ?>" ><img excluir src="img/editar.png"></a></br>
                                    <a href="?controller=ContatosController&method=excluir&id=<?php echo $contato->id; ?>"><img src="img/lixeira.png"></a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5">Nenhum registro encontrado</td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
