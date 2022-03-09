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








//add in add to cart


if(isset($_POST['action']) && $_POST['action']=='add')
{


    
    $id=$_POST['id'];
    $name=$_POST['name'];
    $image=$_POST['image'];
    $price=$_POST['price'];
    $quantity=1;
    
    $CartValue=array($id,$image,$name,$price,$quantity);
    array_push($_SESSION['cartAdd'],$CartValue);
    echo json_encode($_SESSION['cartAdd']);


    
   
}



//add in buy now

if(isset($_POST['action']) && $_POST['action']=='addbuy')
{


    
    $id=$_POST['id'];
    $name=$_POST['name'];
    $image=$_POST['image'];
    $price=$_POST['price'];
    $quantity=1;
    
    $CartValue=array($id,$image,$name,$price,$quantity);
    array_push($_SESSION['buyAdd'],$CartValue);
    echo json_encode($_SESSION['buyAdd']);


    
   
}




//add in wish list

if(isset($_POST['action']) && $_POST['action']=='addwish')
{


    
    $id=$_POST['id'];
    $name=$_POST['name'];
    $image=$_POST['image'];
    $price=$_POST['price'];
    $quantity=1;
    
    $CartValue=array($id,$image,$name,$price,$quantity);
    array_push($_SESSION['wishAdd'],$CartValue);
    echo json_encode($_SESSION['wishAdd']);


    
   
}










if($_POST['action']=='edit1')
{

$val1=$_POST['val'];
$quant1=$_POST['quant'];

echo json_encode($val1);   
echo json_encode($quant1);   
 
for($i=0;$i < count($_SESSION['cartAdd']);$i++)
{
    if($val1==$i)
    {
array_splice($_SESSION['cartAdd'],$i,1,$quant1);
    }
}
    
echo json_encode($_SESSION['cartAdd']);    
    


    
   
}




if($_POST['action']=='edit2')
{

$val1=$_POST['val'];
$quant1=$_POST['quant'];

echo json_encode($val1);   
echo json_encode($quant1);   
 
for($i=0;$i < count($_SESSION['buyAdd']);$i++)
{
    if($val1==$i)
    {
array_splice($_SESSION['buyAdd'],$i,1,$quant1);
    }
}
    
echo json_encode($_SESSION['buyAdd']);    
    


    
   
}






if($_POST['action']=='edit3')
{

$val1=$_POST['val'];
$quant1=$_POST['quant'];

echo json_encode($val1);   
echo json_encode($quant1);   
 
for($i=0;$i < count($_SESSION['wishAdd']);$i++)
{
    if($val1==$i)
    {
array_splice($_SESSION['wishAdd'],$i,1,$quant1);
    }
}
    
echo json_encode($_SESSION['wishAdd']);    
    


    
   
}







if($_POST['action']=='delete1')
{
// // echo("Inside delete "+$_POST['action']+ "<br>");
$val2=$_POST['valD'];

 
for($i=0;$i < count($_SESSION['cartAdd']);$i++)
{
    if($val2==$i)
    {
array_splice($_SESSION['cartAdd'],$i,1);
// echo json_encode($_SESSION['cartAdd']);    
    }
}
    
echo json_encode($_SESSION['cartAdd']);      
}










if($_POST['action']=='delete2')
{
// // echo("Inside delete "+$_POST['action']+ "<br>");
$val2=$_POST['valD'];

 
for($i=0;$i < count($_SESSION['buyAdd']);$i++)
{
    if($val2==$i)
    {
array_splice($_SESSION['buyAdd'],$i,1);
// echo json_encode($_SESSION['cartAdd']);    
    }
}
    
echo json_encode($_SESSION['buyAdd']);      
}





if($_POST['action']=='delete3')
{
// // echo("Inside delete "+$_POST['action']+ "<br>");
$val2=$_POST['valD'];

 
for($i=0;$i < count($_SESSION['wishAdd']);$i++)
{
    if($val2==$i)
    {
array_splice($_SESSION['wishAdd'],$i,1);
// echo json_encode($_SESSION['cartAdd']);    
    }
}
    
echo json_encode($_SESSION['wishAdd']);      
}


if($_POST['action']=='addthis1')
{

    array_push($_SESSION['buyAdd'],$_SESSION['cartAdd']);
   
    echo json_encode($_SESSION['buyAdd']);  
    unset($_SESSION['cartAdd']);



}




