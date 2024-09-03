<?php
 
 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $query="UPDATE ";
	if ( isset($_POST["updPRODU"])) {
		$ProducatorID=$_POST["producatoridPRODU"];
		$taraOrigine=$_POST["taraoriginePRODU"];
		$denumire=$_POST["denumirePRODU"];
		$adresa=$_POST["adresaPRODU"];
		try {
			require_once "dbh.inc.php";
 
			$query=$query."producatori SET ";
			if ($denumire!=null) $query=$query."Denumire=:denumire, ";
			if ($taraOrigine!=null) $query=$query."TaraOrigine=:taraorigine, ";
			if ($adresa!=null) $query=$query."Adresa=:adresa ";
			
			if($query[strlen($query)-2]==",")$query[strlen($query)-2]=" ";
			$query=$query."WHERE ProducatorID=:producatorid;";
			$stmt=$pdo->prepare($query);
			
			$stmt->bindParam(":producatorid",$ProducatorID);
			if ($denumire!=null) $stmt->bindParam(":denumire",$denumire);
			if ($taraOrigine!=null) $stmt->bindParam(":taraorigine",$taraOrigine);
			if ($adresa!=null) $stmt->bindParam(":adresa",$adresa);
 
			$stmt->execute();
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	if ( isset($_POST["updFARM"])){
		
		$farmacieid=$_POST["farmacieidFARM"];
		$denumire=$_POST["denumireFARM"];
		$adresa=$_POST["adresaFARM"];
		$datainfiintare=$_POST["datainfiintareFARM"];
		
		try {
			require_once "dbh.inc.php";
 
			$query=$query."farmacie SET ";
			
			if ($denumire!=null) $query=$query."Denumire=:denumire, ";
			if ($adresa!=null) $query=$query."Adresa=:adresa, ";
			if ($datainfiintare!=null) $query=$query."DataInfiintare=:datainfiintare ";
			
			
			if($query[strlen($query)-2]==",")$query[strlen($query)-2]=" ";
			$query=$query."WHERE FarmacieID=:farmacieid;";
			$stmt=$pdo->prepare($query);
 
			$stmt->bindParam(":farmacieid",$farmacieid);
			if ($adresa!=null) $stmt->bindParam(":adresa",$adresa);
			if ($datainfiintare!=null) $stmt->bindParam(":datainfiintare",$datainfiintare);
			if ($denumire!=null) $stmt->bindParam(":denumire",$denumire);
 
			$stmt->execute();
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	if ( isset($_POST["updMEDICA"])){
		
		$medicamentid=$_POST["medicamentidMEDICA"];
		$denumire=$_POST["denumireMEDICA"];	
		$dataproducere=$_POST["dataproducereMEDICA"];
		$dataexpirare=$_POST["dataexpirareMEDICA"];
		
		try {
			require_once "dbh.inc.php";
 
			$query=$query."medicamente SET ";
			
			if ($denumire!=null) $query=$query."Denumire=:denumire, ";
			if ($dataproducere!=null) $query=$query."DataProducere=:dataproducere, ";
			if ($dataexpirare!=null) $query=$query."DataExpirare=:dataexpirare ";
			
			if($query[strlen($query)-2]==",")$query[strlen($query)-2]=" ";
			$query=$query."WHERE MedicamentID=:medicamentid;";
			$stmt=$pdo->prepare($query);
 
			$stmt->bindParam(":medicamentid",$medicamentid);
			if($denumire!=null) $stmt->bindParam(":denumire",$denumire);
			if($dataproducere!=null) $stmt->bindParam(":dataproducere",$dataproducere);
			if($dataexpirare !=null) $stmt->bindParam(":dataexpirare",$dataexpirare);
 
			$stmt->execute();
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
    if ( isset($_POST["updRESU"])){
		
		$ResursaID=$_POST["resursaidRESU"];
		$FarmacieID=$_POST["farmacieidRESU"];	
		$MedicamentID=$_POST["medicamentidRESU"];
		$Stoc=$_POST["stocRESU"];
		$Pret=$_POST["pretRESU"];
		try {
			require_once "dbh.inc.php";
 
			$query=$query."resurse SET ";
			
			if ($FarmacieID!=null) $query=$query."FarmacieID=:farmacieid, ";
			if ($MedicamentID!=null) $query=$query."MedicamentID=:medicamentid, ";
			if ($Stoc!=null) $query=$query."Stoc=:stoc, ";
			if ($Pret!=null) $query=$query."Pret=:pret ";
			
			if($query[strlen($query)-2]==",")$query[strlen($query)-2]=" ";
			$query=$query."WHERE ResursaID=:resursaid;";
			$stmt=$pdo->prepare($query);
 
			$stmt->bindParam(":resursaid",$ResursaID);
			if ($FarmacieID!=null) $stmt->bindParam(":farmacieid",$FarmacieID);
			if ($MedicamentID!=null) $stmt->bindParam(":medicamentid",$MedicamentID);
			if ($Stoc!=null) $stmt->bindParam(":stoc",$Stoc);
			if ($Pret!=null) $stmt->bindParam(":pret",$Pret);
 
			$stmt->execute();
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	if ( isset($_POST["updCONT"])){
		
		$ContractID=$_POST["contractidCONT"];
		$MedicamentID=$_POST["medicamentidCONT"];
		$ProducatorID=$_POST["producatoridCONT"];	
		$Unitati=$_POST["unitatiCONT"];
		
		try {
			require_once "dbh.inc.php";
 
			$query=$query."contracte SET ";
			if ($MedicamentID!=null) $query=$query."MedicamentID=:medicamentid, ";
			if ($ProducatorID!=null) $query=$query."ProducatorID=:producatorid, ";
			if ($Unitati!=null) $query=$query."Unitati=:unitati ";
			
			if($query[strlen($query)-2]==",")$query[strlen($query)-2]=" ";
			$query=$query."WHERE ContractID=:contractid;";
			$stmt=$pdo->prepare($query);
 
			$stmt->bindParam(":contractid",$ContractID);
			if ($MedicamentID!=null) $stmt->bindParam(":medicamentid",$MedicamentID);
			if ($ProducatorID!=null) $stmt->bindParam(":producatorid",$ProducatorID);
			if ($Unitati!=null) $stmt->bindParam(":unitati",$Unitati);
 
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