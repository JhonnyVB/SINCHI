<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>FACTORIALES</title>
	
     <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="font-cover" id="login">
    <div class="container-login center-align">
        <div style="margin:15px 0;">
           
            <p>PROGRAMA FACTORIAL</p>   
        </div>
        <p>El resultado es :v </p> 
        <form method="post" action="index.html">


            
<?php
if($_REQUEST["radio"]=="NORMAL")
{

$factorial= $_REQUEST['P1'];

echo "<p>OPERACION : <P>";
$svar=1;
$suma=0;
for($matte=1;$matte<=$factorial;$matte++)
{
$svar=$svar * $matte;
$suma=$suma + $svar;
 echo $matte. "!" ;
 IF ($matte < $factorial)
 {
    echo " + ";
 }
}
echo " = ".$suma;

}
if($_REQUEST["radio"]=="PARES")
{

$factorial= $_REQUEST['P1'];

echo "<p>OPERACION : <P>";
$svar=1;
$suma=0;
$fact=$factorial*2;

for($matte=1;$matte<=$fact;$matte++)
{

    $svar=$svar * $matte;
    if ($matte % 2 == 0)
    {

        
        $suma=$suma + $svar;
        echo $matte. "!" ;
        IF ($matte < $fact)
        {
            echo " + ";
        }
    }

}
echo " = ".$suma;
}
if($_REQUEST["radio"]=="IMPARES")
{
$factorial= $_REQUEST['P1'];

echo "<p>OPERACION : <P>";
$svar=1;
$suma=0;
$fact=$factorial*2;

for($matte=1;$matte<=$fact;$matte++)
{

    $svar=$svar * $matte;
    if ($matte % 2 == 1)
    {

        
        $suma=$suma + $svar;
        echo $matte. "!" ;
        IF ($matte < $fact)
        {
            echo " + ";
        }
    }

}
echo " = ".$suma;

}
if($_REQUEST["radio"]=="ENTRE")
{

$factorial= $_REQUEST['P1'];

echo "<p>OPERACION : <P>";
$svar=1;
$suma=0;
$fact=$factorial*5;

for($matte=1;$matte<=$fact;$matte++)
{

    $svar=$svar * $matte;
    if ($matte % 5 == 0)
    {

        
        $suma=$suma + $svar;
        echo $matte. "!" ;
        IF ($matte < $fact)
        {
            echo " + ";
        }
    }

}
echo " = ".$suma;
}



?>



          <p> <center> <button class="waves-effect waves-teal btn-flat"> REGRESAR &nbsp; </button></center>
        </form>
        <div class="divider" style="margin: 20px 0;"></div>
        
    </div>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>
</body>
</html>