if($_POST['action']=='addthis2')
{

    array_push($_SESSION['wishAdd'],$_SESSION['cartAdd']);
   
    echo json_encode($_SESSION['wishAdd']);  
    unset($_SESSION['cartAdd']);



}




if($_POST['action']=='addthis4')
{

    array_push($_SESSION['cartAdd'],$_SESSION['buyAdd']);
   
    echo json_encode($_SESSION['cartAdd']);  
    unset($_SESSION['buyAdd']);



}




if($_POST['action']=='addthis5')
{

    array_push($_SESSION['wishAdd'],$_SESSION['buyAdd']);
   
    echo json_encode($_SESSION['wishAdd']);  
    unset($_SESSION['buyAdd']);



}



if($_POST['action']=='addthis7')
{

    array_push($_SESSION['cartAdd'],$_SESSION['wishAdd']);
   
    echo json_encode($_SESSION['cartAdd']);  
    unset($_SESSION['wishAdd']);



}




if($_POST['action']=='addthis8')
{

    array_push($_SESSION['buyAdd'],$_SESSION['wishAdd']);
   
    echo json_encode($_SESSION['buyAdd']);  
    unset($_SESSION['wishAdd']);



}






if($_POST['action']=='move1')
{

    $val3=$_POST['key'];


    for($i=0;$i < count($_SESSION['cartAdd']);$i++)
{
    if($val3==$i)
    {
        array_push($_SESSION['buyAdd'],$_SESSION['cartAdd'][$i]);
        array_splice($_SESSION['cartAdd'],$val3,1);
    } 
}  
echo json_encode($_SESSION['buyAdd']);
}



if($_POST['action']=='move2')
{

    $val3=$_POST['key'];


    for($i=0;$i < count($_SESSION['cartAdd']);$i++)
{
    if($val3==$i)
    {
        array_push($_SESSION['wishAdd'],$_SESSION['cartAdd'][$i]);
        array_splice($_SESSION['cartAdd'],$val3,1);
    } 
}  
echo json_encode($_SESSION['wishAdd']);
}


if($_POST['action']=='move3')
{

    $val3=$_POST['key'];


    for($i=0;$i < count($_SESSION['buyAdd']);$i++)
{
    if($val3==$i)
    {
        array_push($_SESSION['cartAdd'],$_SESSION['buyAdd'][$i]);
        array_splice($_SESSION['buyAdd'],$val3,1);
    } 
}  
echo json_encode($_SESSION['cartAdd']);
}


if($_POST['action']=='move4')
{

    $val3=$_POST['key'];


    for($i=0;$i < count($_SESSION['buyAdd']);$i++)
{
    if($val3==$i)
    {
        array_push($_SESSION['wishAdd'],$_SESSION['buyAdd'][$i]);
        array_splice($_SESSION['buyAdd'],$val3,1);
    } 
}  
echo json_encode($_SESSION['wishAdd']);
}



if($_POST['action']=='move5')
{

    $val3=$_POST['key'];


    for($i=0;$i < count($_SESSION['wishAdd']);$i++)
{
    if($val3==$i)
    {
        array_push($_SESSION['buyAdd'],$_SESSION['wishAdd'][$i]);
        array_splice($_SESSION['wishAdd'],$val3,1);
    } 
}  
echo json_encode($_SESSION['buyAdd']);
}


if($_POST['action']=='move6')
{

    $val3=$_POST['key'];


    for($i=0;$i < count($_SESSION['wishAdd']);$i++)
{
    if($val3==$i)
    {
        array_push($_SESSION['cartAdd'],$_SESSION['wishAdd'][$i]);
        array_splice($_SESSION['wishAdd'],$val3,1);
    } 
}  
echo json_encode($_SESSION['cartAdd']);
}
























//remove All in cart


if($_POST['action']=='removeAll1')
{
    unset($_SESSION['cartAdd']);
    echo json_encode($_SESSION['cartAdd']); 
}


//remove All in buy


if($_POST['action']=='removeAll2')
{
    unset($_SESSION['buyAdd']);
    echo json_encode($_SESSION['buyAdd']); 
}


//remove All in wish


if($_POST['action']=='removeAll3')
{
    unset($_SESSION['wishAdd']);
    echo json_encode($_SESSION['wishAdd']); 
}
