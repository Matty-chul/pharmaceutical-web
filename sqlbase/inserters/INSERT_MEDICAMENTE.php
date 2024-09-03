<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Insert drugs</title>
</head>
<h2>INSERT DRUGS</h2>
<body>
	
    <div class='container'>
	<p><b>(DATE needs to be formatted YYYYMMDD)</b></p>
	<form action="../formhandler.inc.php" method="post">
        <label for="denumireMEDICA">Name (VARCHAR):</label>
        <input type="text" id="denumireMEDICA" name="denumireMEDICA" required><br><br>
 
        <label for="dataproducereMEDICA">Manufacturing Date (DATE):</label>
        <input type="text" id="dataproducereMEDICA" name="dataproducereMEDICA" required><br><br>
 
        <label for="dataexpirareMEDICA">Expiry Date (DATE):</label>
        <input type="text" id="dataexpirareMEDICA" name="dataexpirareMEDICA" required><br><br>
 
        <!-- <input type="submit" value="Submit"> -->
        <button type="submit" name="insMEDICA">Insert</button>
    </form>
    </div>
</body>
</html>