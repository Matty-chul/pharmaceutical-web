<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Insert resources</title>
</head>
<h2>INSERT RESOURCES</h2>
<body>
	
    <div class= 'container'>
	<p><b>(DATE needs to be formatted YYYYMMDD)</b></p>
	<form action="../formhandler.inc.php" method="post">
	
		<label for="farmacieidRESU">Drugstore ID (INT):</label>
        <input type="text" id="farmacieidRESU" name="farmacieidRESU" required><br><br>
	
        <label for="medicamentidRESU">Drug ID (INT):</label>
        <input type="text" id="medicamentidRESU" name="medicamentidRESU" required><br><br>
 
        <label for="stocRESU">Stock (INT):</label>
        <input type="text" id="stocRESU" name="stocRESU" required><br><br>
 
        <label for="pretRESU">Price (DECIMAL):</label>
        <input type="text" id="pretRESU" name="pretRESU" required><br><br>
 
        <button type="submit" name="insRESU">Insert</button>
    </form>
    </div>
</body>
</html>