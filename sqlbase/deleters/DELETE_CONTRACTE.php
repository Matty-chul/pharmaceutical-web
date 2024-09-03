<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Delete contracts</title>
</head>
<h2>DELETE CONTRACTS</h2>
<body>
	
    <div class='container'>
	<form action="../delhandler.php" method="post">
	
		<label for="contractidCONT">Contract ID (INT):</label>
        <input type="text" id="contractidCONT" name="contractidCONT" ><br><br>
	
		<label for="medicamentidCONT">Drug ID (INT):</label>
        <input type="text" id="medicamentidCONT" name="medicamentidCONT" ><br><br>
		
		<label for="producatoridCONT">Producer ID (INT):</label>
        <input type="text" id="producatoridCONT" name="producatoridCONT" ><br><br>
 
        <label for="unitatiCONT">Units (INT):</label>
        <input type="text" id="unitatiCONT" name="unitatiCONT" ><br><br>
		
        <button type="submit" name="delCONT">Delete</button>
    </form>
    </div>
</body>
</html>