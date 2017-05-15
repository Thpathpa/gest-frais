<?php
$connexion= "mysql:host=vps399745.ovh.net;dbname=gest-frais"; 
$log="root"; 
$mdpsql="Btssio"; 


try {
$bdd = new PDO($connexion,$log,$mdpsql);
	}
catch(PDOException $e)
{
        echo 'Erreur : '.$e->getMessage();
}

