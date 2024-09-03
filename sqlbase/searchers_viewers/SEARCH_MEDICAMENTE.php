<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Search Drugs</title>
</head>
<h2>SEARCH DRUGS</h2>
<body>
	 <div class="container">
	<p><b>(For a complete table listing, leave the input fields empty)</b></p>
	<form action="VIEW_MEDICAMENTE.php" method="post">
		
		<label for="medicamentidMEDICA">Drug ID (INT):</label>
        <input type="text" id="medicamentidMEDICA" name="medicamentidMEDICA"><br><br>
		
		<label for="denumireMEDICA">Name (VARCHAR):</label>
        <input type="text" id="denumireMEDICA" name="denumireMEDICA"><br><br>
 
        <label for="dataproducereMEDICA">Manufacturing date (DATE):</label>
        <input type="text" id="dataproducereMEDICA" name="dataproducereMEDICA"><br><br>
 
        <label for="dataexpirareMEDICA">Expiry date (DATE):</label>
        <input type="text" id="dataexpirareMEDICA" name="dataexpirareMEDICA"><br><br>
		
        <button type="submit" name="serMEDICA">Search</button>
    </form>
    </div>
</body>
</html>