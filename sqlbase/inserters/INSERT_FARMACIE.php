<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Insert Drugstore</title>
</head>
<h2>INSERT DRUGSTORE</h2>
<body>
 
    <div class='container'>
	<p><b>(DATE needs to be formatted YYYYMMDD)</b></p>
	<form action="../formhandler.inc.php" method="post">
        <label for="denumireFARM">Name (VARCHAR):</label>
        <input type="text" id="denumireFARM" name="denumireFARM" required><br><br>
 
        <label for="adresaFARM">Address (VARCHAR):</label>
        <input type="text" id="adresaFARM" name="adresaFARM" required><br><br>
 
        <label for="datainfiintareFARM">Date of Estabilishment (DATE):</label>
        <input type="text" id="datainfiintareFARM" name="datainfiintareFARM" required><br><br>
 
        <!-- <input type="submit" value="Submit"> -->
        <button type="sumbit" name="insFARM">Insert</button>
    </form>
    </div>
</body>
</html>