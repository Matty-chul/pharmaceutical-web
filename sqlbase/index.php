<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "styles/homestyle.css">
    <title>Home</title>
</head>
<h2>Pharmaceutical Database</h2>
<body>
 
    <div class="container">
 
    <form action="rdir.php" method="post">
	<label for="actionchoice"> I want to </labeL>
	<select id="actionchoice" name="actionchoice">
		<option value="INSERARE">insert</option>
		<option value="STERGERE">delete</option>
		<option value="ACTUALIZARE">update</option>
		<option value="CAUTARE">search</option>
	</select>
	<label for="tablechoice"> in table </label>
	<select id="tablechoice" name="tablechoice">
		<option value="producatori">producers</option>
		<option value="farmacie">drugstores</option>
		<option value="medicamente">drugs</option>
		<option value="resurse">resources</option>
		<option value="contracte">contracts</option>
	</select><br><br>
        <button>Commit</button>
    </form>

	</div>
   
</body>
</html>
 