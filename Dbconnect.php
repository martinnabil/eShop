<?php
if(!mysql_connect('localhost:8888','root','root'))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("eShop"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>