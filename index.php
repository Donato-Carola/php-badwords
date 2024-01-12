<!-- primo Esercizio con pragrafo  non censurato -->

<?php 
 
$parag = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo mollitia vel, itaque enim nostrum a dicta cum tempore sint? Possimus porro cum quas? Ratione, tempora blanditiis! Aut excepturi doloribus iure.";

?>

<h1>

   <?php echo $parag ?>
   <p>lunghezza <?php echo strlen($parag)  ?></p>
</h1>


<!-- Esercizio con pragrafo censurato -->


<form action="./index.php" method="GET">
    <div>
        <label for="words">inserisci parola da censurare </label>
        <input type="text" name="words" id="words">
    </div>
</form>


<?php
    
    $words = $_GET['words'];
    
    $paragrafocensurato = str_ireplace($words, "***", $parag )
?>



<h1>
   paragrafo con censurare
   <?php
    echo $paragrafocensurato
   ?>
  <br>
   <h1>lunghezza paragrafo <?php echo strlen($paragrafocensurato) ?></h1>
</h1>


