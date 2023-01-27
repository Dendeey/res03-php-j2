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

if(isset($_POST['francais'])){
    $formArray['francais'] = $_POST['francais'];
}
if(isset($_POST['anglais'])){
    $formArray['anglais'] = $_POST['anglais'];
}
if(isset($_POST['arabe'])){
    $formArray['arabe'] = $_POST['arabe'];
}
if(isset($_POST['breton'])){
    $formArray['breton'] = $_POST['breton'];
}
if(isset($_POST['espagnol'])){
    $formArray['espagnol'] = $_POST['espagnol'];
}

// SKILLS 
// PROGRAMMING LANGUAGES

if(isset($_POST['html'])){
    $formArray['html'] = $_POST['html'];
}
if(isset($_POST['css'])){
    $formArray['css'] = $_POST['css'];
}
if(isset($_POST['js'])){
    $formArray['js'] = $_POST['js'];
}
if(isset($_POST['php'])){
    $formArray['php'] = $_POST['php'];
}
if(isset($_POST['sql'])){
    $formArray['sql'] = $_POST['sql'];
}

// FRAMEWORKS

if(isset($_POST['sass'])){
    $formArray['sass'] = $_POST['sass'];
}
if(isset($_POST['bootstrap'])){
    $formArray['bootstrap'] = $_POST['bootstrap'];
}
if(isset($_POST['symphony'])){
    $formArray['symphony'] = $_POST['symphony'];
}
if(isset($_POST['laravel'])){
    $formArray['laravel'] = $_POST['laravel'];
}

// SOFTWARE

if(isset($_POST['photoshop'])){
    $formArray['photoshop'] = $_POST['photoshop'];
}
if(isset($_POST['illusrator'])){
    $formArray['illusrator'] = $_POST['illusrator'];
}
if(isset($_POST['xd'])){
    $formArray['xd'] = $_POST['xd'];
}
if(isset($_POST['figma'])){
    $formArray['figma'] = $_POST['figma'];
}

// COLOR

if(isset($_POST['colors'])){
    $formArray['colors'] = $_POST['colors'];
}

echo "<pre>";
var_dump($formArray);
echo "</pre>";

?>