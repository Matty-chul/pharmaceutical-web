<?php
 
 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
 
    
	if ( isset($_POST["delPRODU"])) {
		$first=true;
		$ProducatorID=$_POST["producatoridPRODU"];
		$taraOrigine=$_POST["taraoriginePRODU"];
		$denumire=$_POST["denumirePRODU"];
		$adresa=$_POST["adresaPRODU"];
		try {
			require_once "dbh.inc.php";
 
			$query="DELETE FROM producatori WHERE ";
			if ($ProducatorID!=null){
				if ($first){$first=false; $query=$query."ProducatorID=:producatorid ";}
				else $query=$query."AND ProducatorID=:producatorid ";
			}
			if ($denumire!=null){
				if ($first){$first=false; $query=$query."Denumire=:denumire ";}
				else $query=$query."AND Denumire=:denumire ";
			}
			if ($taraOrigine!=null){
				if ($first){$first=false; $query=$query."TaraOrigine=:taraorigine ";}
				else $query=$query."AND TaraOrigine=:taraorigine ";
			}
			if ($adresa!=null){
				if ($first){$first=false; $query=$query."Adresa=:adresa ";}
				else $query=$query."AND Adresa=:adresa ";
			}
			$query=$query.";";			
			$stmt=$pdo->prepare($query);
			
			if ($ProducatorID!=null) $stmt->bindParam(":producatorid",$ProducatorID);
			if ($denumire!=null) $stmt->bindParam(":denumire",$denumire);
			if ($taraOrigine!=null) $stmt->bindParam(":taraorigine",$taraOrigine);
			if ($adresa!=null) $stmt->bindParam(":adresa",$adresa);
			
			$stmt->execute();
			var_dump($stmt);
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	if ( isset($_POST["delFARM"])){
		$first=true;
		$farmacieid=$_POST["farmacieidFARM"];
		$denumire=$_POST["denumireFARM"];
		$adresa=$_POST["adresaFARM"];
		$datainfiintare=$_POST["datainfiintareFARM"];
		try {
			require_once "dbh.inc.php";
 
			$query="DELETE FROM farmacie WHERE ";
			if ($farmacieid!=null){
				if ($first){$first=false; $query=$query."FarmacieID=:farmacieid ";}
				else $query=$query."AND FarmacieID=:farmacieid ";
			}
			if ($denumire!=null){
				if ($first){$first=false; $query=$query."Denumire=:denumire ";}
				else $query=$query."AND Denumire=:denumire ";
			}
			if ($adresa!=null){
				if ($first){$first=false; $query=$query."Adresa=:adresa ";}
				else $query=$query."AND Adresa=:adresa ";
			}
			if ($datainfiintare!=null){
				if ($first){$first=false; $query=$query."DataInfiintare=:datainfiintare ";}
				else $query=$query."AND DataInfiintare=:datainfiintare ";
			}
			$query=$query.";";
			
			$stmt=$pdo->prepare($query);
			if($farmacieid!=null) $stmt->bindParam(":farmacieid",$farmacieid);
			if($denumire!=null) $stmt->bindParam(":denumire",$denumire);
			if($adresa !=null) $stmt->bindParam(":adresa",$adresa);
			if($datainfiintare!=null) $stmt->bindParam(":datainfiintare",$datainfiintare);
			
			$stmt->execute();
			var_dump($stmt);
			$pdo=null;
			$stmt=null;
			//header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	if ( isset($_POST["delMEDICA"])){
		$first=true;
		$medicamentid=$_POST["medicamentidMEDICA"];
		$denumire=$_POST["denumireMEDICA"];	
		$dataproducere=$_POST["dataproducereMEDICA"];
		$dataexpirare=$_POST["dataexpirareMEDICA"];
		try {
			require_once "dbh.inc.php";
 
			$query="DELETE FROM medicamente WHERE ";
			
			if ($medicamentid!=null){
				if ($first){$first=false; $query=$query."MedicamentID=:medicamentid ";}
				else $query=$query."AND MedicamentID=:medicamentid ";
			}
			if ($denumire!=null){
				if ($first){$first=false; $query=$query."Denumire=:denumire ";}
				else $query=$query."AND Denumire=:denumire ";
			}
			if ($dataproducere!=null){
				if ($first){$first=false; $query=$query."DataProducere=:dataproducere ";}
				else $query=$query."AND DataProducere=:dataproducere ";
			}
			if ($dataexpirare!=null){
				if ($first){$first=false; $query=$query."DataExpirare=:dataexpirare ";}
				else $query=$query."AND DataExpirare=:dataexpirare ";
			}
			$query=$query.";";
			$stmt=$pdo->prepare($query);
			
			if($medicamentid!=null) $stmt->bindParam(":medicamentid",$medicamentid);
			if($denumire!=null) $stmt->bindParam(":denumire",$denumire);
			if($dataproducere!=null) $stmt->bindParam(":dataproducere",$dataproducere);
			if($dataexpirare!=null) $stmt->bindParam(":dataexpirare",$dataexpirare);
 
			$stmt->execute();

			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	if ( isset($_POST["delRESU"])){
		$first=true;
		$ResursaID=$_POST["resursaidRESU"];
		$FarmacieID=$_POST["farmacieidRESU"];	
		$MedicamentID=$_POST["medicamentidRESU"];
		$Stoc=$_POST["stocRESU"];
		$Pret=$_POST["pretRESU"];
		try {
			require_once "dbh.inc.php";
 
			$query="DELETE FROM resurse WHERE ";
			
			if ($ResursaID!=null){
				if ($first){$first=false; $query=$query."ResursaID=:resursaid ";}
				else $query=$query."AND ResursaID=:resursaid ";
			}
			
			if ($FarmacieID!=null){
				if ($first){$first=false; $query=$query."FarmacieID=:farmacieid ";}
				else $query=$query."AND FarmacieID=:farmacieid ";
			}
			if ($MedicamentID!=null){
				if ($first){$first=false; $query=$query."MedicamentID=:medicamentid ";}
				else $query=$query."AND MedicamentID=:medicamentid ";
			}
			
			if ($Stoc!=null){
				if ($first){$first=false; $query=$query."Stoc=:stoc ";}
				else $query=$query."AND Stoc=:stoc ";
			}
			if ($Pret!=null){
				if ($first){$first=false; $query=$query."Pret=:pret ";}
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
			$pdo=null;
			$stmt=null;
			header("Location:index.php");
			die();
 
		} catch(PDOException $e){
			die("Query failed:" . $e->getMessage());
		}
	}
	if ( isset($_POST["delCONT"])){
		$first=true;
		$ContractID=$_POST["contractidCONT"];
		$MedicamentID=$_POST["medicamentidCONT"];
		$ProducatorID=$_POST["producatoridCONT"];	
		$Unitati=$_POST["unitatiCONT"];
		try {
			require_once "dbh.inc.php";
 
			$query="DELETE FROM contracte WHERE ";
			
			if ($ContractID!=null){
				if ($first){$first=false; $query=$query."ContractID=:contractid ";}
				else $query=$query."AND ContractID=:contractid ";
			}
			
			if ($MedicamentID!=null){
				if ($first){$first=false; $query=$query."MedicamentID=:medicamentid ";}
				else $query=$query."AND MedicamentID=:medicamentid ";
			}
			if ($ProducatorID!=null){
				if ($first){$first=false; $query=$query."ProducatorID=:producatorid ";}
				else $query=$query."AND ProducatorID=:producatorid ";
			}
			
			if ($Unitati!=null){
				if ($first){$first=false; $query=$query."Unitati=:unitati ";}
				else $query=$query."AND Unitati=:unitati ";
			}
			$query=$query.";";
			$stmt=$pdo->prepare($query);
 
			if($ContractID!=null)$stmt->bindParam(":contractid",$ContractID);
			if($MedicamentID!=null)$stmt->bindParam(":medicamentid",$MedicamentID);
			if($ProducatorID!=null)$stmt->bindParam(":producatorid",$ProducatorID);
			if($Unitati!=null)$stmt->bindParam(":unitati",$Unitati);
 
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
    header("Location:testresult.php");
}