<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="Imagens/Escudo-Drogafuji.ico">
    <title>Consulta</title>
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>

    <div class="left-menu">
        <img src="imagens/Logo.png" class="logo-menu" /><br>
        <ul>
            <li id="menu-lateral"><a href="http://localhost/db/dashboard.php"><img src="imagens/Icone-Painel.png" id="icone-menu" />Painel</li></a>
            <li id="menu-lateral"><a href="http://localhost/db/cadastros.php"><img src="imagens/Icone-Cadastro.png" id="icone-menu" />Cadastros</li></a>
            <li id="menu-lateral"><a href="http://localhost/db/relatorio.php"><img src="imagens/Icone-Relatorios.png" id="icone-menu" />Relatórios</li></a>
            <li id="menu-lateral"><a href="http://localhost/db/consulta.php"><img src="imagens/Icone-Consulta.png" id="icone-menu" />Consulta</li></a>
            <li id="menu-lateral"><img src="imagens/Icone-Grupos.png" id="icone-menu">Grupos</li>
            <li id="menu-lateral"><img src="imagens/Icone-Usuario.png" id="icone-menu">Usuários</li>
            <hr size="1" id="divisoria">
            <li id="menu-lateral"><img src="imagens/Icone-Configuracoes.png" id="icone-menu">Configurações</li>
        </ul>
    </div>
    <div class="consultatab">
        <h1 class="cabecalho-dashboard">Consulta de patrimônio</h1>
        <form action="">
            <input name="busca" placeholder="Digite os termos de busca" type="text">
            <button type="submit">Pesquisar</button>
        </form><br>
        <table border="1">
            <tr>
                <th>ID</th>
				<th>Descrição</th>
				<th>Data de aquisição</th>
                <th>Categoria</th>
                <th>Patrimônio</th>
				<th>Filial</th>
				<th>Ativo</th>
				<th>Fornecedor</th>
				<th>Marca</th>
				<th>Modelo</th>
			</tr>
            <tr>
                <td colspan="10">Digite algo para pesquisar...</td>
            </tr>   
    </div>

</body>
</html>