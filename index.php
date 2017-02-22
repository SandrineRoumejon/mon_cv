<?php
$destinataire='roumejons@gmail.com';
?><!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="utf-8">
 <title>Contact</title>
 <meta http-equiv="content-type" content="Content-type:text/html;charset=iso-8859-1">
</head>
<body style="background-color: lightblue;">
<?php
$Previsualiser='<p class="bt">
<input type="submit" name="previsualiser" tabindex="3" value="Prévisualiser"></p>';
$Envoi="\n".'<p class="bt">
<input name="envoi" tabindex="4" value="Envoyer" type="submit"></p>';
if (isset($_POST['message']))
 {
   // La variable $verif va nous permettre d'analyser si la sémantique de l'email est bonne
   $verif='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';
   //quelques remplacements pour les specialchars
   $message=preg_replace('#(<|>)#', '-', $_POST['message']);
   $message=str_replace('"', "'",$message);
   $message=str_replace('&', 'et',$message);
   $objet=preg_replace('#(<|>)#', '-', $_POST['objet']);
   $objet=str_replace('"', "'",$objet);
   $objet=str_replace('&', 'et',$objet);
   // On assigne et/ou protège nos variables
   $votremail=stripslashes(htmlentities($_POST['votremail']));
   $message=stripslashes(htmlspecialchars($message));
   $objet=stripslashes(htmlspecialchars($objet));
   //input envoi/previsualiser
   $envoi=htmlentities($_POST['envoi']);
   $previsualiser=htmlentities($_POST['previsualiser']);
   //on enlève les espaces
   $votremail=trim($votremail);
   $message=trim($message);
   $objet=trim($objet);
