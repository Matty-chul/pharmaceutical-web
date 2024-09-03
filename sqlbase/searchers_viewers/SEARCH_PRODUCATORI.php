<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Search producers</title>
</head>
<h2>SEARCH PRODUCERS</h2>
<body>
    <div class="container">
	<p><b>(For a complete table listing, leave the input fields empty)</b></p>
	<form action="VIEW_PRODUCATORI.php" method="post">
		
		<label for="producatoridPRODU">Producer ID (INT):</label>
        <input type="text" id="producatoridPRODU" name="producatoridPRODU"><br><br>
	
        <label for="denumirePRODU">Name (VARCHAR):</label>
        <input type="text" id="denumirePRODU" name="denumirePRODU"><br><br>
 
        <label for="taraoriginePRODU">Country of Origin (VARCHAR):</label>
        <input type="text" id="taraoriginePRODU" name="taraoriginePRODU"><br><br>
 
        <label for="adresaPRODU">Address (VARCHAR):</label>
        <input type="text" id="adresaPRODU" name="adresaPRODU"><br><br>
		
        <button type="submit" name="serPRODU">Search</button>
    </form>
    </div>
</body>
</html>