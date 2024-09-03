<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Delete drugstore</title>
</head>
<h2> DELETE DRUGSTORE </h2>
<body>
	<div class='container'>
	<form action="../delhandler.php" method="post">
	
		<label for="farmacieidFARM">Drugstore ID (INT):</label>
        <input type="text" id="farmacieIDFARM" name="farmacieidFARM"><br><br>
		
		<label for="denumireFARM">Name (VARCHAR):</label>
        <input type="text" id="denumireFARM" name="denumireFARM"><br><br>
 
        <label for="adresaFARM">Address (VARCHAR):</label>
        <input type="text" id="adresaFARM" name="adresaFARM"><br><br>
 
        <label for="datainfiintareFARM">Date of Estabilishment (DATE):</label>
        <input type="text" id="datainfiintareFARM" name="datainfiintareFARM"><br><br>
		
        <button type="submit" name="delFARM">Delete</button>
    </form>
    </div>
</body>
</html>