<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>procurando comunidades</title>
</head>
<body>

<div class="smallbackground">

  Comunidades<br>

<?php

$comname = $_POST["inp_name"];

include 'conn.php';

$sql = "SELECT * FROM comunities WHERE name='$comname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  while($row = mysqli_fetch_assoc($result)) {
    
    ?>
   
<div class="comunit">
	<table >
		<tr>
    
			<td class="comun">

        <h3><?php  echo $row['name']; ?></h3><br>
        <?php  echo $row['description']; ?>
    
    </td>

			</tr>
	</table>
</div>

<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>

</div>
  
</body>
</html>