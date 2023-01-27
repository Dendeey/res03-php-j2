<?php

$formArray = [];

// INFORMATIONS 

if (isset($_POST['nom'])) {
    $formArray['nom'] = $_POST['nom'];
}
if (isset($_POST['prenom'])) {
    $formArray['prenom'] = $_POST['prenom'];
}
if (isset($_POST['email'])) {
    $formArray['email'] = $_POST['email'];
}
if (isset($_POST['phone'])) {
    $formArray['phone'] = $_POST['phone'];
}
if (isset($_POST['linkedin'])) {
    $formArray['linkedin'] = $_POST['linkedin'];
}
if (isset($_POST['biographie'])) {
    $formArray['biographie'] = $_POST['biographie'];
}
if (isset($_POST['loisir1'])) {
    $formArray['loisir1'] = $_POST['loisir1'];
}
if (isset($_POST['loisir2'])) {
    $formArray['loisir2'] = $_POST['loisir2'];
}
if (isset($_POST['loisir3'])) {
    $formArray['loisir3'] = $_POST['loisir3'];
}
if (isset($_POST['loisir4'])) {
    $formArray['loisir4'] = $_POST['loisir4'];
}

// LANGS 

if(isset($_POST['langs'])){
    $formArray['langs'] = $_POST['langs'];
}

// SKILLS 
// PROGRAMMING LANGUAGES

if(isset($_POST['prog'])){
    $formArray['prog'] = $_POST['prog'];
}


// FRAMEWORKS

if(isset($_POST['frameworks'])){
    $formArray['frameworks'] = $_POST['frameworks'];
}


// SOFTWARE

if(isset($_POST['softwares'])){
    $formArray['softwares'] = $_POST['softwares'];
}

// COLOR

if(isset($_POST['colors'])){
    $formArray['colors'] = $_POST['colors'];
}

echo "<pre>";
var_dump($formArray);
echo "</pre>";

?>