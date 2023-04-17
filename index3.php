<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <title>Baza</title>
</head>
<body>
    <?php      
    $connection = new PDO("mysql:host=localhost;dbname=id20613217_db15", "id20613217_usr15", "Kq46@O*EMhu#NVx$");
    $sql = "SELECT * FROM `users`";
    $usersQuery = $connection->query($sql);
    $users = $usersQuery->fetchAll(); 

    ?>

    <table>
	<thead>
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Surname</th>
		<th>Age</th>
		<th></th>
		<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($users as $user) {
			echo "<tr>
			        <td>{$user[0]}</td>
			        <td>{$user[1]}</td>
			        <td>{$user[2]}</td>
			        <td>{$user[3]}</td>
			        <td>    
			            <form action=/delete.php method=post>
			                <input type=hidden name=id value=$user[0]>
                            <input type=submit class=btn name=del value=delete>
                        </form>
                    </td>
                    
			        <td>    
			            <form action=/edit.php method=post>
			                <input type=hidden name=id value=$user[0]>
			                <input type=hidden name=imie value=$user[1]>
			                <input type=hidden name=nazwisko value=$user[2]>
			                <input type=hidden name=wiek value=$user[3]>
                            <input type=submit class=btn name=ed value=edit>
                        </form>
                    </td>
			    </tr>";
		}
		?>
	</tbody>
</table>
    <form action="/add.php" method="post">
        <input type="text" class="inp" name="imie">
        <input type="text" class="inp" name="nazwisko">
        <input type="text" class="inp" name="wiek" min="1" max="100">
        <input type="submit" class="btn" name="add" value="ADD">
    </form>
</body>
</html>