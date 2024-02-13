<?php
    include("connexion.php");
    function checkadmin($pseudo,$pwd) {
        
        $sql="select * from users where pseudo='".$pseudo."'"  ;
        $result = array();
        $query=mysqli_query(dbconnect(),$sql);
        while($temp=mysqli_fetch_assoc($query))
        {
            $result[]=$temp;
        }
        if (count($result)  == 0) {
            return "Your Acount does not exist ";
        }
        if(count($result) != 0 &&   $result[0]['pwd']!= $pwd){
            return "Wrong Password";
        }
        if(count($result) != 0 &&   $result[0]['pwd']== $pwd && $result[0]['types'] == 2){
            return "Not An Admin, Log as user";
        }
        if(count($result) != 0 &&   $result[0]['pwd']== $pwd && $result[0]['types'] == 1){
            return $result;
        }
    }
    
    function getAllVariete() {

        $sql="select * from variete  ";
        $resultat = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($temp = mysqli_fetch_assoc($resultat))
        {
            $result[]=$temp;
        }
        return $result;
    }
    function createVariete($nom, $occupation, $rendement) {

        $sql="insert into  variete values (default, '%s' ,%s,%s )";
        $sql = sprintf($sql,$nom,$occupation,$rendement);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);

    }
    function updateVariete($id ,$nom, $occupation, $rendement) {
        $sql = "update  variete set  nom = '%s' ,occupation = %s,rendement =  %s  where id_variete = %s  ";
        $sql = sprintf($sql,$nom,$occupation,$rendement, $id);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);
    }
    function deleteVariete ($id ) {
        $sql = "delete from  variete   where id_variete = %s  ";
        $sql = sprintf($sql, $id);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);
    }

    /* ceuilleurs */
    function createCeuilleur($nom, $genre, $naissance) {
        
        $sql="insert into  cueilleurs values (default, '%s' ,'%s','%s' )";
        $sql = sprintf($sql,$nom,$genre,$naissance);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);
        
    }
    function getCeuilleurs() {
        $sql = "select * from cueilleurs ";
        $resultat = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($temp=mysqli_fetch_assoc($resultat)) {
            $result[]=$temp;
        }
        return $result;
    }
    function updateCeuilleurs ($id,$nom, $genre, $naissance) {
        $sql = "update  cueilleurs  set  nom = '%s' ,genre = '%s', naissance =  '%s'  where id_cueilleur = %s  ";
        $sql = sprintf($sql,$nom,$genre,$naissance, $id);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);
    }
    function deleteCeuilleurs ($id ) {
        $sql = "delete from  cueilleurs   where id_cueilleur = %s  ";
        $sql = sprintf($sql, $id);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);
    }
    /* Parcelle */
    function getParcelles() {
        $sql = "select * from parcelle p join variete v on v.id_variete = p.id_variete ";
        $resultat = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($temp=mysqli_fetch_assoc($resultat)) {
            $result[]=$temp;
        }
        return $result;
    }
    function createParcelle( $surface, $id_variete) {

        $sql="insert into  parcelle values (default, %s ,%s  )";
        $sql = sprintf($sql, $surface, $id_variete);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);

    }
    function updateParcelle ($id, $surface, $id_variete) {
        $sql = "update  parcelle  set   surface = %s , id_variete =  %s  where id_parcelle = %s  ";
        $sql = sprintf($sql,$surface,$id_variete, $id);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);
    }
    function deleteParcelle ($id ) {
        $sql = "delete from  parcelle   where id_parcelle = %s  ";
        $sql = sprintf($sql, $id);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);
    }
    /* types de depenses */
    function getTypesDepense () {

        $sql = "select * from types ";
        $resultat= mysqli_query(dbconnect(),$sql);
        $result = array();
        while($temp=mysqli_fetch_assoc($resultat))
        {
            $result[]=$temp;
        }
        return $result;
    }
    function createtypes( $nom ) {

        $sql="insert into  types values (default, '%s'   )";
        $sql = sprintf($sql, $nom );
        echo ($sql);
        mysqli_query(dbconnect(),$sql);

    }
    function updatetypes ($id, $nom) {
        $sql = "update  types  set   nom = '%s'  where  id_type = %s  ";
        $sql = sprintf($sql,$nom, $id);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);
    }
    function deletetypes ($id ) {
        $sql = "delete from  types   where id_type = %s ";
        $sql = sprintf($sql, $id);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);
    }

    /* salaire */
    function getSalaire () {

        $sql = "select * from salaire s join cueilleurs c on c.id_cueilleur = s.id_cueilleur";
        $resultat= mysqli_query(dbconnect(),$sql);
        $result = array();
        while($temp=mysqli_fetch_assoc($resultat))
        {
            $result[]=$temp;
        }
        return $result;
    }
    function createSalaire( $id_ceuilleur ,$montant) {
        $sql="insert into  salaire values (default, %s , now() , %s)";
        $sql = sprintf($sql,$montant,$id_ceuilleur );
        echo ($sql);
        mysqli_query(dbconnect(),$sql);

    }
    function deleteSalaire ($id ) {
        $sql = "delete from  salaire   where id_salaire = %s ";
        $sql = sprintf($sql, $id);
        echo ($sql);
        mysqli_query(dbconnect(),$sql);
    }




















    function checkuser($pseudo,$pwd) {
        
        $sql="select * from users where pseudo='".$pseudo."'"  ;
        $result = array();
        $query=mysqli_query(dbconnect(),$sql);
        while($temp=mysqli_fetch_assoc($query))
        {
            $result[]=$temp;
        }
        if (count($result)  == 0) {
            return "Your Acount does not exist ";
        }
        if(count($result) != 0 &&   $result[0]['pwd']!= $pwd){
            return "Wrong Password";
        }
        if(count($result) != 0 &&   $result[0]['pwd']== $pwd && $result[0]['types'] == 1){
            return "Not A User, Log as admin";
        }
        if(count($result) != 0 &&   $result[0]['pwd']== $pwd && $result[0]['types'] == 2){
            return $result;
        }
    }
