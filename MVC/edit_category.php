<?php
    include 'Controllers/categorycontroller.php';
    $id= $_GET["id"];
    $c= getCategory($id);
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Edit Category:</h1></legend>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><input type="hidden" value="<?php echo $id?>"name="id"></td>
						<td><input type="text" name="name" value="<?php echo $c["name"]; ?>"></td>
						
					</tr>
					
					<tr>
					    <td><input type="submit" value="Edit Category"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		
	</body>
</html>