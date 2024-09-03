<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Update Drugstores</title>
</head>
<h2> UPDATE DRUGSTORE </h2>
<body>
    <div class='container'>
	<p><b>(DATE needs to be formatted YYYYMMDD)</b></p>
	<form action="../updhandler.php" method="post">
		
		<label for="farmacieidFARM">Producer ID (INT):</label>
        <input type="text" id="farmacieIDFARM" name="farmacieidFARM" required><br><br>
		
        <label for="denumireFARM">Name (VARCHAR):</label>
        <input type="text" id="denumireFARM" name="denumireFARM" ><br><br>
 
        <label for="adresaFARM">Address (VARCHAR):</label>
        <input type="text" id="adresaFARM" name="adresaFARM" ><br><br>
 
        <label for="datainfiintareFARM">Date of Estabilishment (DATE):</label>
        <input type="text" id="datainfiintareFARM" name="datainfiintareFARM" ><br><br>
 
        <!-- <input type="submit" value="Submit"> -->
        <button type="submit" name="updFARM">Update</button>
    </form>
    </div>
</body>
</html>