function insert_cueillette($date,$idcueilleur,$idparcelle,$poidscueilli){
	$requete = "insert into cueillette values(null,'%s',%s,%s,%s)";
	$requete = sprintf($requete, $date, $poidscueilli, $idparcelle, $idcueilleur);
	mysqli_query(dbconnect(),$requete);
}

// function getPoidsActuel($idparcelle,$date){
// 	$requete = "select max(id),apres from histopoidsparcelle where dates <= '%s' and id_parcelle = %s order by id";
// 	$requete = sprintf($requete, $date, $idparcelle);
// 	$result = mysqli_query(dbconnect(),$requete);
// 	$poids = 0;
// 	while($temp=mysqli_fetch_assoc($result))
// 	{
// 		$poids = $temp['apres'];
// 	}
// 	return $poids;
// }


function getPoidsBase($idparcelle){
	$requete = "select surface,occupation,rendement from parcelle join variete on variete.id_variete = parcelle.id_variete where id_parcelle = %s";
	$requete = sprintf($requete, $idparcelle);
	$poids = 0;
	$result = mysqli_query(dbconnect(), $requete);
	while($row = mysqli_fetch_assoc($result)){
		$occupationm2 = $row["occupation"];
		$occupationha = $occupationm2/10000;
		$rendement = $row["rendement"];
		$surface = $row["surface"];
		$poids = ($surface/$occupationha)*$rendement;
	}
	return $poids;
}
function getPoidsActuel($idparcelle, $date){
	$requete = "select * from cueillette where id_parcelle = %s and month('%s') = month(datecueillette) and year('%s') = year(datecueillette)";
	$requete = sprintf($requete, $idparcelle, $date, $date);
	$poidsActuel = getPoidsBase($idparcelle);
	$result = mysqli_query(dbconnect(), $requete);
	while($row = mysqli_fetch_assoc($result)){
		$poidsActuel -= $row["poidscueilli"];
	}
	return $poidsActuel;
}


function validationPoidsCueillette($idparcelle,$date,$poidscueilli){
	if (getPoidsActuel($idparcelle, $date) >= $poidscueilli) {
        return "true";
	}	
	else {
		return "false";
	}
}

