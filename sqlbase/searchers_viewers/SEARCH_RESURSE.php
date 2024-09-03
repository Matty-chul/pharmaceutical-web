<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Search resources</title>
</head>
<h2>SEARCH RESOURCES</h2>
<body>
    <div class="container">
	<p><b>(For a complete table listing, leave the input fields empty)</b></p>
	<form action="VIEW_RESURSE.php" method="post">
		
		<label for="resursaidRESU">Resource ID (INT):</label>
        <input type="text" id="resursaidRESU" name="resursaidRESU" ><br><br>
	
		<label for="farmacieidRESU">Drugstore ID (INT):</label>
        <input type="text" id="farmacieidRESU" name="farmacieidRESU" ><br><br>
	
        <label for="medicamentidRESU">Drug ID (INT):</label>
        <input type="text" id="medicamentidRESU" name="medicamentidRESU" ><br><br>
 
        <label for="stocRESU">Stock (INT):</label>
        <input type="text" id="stocRESU" name="stocRESU" ><br><br>
 
        <label for="pretRESU">Price (DECIMAL):</label>
        <input type="text" id="pretRESU" name="pretRESU" ><br><br>
		
        <button type="submit" name="serRESU">Search</button>
    </form>
    </div>
</body>
</html>