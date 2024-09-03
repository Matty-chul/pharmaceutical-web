<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$first=true;
		$ResursaID=$_POST["resursaidRESU"];
		$FarmacieID=$_POST["farmacieidRESU"];	
		$MedicamentID=$_POST["medicamentidRESU"];
		$Stoc=$_POST["stocRESU"];
		$Pret=$_POST["pretRESU"];
		try {
			require_once "../dbh.inc.php";
 
			$query="SELECT * FROM resurse ";
			if ($ResursaID!=null){
				if ($first){$first=false; $query=$query."WHERE ResursaID=:resursaid ";}
				else $query=$query."AND ResursaID=:resursaid ";
			}
			
			if ($FarmacieID!=null){
				if ($first){$first=false; $query=$query."WHERE FarmacieID=:farmacieid ";}
				else $query=$query."AND FarmacieID=:farmacieid ";
			}
			if ($MedicamentID!=null){
				if ($first){$first=false; $query=$query."WHERE MedicamentID=:medicamentid ";}
				else $query=$query."AND MedicamentID=:medicamentid ";
			}
			
			if ($Stoc!=null){
				if ($first){$first=false; $query=$query."WHERE Stoc=:stoc ";}
				else $query=$query."AND Stoc=:stoc ";
			}
			if ($Pret!=null){
				if ($first){$first=false; $query=$query."WHERE Pret=:pret ";}
				else $query=$query."AND Pret=:pret ";
			}
			$query=$query.";";			
			$stmt=$pdo->prepare($query);
			
			if($ResursaID!=null) $stmt->bindParam(":resursaid",$ResursaID);
			if($FarmacieID!=null) $stmt->bindParam(":farmacieid",$FarmacieID);
			if($MedicamentID!=null) $stmt->bindParam(":medicamentid",$MedicamentID);
			if($Stoc!=null) $stmt->bindParam(":stoc",$Stoc);
			if($Pret!=null) $stmt->bindParam(":pret",$Pret);
			
			$stmt->execute();
			//var_dump($stmt);
			
			$RESURSE=$stmt->fetchAll();
			
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
    <title>View resources</title>
<link rel="stylesheet" href="../styles/viewstyle.css">
</head>
<h2>RESOURCES TABLE</h2>
<body>
	
	<?php
		if(empty($RESURSE)){
			echo "<div class=\"container\">";
			echo"<p> Selected table is empty! </p>";
			echo"<a id=\"errlink\" href=\"../index.php\"><b>Return Home</b></a>";
			echo"</div>";
			die();
		}
	?>
	<table>
		<tr>
		<th>ResursaID</th>
		<th>FarmacieID</th>
		<th>MedicamentID</th>
		<th>Stoc</th>
		<th>Pret</th>
		</tr>
	<?php
		foreach($RESURSE as $row){
			echo "<tr>";
			echo "<td>".$row["ResursaID"]."</td>";
			echo "<td>".$row["FarmacieID"]."</td>";
			echo "<td>".$row["MedicamentID"]."</td>";
			echo "<td>".$row["Stoc"]."</td>";
			echo "<td>".$row["Pret"]."</td>";
			echo"</tr>";
		}
	?>
	</table>
	<br><a id="homelink" href="../index.php"><b>Return Home</b></a>	
</body>
</html>