function insertDepense($date, $idtype, $montant){
	$requete = "insert into depense values(null,%s,'%s',%s)";
	$requete = sprintf($requete, $montant, $date, $idtype);
	mysqli_query(dbconnect(),$requete);
}

function getPoidsTotalCueillette($debut,$fin){
	$requete = "select sum(poidscueilli) somme from cueillette where datecueillette >= '%s' and datecueillette <= '%s'";
	$requete = sprintf($requete,$debut,$fin);
    $result = mysqli_query(dbconnect(), $requete);
	$poids = 0;
	while($row = mysqli_fetch_assoc($result)){
		$poids = $row["somme"];
	}
	return $poids;
}
function derniersJoursMoisSansException($debut,$fin){
	$derniersJours = [];
	$debut = new DateTime($debut);
	$fin = new DateTime($fin);
	while($debut <= $fin){
		$derniersJours[] = $debut->format('Y-m-t');
		$debut->modify('first day of next month');
	}
	return $derniersJours;
}

function derniersJoursMois($debut,$fin){
	$derniersJours = [];
	$debut = new DateTime($debut);
	$fin = new DateTime($fin);
	while($debut <= $fin){
		$derniersJoursMois = $debut->format('Y-m-t');
		if ($derniersJoursMois > $fin->format('Y-m-d')) {
			$derniersJours[] = $fin->format('Y-m-d');
			break;
		}
		$derniersJours[] = $derniersJoursMois;
		$debut->modify('first day of next month');
	}
	return $derniersJours;
}

function getPoidsRestant($fin){
	//$parcelle = 
	$parcelles = getParcelles();
	$poids = 0;
	foreach($parcelles as $parcelle){
		$poids += getPoidsActuel($parcelle["id_parcelle"],$fin);
	}
	return $poids;
}

function getRevientTotal($debut,$fin){
	$requete = "select sum(montant) somme from depense where datemontant >= '%s' and datemontant <= '%s'";
	$requete = sprintf($requete,$debut,$fin);
    $result = mysqli_query(dbconnect(), $requete);
	$revient = 0;
	while($row = mysqli_fetch_assoc($result)){
		$revient = $row["somme"];
	}
	return $revient;
}

function getSalaireWDate($date,$id_cueilleur){
    $requete = "select montant from salaire join cueilleurs on cueilleurs.id_cueilleur = salaire.id_cueilleur where salaire.id_cueilleur = %s and dates <= '%s'";
    $requete = sprintf($requete, $id_cueilleur, $date);
    $result = mysqli_query(dbconnect(),$requete);
    $salaire = 0;
    while($row = mysqli_fetch_assoc($result)){
        $salaire = $row['montant'];
    }
    return $salaire;
}
function getSalaireTotal($debut, $fin){
    $requete = "select * from cueillette where datecueillette >= '%s' and datecueillette <= '%s'";
    $requete = sprintf($requete, $debut, $fin);
    $result = mysqli_query(dbconnect(),$requete);
    $salaire = 0;
    while($row = mysqli_fetch_assoc($result)){
        $salaire += $row['poidscueilli']*getSalaireWDate($row['datecueillette'],$row['id_cueilleur']);
    }
    return $salaire;
}

function getNombreMoisEntre2dates($debut, $fin){
	$debut = new DateTime($debut);
	$fin = new DateTime($fin);
	$diff = $debut->diff($fin);
	$nombreMois = $diff->y*12+ $diff->m + $diff->d /30;
	return ceil($nombreMois);
}

function getPoidsProduitTotal($debut,$fin){
	//$parcelle = 
	$parcelles = getParcelles();
	$poids = 0;
	foreach($parcelles as $parcelle){
		$poids += getPoidsBase($parcelle["id_parcelle"])*getNombreMoisEntre2dates($debut, $fin);
	}
	return $poids;
}

function getRevientParKilo($debut,$fin){
    return (getRevientTotal($debut,$fin)+getSalaireTotal($debut,$fin))/getPoidsProduitTotal($debut,$fin);
}

?>