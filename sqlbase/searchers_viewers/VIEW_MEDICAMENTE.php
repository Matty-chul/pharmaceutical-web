<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$first=true;
		$medicamentid=$_POST["medicamentidMEDICA"];
		$denumire=$_POST["denumireMEDICA"];	
		$dataproducere=$_POST["dataproducereMEDICA"];
		$dataexpirare=$_POST["dataexpirareMEDICA"];
		try {
			require_once "../dbh.inc.php";
 
			$query="SELECT * FROM medicamente ";
			if ($medicamentid!=null){
				if ($first){$first=false; $query=$query."WHERE MedicamentID=:medicamentid ";}
				else $query=$query."AND MedicamentID=:medicamentid ";
			}
			if ($denumire!=null){
				if ($first){$first=false; $query=$query."WHERE Denumire=:denumire ";}
				else $query=$query."AND Denumire=:denumire ";
			}
			if ($dataproducere!=null){
				if ($first){$first=false; $query=$query."WHERE DataProducere=:dataproducere ";}
				else $query=$query."AND DataProducere=:dataproducere ";
			}
			if ($dataexpirare!=null){
				if ($first){$first=false; $query=$query."WHERE DataExpirare=:dataexpirare ";}
				else $query=$query."AND DataExpirare=:dataexpirare ";
			}
			$query=$query.";";			
			$stmt=$pdo->prepare($query);
			
			if($medicamentid!=null) $stmt->bindParam(":medicamentid",$medicamentid);
			if($denumire!=null) $stmt->bindParam(":denumire",$denumire);
			if($dataproducere!=null) $stmt->bindParam(":dataproducere",$dataproducere);
			if($dataexpirare!=null) $stmt->bindParam(":dataexpirare",$dataexpirare);
			
			$stmt->execute();
			//var_dump($stmt);
			
			$MEDICAMENTE=$stmt->fetchAll();
			
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
    <title>Search Drugs</title>
	<link rel="stylesheet" href="../styles/viewstyle.css">
</head>
<h2>DRUGS TABLE</h2>
<body>
	
    
	<?php
		if(empty($MEDICAMENTE)){
			echo "<div class=\"container\">";
			echo"<p> Selected table is empty! </p>";
			echo"<a id=\"errlink\" href=\"../index.php\"><b>Return Home</b></a>";
			echo"</div>";
			die();
		}
	?>
	<table>
		<tr>
		<th>MedicamentID</th>
		<th>Denumire</th>
		<th>DataProducere</th>
		<th>DataExpirare</th>
		</tr>
	<?php
		foreach($MEDICAMENTE as $row){
			echo "<tr>";
			echo "<td>".$row["MedicamentID"]."</td>";
			echo "<td>".$row["Denumire"]."</td>";
			echo "<td>".$row["DataProducere"]."</td>";
			echo "<td>".$row["DataExpirare"]."</td>";
			echo"</tr>";
		}
	?>
	</table>
	<br><a id="homelink" href="../index.php"><b>Return Home</b></a>	
</body>
</html>