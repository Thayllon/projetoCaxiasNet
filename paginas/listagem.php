<?php

if (isset($_GET["excluir"])) {
	$id = $_GET["excluir"];
	$sql = "DELETE FROM usuarios WHERE id = $id";
	$query = mysqli_query($link, $sql);
	if ($query === TRUE) {
		echo "Registro $id excluído com sucesso!";
	}
}

$sql = "SELECT * FROM usuarios";

$query = mysqli_query($link, $sql);


// echo "<table>";

// while($row = mysqli_fetch_assoc($query)) 
// {
// 	$email = $row["email"];
// 	echo "<tr>";

// 	echo "<td>";
// 	echo $row["nome"];
// 	echo "</td>";

// 	echo "<td>$email</td>";

// 	echo "</tr>";
// }

// echo "</table>";

echo "<table id='tabelaspec'>";

while($row = mysqli_fetch_assoc($query)){

?>

	<tr> 
		<td>
			<?= $row["nome"] ?>
		</td>
		<td>			
			<?= $row["email"] ?>
		</td>
		<td>
			<a id="tabela" href="?pg=cadastro&editar=<?= $row["id"] ?>">Editar</a>
		</td>
		<td>
			<a id="tabela" href="?pg=listagem&excluir=<?= $row["id"] ?>">Excluir</a>
		</td>
	</tr>

<?php 

}

echo "</table>";

?>




