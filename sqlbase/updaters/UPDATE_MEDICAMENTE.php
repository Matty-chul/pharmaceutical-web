<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../styles/searchstyle.css">
    <title>Update Drugs</title>
</head>
<h2> UPDATE DRUGS </h2>
<body>
	
    <div class='container'>
	<p><b>(DATE needs to be formatted YYYYMMDD)</b></p>
	<form action="../updhandler.php" method="post">

		<label for="medicamentidMEDICA">Drug ID (INT):</label>
        <input type="text" id="medicamentidMEDICA" name="medicamentidMEDICA" required><br><br>

        <label for="denumireMEDICA">Name (VARCHAR):</label>
        <input type="text" id="denumireMEDICA" name="denumireMEDICA" ><br><br>
 
        <label for="dataproducereMEDICA">Manufacturing Date (DATE):</label>
        <input type="text" id="dataproducereMEDICA" name="dataproducereMEDICA" ><br><br>
 
        <label for="dataexpirareMEDICA">Expiry Date (DATE):</label>
        <input type="text" id="dataexpirareMEDICA" name="dataexpirareMEDICA" ><br><br>
 
        <!-- <input type="submit" value="Submit"> -->
        <button type="submit" name="updMEDICA">Update</button>
    </form>
    </div>
</body>
</html>