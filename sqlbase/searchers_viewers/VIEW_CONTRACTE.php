<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$first=true;
		$ContractID=$_POST["contractidCONT"];
		$MedicamentID=$_POST["medicamentidCONT"];
		$ProducatorID=$_POST["producatoridCONT"];	
		$Unitati=$_POST["unitatiCONT"];
		try {
			require_once "../dbh.inc.php";
 
			$query="SELECT * FROM contracte ";
			if ($ContractID!=null){
				if ($first){$first=false; $query=$query."WHERE ContractID=:contractid ";}
				else $query=$query."AND ContractID=:contractid ";
			}
			
			if ($MedicamentID!=null){
				if ($first){$first=false; $query=$query."WHERE MedicamentID=:medicamentid ";}
				else $query=$query."AND MedicamentID=:medicamentid ";
			}
			if ($ProducatorID!=null){
				if ($first){$first=false; $query=$query."WHERE ProducatorID=:producatorid ";}
				else $query=$query."AND ProducatorID=:producatorid ";
			}
			
			if ($Unitati!=null){
				if ($first){$first=false; $query=$query."WHERE Unitati=:unitati ";}
				else $query=$query."AND Unitati=:unitati ";
			}
			$query=$query.";";			
			$stmt=$pdo->prepare($query);
			
			if($ContractID!=null)$stmt->bindParam(":contractid",$ContractID);
			if($MedicamentID!=null)$stmt->bindParam(":medicamentid",$MedicamentID);
			if($ProducatorID!=null)$stmt->bindParam(":producatorid",$ProducatorID);
			if($Unitati!=null)$stmt->bindParam(":unitati",$Unitati);
			
			$stmt->execute();
			//var_dump($stmt);
			
			$CONTRACTE=$stmt->fetchAll();
			
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
    <title>View contracts</title>
<link rel="stylesheet" href="../styles/viewstyle.css">
</head>
<h2>CONTRACTS TABLE</h2>
<body>
	
	<?php
		if(empty($CONTRACTE)){
			echo "<div class=\"container\">";
			echo"<p> Selected table is empty! </p>";
			echo"<a id=\"errlink\" href=\"../index.php\"><b>Return Home</b></a>";
			echo"</div>";
			die();
		}
	?>
	<table>
		<tr>
		<th>ContractID</th>
		<th>MedicamentID</th>
		<th>ProducatorID</th>
		<th>Unitati</th>
		</tr>
	<?php
		foreach($CONTRACTE as $row){
			echo "<tr>";
			echo "<td>".$row["ContractID"]."</td>";
			echo "<td>".$row["MedicamentID"]."</td>";
			echo "<td>".$row["ProducatorID"]."</td>";
			echo "<td>".$row["Unitati"]."</td>";
			echo"</tr>";
		}
	?>
	</table>
	<br><a id="homelink" href="../index.php"><b>Return Home</b></a>	
</body>
</html>