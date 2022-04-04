<?php

include_once "formulario.php";
/* ativar pro bootstrap
$pagina(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$qnt_result_pg(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);

//calcular o inicio da visualização
$inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

*/
//consultar no banco de dados
$registro_patr = "SELECT * FROM tb_cadastros";
$registro_patrimonio = mysqli_query($link, $registro_patr);

//Verificar se encontrou resultado na tabela "tb_cadastros"

if (($registro_patrimonio) AND ($registro_patrimonio->num_rows != 0)){
	?>
	<div >
	<table class="table table-striped table-bordered table-hover">
		<thead>
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
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($registro_patrimonio)){
				?>
				<tr>
					<td><?php echo $row_usuario['id_codigo']; ?></td>
					<td><?php echo $row_usuario['descricao']; ?></td>
					<td><?php echo $row_usuario['data_aquisicao']; ?></td>
					<td><?php echo $row_usuario['categoria']; ?></td>
					<td><?php echo $row_usuario['patrimonio']; ?></td>
					<td><?php echo $row_usuario['filial']; ?></td>
					<td><?php echo $row_usuario['ativo']; ?></td>
					<td><?php echo $row_usuario['fornecedor']; ?></td>
					<td><?php echo $row_usuario['marca']; ?></td>
					<td><?php echo $row_usuario['modelo']; ?></td>
				</tr>
				<?php
			}?>
		</tbody>
	</table>
	</div>
<?php
//Paginação - Somar a quantidade de usuários

$result_pg = "SELECT COUNT(id_codigo) AS num_result FROM tb_cadastros";
$resultado_pg = mysqli_query($link, $result_pg);
$row_pg = mysqli_fetch_assoc($resultado_pg);

/* Ativar se for usar o bootstrap

echo"<a href='#' onclick='registros(1, $qnt_result_pg)'>Primeira</a>";

*/
}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}
