<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="Imagens/Escudo-Drogafuji.ico">
    <title>Dashboard</title>
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

    <div class="painel">
        <div class="cabecalho-dashboard">
            Dashboard de patrimônio - Drogafuji
        </div>
            <table id="tabela-cadastros">
                <tr>
                    <th id="cabeçalho-tabela">
                        Cadastrados<br>
                        <span class="dado-painel">1</span>

                    </th>
                    <th id="cabeçalho-tabela">
                        Cadastros hoje<br>
                        <span class="dado-painel">2</span>
                    </th>
                    <th id="cabeçalho-tabela">
                        Cadastros pendentes<br>
                        <span class="dado-painel">3</span>
                    </th>
                </tr>
            </table>
    </div>
    <div class="grafico-principal">
    
        <canvas class="line-chart"></canvas>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">


        </script>

        <script>

            var ctx = document.getElementsByClassName("line-chart");

            var chartGraph = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["01/02", "02/02", "03/02", "04/02", "05/02", "06/02"],
                    datasets: [{
                        label: "Cadastros diários",
                        data: [2,8,6,4,7,3],
                        borderWidth: 2,
                        borderColor: 'rgba(0,0,139,0.85)',
                        backgroundColor:'transparent',
                    },
                    {
                        label: "Média diária",
                        data: [2,6,6,6,3,4],
                        borderWidth: 2,
                        borderColor: 'rgba(200,200,200,0.85)',
                        backgroundColor:'transparent',
                    }
                ]    
                }
            });

        </script>

    </div>
      
    
    <div class="memoramvip" >
        <a href="https://ticket.memoriaram.com.br/front/ticket.php"><img src="imagens/memoram.png" class="memoramvip-img"/> </a><br>
        <a href="https://app.printwayy.com/SupportTickets/CustomerIndex"><img src="imagens/vip.png" class="memoramvip-img" /></a>
    </div>
</body>
</html>