
<?php 
    //include ('funzione_calcolo.php');
    $x = $_GET['parametro1'];
    $y = $_GET['parametro2'];
     
    function somma($x, $y){
        return $x+$y;
    }
    $risultato= somma($x, $y);
    //echo("Il risultato di $x + $y è =" . somma($x, $y));
    echo("risultato =".  $risultato);   
?>
<br>
<a href="/Test_pw2019/pw2019/Esercizio_2/lista_calcoli.php">Torna indietro</a>

