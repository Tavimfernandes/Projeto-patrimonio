<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="Imagens/Escudo-Drogafuji.ico">
    <title>Relatorios</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <div class="relatorio">
        <h2> Relatórios de Patrimônio</h2>

        <span id="conteudo">

        </span>

    <script>
/* Jeito com Bootstrap, mas que não aparece a tabela
        var qnt_result_pg = 50;     //Quantidade de registro por página
        var pagina = 1; //Página inicial
        $(document).ready(function (){
            registro(pagina, qnt_result_pg); //Chamar a função para listar os registroos
        });

        function registro(pagina, qnt_result_pg){
            var dados = {
                pagina : pagina,
               qnt_result_pg : qnt_result_pg
            }
            $.post('registros.php', function(retorna) {
                Substitui o valor no seletor id="conteudo"
                $("#conteudo").html(retorna);
            });
        });
*/

// Jeito sem Bootstrap, mas que aparece a tabela
        $(document).ready(function (){
            $.post('registros.php', function(retorna) {
                //Substitui o valor no seletor id="conteudo"
                $("#conteudo").html(retorna);
            });
        });

    </script>

    </div>
</body>
</html>