
<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$first=true;
		$farmacieid=$_POST["farmacieidFARM"];
		$denumire=$_POST["denumireFARM"];
		$adresa=$_POST["adresaFARM"];
		$datainfiintare=$_POST["datainfiintareFARM"];
		try {
			require_once "../dbh.inc.php";
 
			$query="SELECT * FROM farmacie ";
	if ($farmacieid!=null){
				if ($first){$first=false; $query=$query."WHERE FarmacieID=:farmacieid ";}
				else $query=$query."AND FarmacieID=:farmacieid ";
			}
			if ($denumire!=null){
				if ($first){$first=false; $query=$query."WHERE Denumire=:denumire ";}
				else $query=$query."AND Denumire=:denumire ";
			}
			if ($adresa!=null){
				if ($first){$first=false; $query=$query."WHERE Adresa=:adresa ";}
				else $query=$query."AND Adresa=:adresa ";
			}
			if ($datainfiintare!=null){
				if ($first){$first=false; $query=$query."WHERE DataInfiintare=:datainfiintare ";}
				else $query=$query."AND DataInfiintare=:datainfiintare ";
			}
			$query=$query.";";			
			$stmt=$pdo->prepare($query);
			
			if($farmacieid!=null) $stmt->bindParam(":farmacieid",$farmacieid);
			if($denumire!=null) $stmt->bindParam(":denumire",$denumire);
			if($adresa !=null) $stmt->bindParam(":adresa",$adresa);
			if($datainfiintare!=null) $stmt->bindParam(":datainfiintare",$datainfiintare);
			
			$stmt->execute();
			//var_dump($stmt);
			
			$FARMACIE=$stmt->fetchAll();
			
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
    <title>View Drugstores</title>
	<link rel="stylesheet" href="../styles/viewstyle.css">
</head>
<h2>DRUGSTORES TABLE</h2>
<body>
	<?php
		if(empty($FARMACIE)){
			echo "<div class=\"container\">";
			echo"<p> Selected table is empty! </p>";
			echo"<a id=\"errlink\" href=\"../index.php\"><b>Return Home</b></a>";
			echo"</div>";
			die();
		}
	?>
	<table>
		<tr>
		<th>FarmacieID</th>
		<th>Denumire</th>
		<th>Adresa</th>
		<th>DataInfiintare</th>
		</tr>
	<?php
		foreach($FARMACIE as $row){
			echo "<tr>";
			echo "<td>".$row["FarmacieID"]."</td>";
			echo "<td>".$row["Denumire"]."</td>";
			echo "<td>".$row["Adresa"]."</td>";
			echo "<td>".$row["DataInfiintare"]."</td>";
			echo"</tr>";
		}
	?>
	</table>
	<br><a id="homelink" href="../index.php"><b>Return Home</b></a>	
</body>
</html>