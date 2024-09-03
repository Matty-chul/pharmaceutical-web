<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Insert producers</title>
</head>
<h2>INSERT PRODUCERS</h2>
<body>
	
    <div class = 'container'>
	<p><b>(DATE needs to be formatted YYYYMMDD)</b></p>
	<form action="../formhandler.inc.php" method="post">
        <label for="denumirePRODU">Name (VARCHAR):</label>
        <input type="text" id="denumirePRODU" name="denumirePRODU" required><br><br>
 
        <label for="taraoriginePRODU">Country of Origin (VARCHAR):</label>
        <input type="text" id="taraoriginePRODU" name="taraoriginePRODU" required><br><br>
 
        <label for="adresaPRODU">Address (VARCHAR):</label>
        <input type="text" id="adresaPRODU" name="adresaPRODU" required><br><br>
 
        <!-- <input type="submit" value="Submit"> -->
        <button type="submit" name="insPRODU">Insert</button>
    </form>
    </div>
</body>
</html>