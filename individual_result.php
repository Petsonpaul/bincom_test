<?php

    include 'conn.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>polling unit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>polling unit result</header>

	<table border="5">
		
		<tr>
			<th>result_id</th>
			<th>polling_unit_uniqueid</th>
			<th>party_abbreviation</th>
			<th>party_score</th>
			<th>entered_by_user</th>
			<th>date_entered</th>
			<th>user_ip_address</th>
		</tr>
		<?php
		   $stmt = $conn->query("SELECT * FROM announced_pu_results");
		   while ($row = $stmt->fetch()){

		   	echo "<tr>
		   	
		   	      <td>{$row['polling_unit_uniqueid']}</td>
		   	      <td>{$row['party_abbreviation']}</td>
		   	      <td>{$row['party_score']}</td>
		   	      <td>{$row['entered_by_user']}</td>
		   	      <td>{$row['date_entered']}</td>
		   	      <td>{$row['user_ip_address']}</td>

		   	       </tr>";
		   }
		?>
	</table>

</body>
</html>