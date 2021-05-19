<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_HUE2</title>
</head>
<style>
        table, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
        }

    </style>
<body>

<?php 
    $a = 7;
    $b = "30 Euro";
    $c = "!";

    echo $a .$b .$c;
    echo "</br>";
    echo "Text";
    echo "</br>";
    echo "Text" .$a;
    echo "</br>";
    echo "Text" .$a .$b;
    echo "</br>";
    echo $a + 7;
    echo "</br>";
    echo $a * 3;
    echo "</br>";
    echo ('<b>\'Text\'</b>' . $a ." Text " .$b);
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "</br>";
   
    $bez_tisch = "Schrebtisch";
    $bez_stuhl = "Bürostuhl";
    $bez_lampe = "Lampe";
    $bez_pctisch = "Computertisch";

    $preis_tisch = 1999.00;
    $preis_stuhl = 589.00;
    $preis_lampe = 29.00;
    $preis_pctisch = 999.00;

    const mwst = 0.2;
    const euro = "€";

    $netto_gesamt = $preis_tisch + $preis_stuhl + $preis_lampe + $preis_pctisch;
    $brutto_gesamt =  ($preis_tisch + $preis_stuhl + $preis_lampe + $preis_pctisch) * (1+mwst);

    printf("Netto Gesamt = %f %c", $netto_gesamt, euro);
    echo "</br>";
    printf("Netto Gesamt = %f %c</br>", $brutto_gesamt, euro);
    echo "</br>";

?>

<table>
           <tr>
               <th>Name</th>
               <th>Price</th>
           </tr>
           <tr>
               <td>Table</td>
               <td>2378.81 €.</td>
           </tr>
           <tr>
               <td>Office chair</td>
               <td>700.91 €.</td>
           </tr>
           <tr>
               <td>Lamp</td>
               <td>34.51 €.</td>
           </tr>
           <tr>
               <td>PC desk</td>
               <td>1188.81 €.</td>
           </tr>
       </table>
    
</body>
</html>