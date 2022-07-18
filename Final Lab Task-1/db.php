    
<!DOCTYPE html>
<html>
<head>
	<title>User list</title>
</head>
<body>
		
		<table border="1">
			<tr>
				
				<th>NAME</th>
				<th>PASSWORD</th>
				
			</tr>

			<?php 
				$conn = mysqli_connect('localhost', 'root', '', 'f_lab-1');
              $sql = "select * from info";
              $result = mysqli_query($conn, $sql);
     
    while($row= mysqli_fetch_assoc($result)){
		
    
			?>
			<tr>
				<th><?php echo $row['username']; ?></th>
				<th><?php echo $row['password']; ?></th>
				
			</tr>
			<?php
					
				}
			?>
		</table>
</body>
</html>