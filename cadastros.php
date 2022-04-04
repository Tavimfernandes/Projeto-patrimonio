<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="Imagens/Escudo-Drogafuji.ico">
    <title>Cadastros</title>
    <link rel="stylesheet" href="css/style.css"/>

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
                <hr size="1" id="divisoria" />
                <li id="menu-lateral"><img src="imagens/Icone-Configuracoes.png" id="icone-menu">Configurações</li>
            </ul>

    </div>

    <div class="cabecalho-cadastros">
        Cadastro de Patrimônio - Drogafuji
    </div>    

    <div class="form-cadastro">
        
        <form action="inserir.php" method="POST" class="formulario-cadastro">
            Categoria:<br>
                <select name="categoria" class="form-cadastro-select">
                    <option value="c01">Computador</option>
                    <option value="c02">Periféricos</option>
                    <option value="c03">Servidor</option>
                    <option value="c04">Impressora</option>
                </select><br>

            Descrição:<br><input type="text" name="descricao" placesholder="Descricao"class="form-cadastro-input"/><br>
            Marca / Modelo:<br><input type="text" name="modelo" placeholder="Modelo" class="form-cadastro-dinput"/>
            <input type="text" name="marca" placeholder="Marca" class="form-cadastro-dinput"/><br>
            Data de Aquisição:<br><input type="date" name="data-aquisicao"  class="form-cadastro-input" /><br>
            Ativo:<br><input type="checkbox" value="ativo" class="form-cadastro-input" /><br>
            Número de Patrimônio:<br><input type="number" name="patrimonio" class="form-cadastro-input" /><br>
            Código do Fornecedor:<br> <input type="number" name="fornecedor" class="form-cadastro-input" /><Br>
            Filial:<br>
            <select name="filial" class="form-cadastro-select">
                <option value="f01">Filial 01</option>
                <option value="f02">Filial 02</option>
                <option value="f03">Filial 03</option>
                <option value="f04">Filial 04</option>
                <option value="f05">Filial 05</option>
            </select><br>


            <input type="submit" value="salvar" class="form-cadastro-button"/>
            <input type="reset" value="cancelar" class="form-cadastro-button" />

        </form>
    </div>

</body>
</html>