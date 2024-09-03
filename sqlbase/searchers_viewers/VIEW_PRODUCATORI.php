<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$first= true;
		$ProducatorID=$_POST["producatoridPRODU"];
		$taraOrigine=$_POST["taraoriginePRODU"];
		$denumire=$_POST["denumirePRODU"];
		$adresa=$_POST["adresaPRODU"];
		try {
			require_once "../dbh.inc.php";
 
			$query="SELECT * FROM producatori ";
			if ($ProducatorID!=null){
				if ($first){$first=false; $query=$query."WHERE ProducatorID=:producatorid ";}
				else $query=$query."AND ProducatorID=:producatorid ";
			}
			if ($denumire!=null){
				if ($first){$first=false; $query=$query."WHERE Denumire=:denumire ";}
				else $query=$query."AND Denumire=:denumire ";
			}
			if ($taraOrigine!=null){
				if ($first){$first=false; $query=$query."WHERE TaraOrigine=:taraorigine ";}
				else $query=$query."AND TaraOrigine=:taraorigine ";
			}
			if ($adresa!=null){
				if ($first){$first=false; $query=$query."WHERE Adresa=:adresa ";}
				else $query=$query."AND Adresa=:adresa ";
			}
			$query=$query.";";			
			$stmt=$pdo->prepare($query);
			
			if ($ProducatorID!=null) $stmt->bindParam(":producatorid",$ProducatorID);
			if ($denumire!=null) $stmt->bindParam(":denumire",$denumire);
			if ($taraOrigine!=null) $stmt->bindParam(":taraorigine",$taraOrigine);
			if ($adresa!=null) $stmt->bindParam(":adresa",$adresa);
			
			$stmt->execute();
			//var_dump($stmt);
			
			$PRODUCATORI=$stmt->fetchAll();
			
			$pdo=null;
			$stmt=null;
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}else{
		header("Location:../index.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View producers</title>
<link rel="stylesheet" href="../styles/viewstyle.css">
</head>
<h2>PRODUCERS TABLE</h2>
<body>
	
    
	<?php
		if(empty($PRODUCATORI)){
			echo "<div class=\"container\">";
			echo"<p> Selected table is empty! </p>";
			echo"<a id=\"errlink\" href=\"../index.php\"><b>Return Home</b></a>";
			echo"</div>";
			die();
		}
	?>
	<table>
		<tr>
		<th>ProducatorID</th>
		<th>Denumire</th>
		<th>TaraOrigine</th>
		<th>Adresa</th>
		</tr>
	<?php
		foreach($PRODUCATORI as $row){
			echo "<tr>";
			echo "<td>".$row["ProducatorID"]."</td>";
			echo "<td>".$row["Denumire"]."</td>";
			echo "<td>".$row["TaraOrigine"]."</td>";
			echo "<td>".$row["Adresa"]."</td>";
			echo"</tr>";
		}
	?>
	</table>
	<br><a id="homelink" href="../index.php"><b>Return Home</b></a>	
</body>
</html>