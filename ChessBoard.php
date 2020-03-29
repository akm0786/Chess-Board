<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chess Board</title>
	<style>
		
		table{
			border: 2px solid #000;
			border-spacing: unset;
		}
		td{
			border: 2px solid #000;

			padding: 1.5rem;
		}

		.bgcolor{

			background: #000;
		}
	</style>
</head>
<body>
	
	<form action="" method="POST">
		
 		<input type="text" name="value" >
 		<input type="submit" name="submit" value="Generate Chess Board">

	</form>

	<br>

<table>
	<?php	

		if(isset($_POST['submit']))

		{

			$value=$_POST['value'];

			for($row=1; $row<=$value ;$row++)

			{

				echo "<tr>";
				
				for($col=1;$col<=$value; $col++)

				{
					if(($row+$col)%2==0)

						echo "<td class='bgcolor'> </td>" ;
					else{

						echo "<td> </td>" ;
					}

				}
			
				echo "</tr>";
			}

		}



	?>

</table>

</body>
</html>