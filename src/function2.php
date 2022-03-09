<?php
session_start();
// session_destroy();
if(!isset($_SESSION['cartAdd']))
{
    $_SESSION['cartAdd']=array();
}


if(!isset($_SESSION['buyAdd']))
{
    $_SESSION['buyAdd']=array();
}



if(!isset($_SESSION['wishAdd']))
{
    $_SESSION['wishAdd']=array();
}

if($_POST['action']=='move1')
{
echo json_encode($_SESSION['cartAdd']);
}

if($_POST['action']=='move2')
{
echo json_encode($_SESSION['cartAdd']);
}
if($_POST['action']=='move3')
{
echo json_encode($_SESSION['buyAdd']);
}
if($_POST['action']=='move4')
{
echo json_encode($_SESSION['buyAdd']);
}

if($_POST['action']=='move5')
{
echo json_encode($_SESSION['wishAdd']);
}
if($_POST['action']=='move6')
{
echo json_encode($_SESSION['wishAdd']);
}

?>