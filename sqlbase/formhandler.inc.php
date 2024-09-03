<?php
 
 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	
    
	if ( isset($_POST["insPRODU"])) {
	
		$taraOrigine=$_POST["taraoriginePRODU"];
		$denumire=$_POST["denumirePRODU"];
		$adresa=$_POST["adresaPRODU"];
		try {
			require_once "dbh.inc.php";
 
			$query="INSERT INTO producatori(denumire,taraOrigine,adresa) VALUES (:denumire,:taraOrigine,:adresa);";
			$stmt=$pdo->prepare($query);
 
			$stmt->bindParam(":taraOrigine",$taraOrigine);
			$stmt->bindParam(":denumire",$denumire);
			$stmt->bindParam(":adresa",$adresa);
 
			$stmt->execute();
 
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	if ( isset($_POST["insFARM"])){
		$denumire=$_POST["denumireFARM"];
		$adresa=$_POST["adresaFARM"];
		$datainfiintare=$_POST["datainfiintareFARM"];
		try {
			require_once "dbh.inc.php";
 
			$query="INSERT INTO farmacie(Adresa,DataInfiintare,Denumire) VALUES (:adresa,:datainfiintare,:denumire);";
			$stmt=$pdo->prepare($query);
 
			$stmt->bindParam(":adresa",$adresa);
			$stmt->bindParam(":datainfiintare",$datainfiintare);
			$stmt->bindParam(":denumire",$denumire);
 
			$stmt->execute();
 
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	if ( isset($_POST["insMEDICA"])){
		
		$denumire=$_POST["denumireMEDICA"];	
		$dataproducere=$_POST["dataproducereMEDICA"];
		$dataexpirare=$_POST["dataexpirareMEDICA"];
		try {
			require_once "dbh.inc.php";
 
			$query="INSERT INTO medicamente(Denumire,DataProducere,DataExpirare) VALUES (:denumire,:dataproducere,:dataexpirare);";
			$stmt=$pdo->prepare($query);
 
			$stmt->bindParam(":denumire",$denumire);
			$stmt->bindParam(":dataproducere",$dataproducere);
			$stmt->bindParam(":dataexpirare",$dataexpirare);
 
			$stmt->execute();
 
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
    if ( isset($_POST["insRESU"])){
		
		$FarmacieID=$_POST["farmacieidRESU"];	
		$MedicamentID=$_POST["medicamentidRESU"];
		$Stoc=$_POST["stocRESU"];
		$Pret=$_POST["pretRESU"];
		try {
			require_once "dbh.inc.php";
 
			$query="INSERT INTO resurse(FarmacieID,MedicamentID,Stoc,Pret) VALUES (:farmacieid,:medicamentid,:stoc,:pret);";
			$stmt=$pdo->prepare($query);
 
			$stmt->bindParam(":farmacieid",$FarmacieID);
			$stmt->bindParam(":medicamentid",$MedicamentID);
			$stmt->bindParam(":stoc",$Stoc);
			$stmt->bindParam(":pret",$Pret);
 
			$stmt->execute();
 
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	if ( isset($_POST["insCONT"])){
		$MedicamentID=$_POST["medicamentidCONT"];
		$ProducatorID=$_POST["producatoridCONT"];	
		$Unitati=$_POST["unitatiCONT"];
		try {
			require_once "dbh.inc.php";
 
			$query="INSERT INTO contracte(MedicamentID,ProducatorID,Unitati) VALUES (:medicamentid,:producatorid,:unitati);";
			$stmt=$pdo->prepare($query);
 
			
			$stmt->bindParam(":medicamentid",$MedicamentID);
			$stmt->bindParam(":producatorid",$ProducatorID);
			$stmt->bindParam(":unitati",$Unitati);
 
			$stmt->execute();
 
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	
 
}else{
    header("Location:haha.php");
}