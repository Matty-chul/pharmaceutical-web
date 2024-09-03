<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Delete producers</title>
</head>
<h2> DELETE PRODUCERS </h2>
<body>
	
    <div class='container'> 
	<form action="../delhandler.php" method="post">
		
		<label for="producatoridPRODU">Producer ID (INT):</label>
        <input type="text" id="producatoridPRODU" name="producatoridPRODU"><br><br>
	
        <label for="denumirePRODU">Name (VARCHAR):</label>
        <input type="text" id="denumirePRODU" name="denumirePRODU"><br><br>
 
        <label for="taraoriginePRODU">Country of Origin (VARCHAR):</label>
        <input type="text" id="taraoriginePRODU" name="taraoriginePRODU"><br><br>
 
        <label for="adresaPRODU">Address (VARCHAR):</label>
        <input type="text" id="adresaPRODU" name="adresaPRODU"><br><br>
		
        <button type="submit" name="delPRODU">Delete</button>
    </form>
    </div>
</body>
</html>