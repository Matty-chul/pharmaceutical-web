<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Insert contracts</title>
</head>
<h2>INSERT CONTRACTS</h2>
<body>
	<div class='container'>
	<p><b>(DATE needs to be formatted YYYYMMDD)</b></p>
	<form action="../formhandler.inc.php" method="post">
	
        <label for="medicamentidCONT">Drug ID (INT):</label>
        <input type="text" id="medicamentidCONT" name="medicamentidCONT" required><br><br>
		
		<label for="producatoridCONT">Producer ID (INT):</label>
        <input type="text" id="producatoridCONT" name="producatoridCONT" required><br><br>
 
        <label for="unitatiCONT">Units (INT):</label>
        <input type="text" id="unitatiCONT" name="unitatiCONT" required><br><br>
 
        <!-- <input type="submit" value="Submit"> -->
        <button type="submit" name="insCONT">Insert</button>
    </form>
    </div>
</body>
</html>