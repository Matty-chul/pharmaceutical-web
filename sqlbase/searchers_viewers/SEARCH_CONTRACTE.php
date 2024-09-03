<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Search contracts</title>
</head>
<h2>SEARCH CONTRACTS</h2>
<body>
    <div class ="container">
	<p><b>(For a complete table listing, leave the input fields empty)</b></p>
	<form action="VIEW_CONTRACTE.php" method="post">
		
		<label for="contractidCONT">Contract ID (INT):</label>
        <input type="text" id="contractidCONT" name="contractidCONT" ><br><br>
	
		<label for="medicamentidCONT">Drug ID (INT):</label>
        <input type="text" id="medicamentidCONT" name="medicamentidCONT" ><br><br>
		
		<label for="producatoridCONT">Producer ID (INT):</label>
        <input type="text" id="producatoridCONT" name="producatoridCONT" ><br><br>
 
        <label for="unitatiCONT">Units (INT):</label>
        <input type="text" id="unitatiCONT" name="unitatiCONT" ><br><br>
		
        <button type="submit" name="serCONT">Search</button>
    </form>
    </div>
</body>
</html>