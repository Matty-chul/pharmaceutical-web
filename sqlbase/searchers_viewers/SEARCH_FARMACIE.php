<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Search Drugstores</title>
</head>
<h2>SEARCH DRUGSTORES</h2>
<body>
    <div class="container">
	<p><b>(For a complete table listing, leave the input fields empty)</b></p>
	<form action="VIEW_FARMACIE.php" method="post">
		
		<label for="farmacieidFARM">Drugstore ID (INT):</label>
        <input type="text" id="farmacieIDFARM" name="farmacieidFARM"><br><br>
		
		<label for="denumireFARM">Name (VARCHAR):</label>
        <input type="text" id="denumireFARM" name="denumireFARM"><br><br>
 
        <label for="adresaFARM">Address (VARCHAR):</label>
        <input type="text" id="adresaFARM" name="adresaFARM"><br><br>
 
        <label for="datainfiintareFARM">Estabilishment date (DATE):</label>
        <input type="text" id="datainfiintareFARM" name="datainfiintareFARM"><br><br>
		
        <button type="submit" name="serFARM">Search</button>
    </form>
    </div>
</body>
</html>