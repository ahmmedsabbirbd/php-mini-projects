<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
		<?php include 'header.php'; ?>

		<div class="container">
			<h2>All Lists</h2>

			<?php
				// Connect to the database
				$pdo = new PDO('mysql:host=localhost;dbname=landing_pages', 'root', '');

				// Retrieve data from the database
				$stmt = $pdo->query('SELECT * FROM MyGuests');

				if ( $stmt ) 
				{
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

					if ( $rows ) 
					{
						// Create an HTML table with the data
						echo '<table>';
							echo '<tr>';
								foreach(array_keys($rows[0]) as $column) {
								    echo '<th style="text-transform: capitalize;">' . $column . '</th>';
								}
								echo '<th class="action" style="text-transform: capitalize;">Action</th>';
							echo '</tr>';

							$counter = 1;
							foreach($rows as $row) {

							    echo '<tr>';
								    foreach($row as $key => $value) {

								    	if ( $key == 'id' ) 
								    	{
								    		echo '<td data-id="'.$value.'">'.$counter.'</td>';
								    	}
										elseif ( $key == 'photo' ) 
										{
											if ( $value ) 
											{
												echo '<td><img src="'.$value.'" width="30" height="30"></td>';
											}
											else
											{
												echo '<td><img src="https://via.placeholder.com/30x30" width="30" height="30"></td>';
											}
										}
										else
										{
								        	echo '<td>' . $value . '</td>';
										}
								    }

					    			echo '<td class="action">
					                    <form method="post" class="delete-form" action="delete.php">
					                        <input type="hidden" name="id" value="'.$row['id'].'">
					                        <input type="submit" class="button button-clear" name="delete" value="❌">
					                    </form>
					                </td>';

							    echo '</tr>';

							    $counter++;
							}

						echo '</table>';
					}
					else
					{
						echo 'No Data Found!';
					}
				}
			?>
		</div>
	</div>
</body>
</html>