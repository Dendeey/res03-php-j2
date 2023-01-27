<?php 

if($_GET["route"] === "")
{
    require "home.phtml";
}
if($_GET["route"] === "about")
{
    require "about.phtml";
}
if($_GET["route"] === "contact")
{
    require "contact.phtml";
}


?>