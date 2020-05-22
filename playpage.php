<?php
 require_once 'header.php';
 require_once 'db.php';

$player = $_POST["name"];

$message = "<div class='rules'>
    <h1 id='player'>Let's Go $player!</h1>
    <h2>Guess The Dog Breed!</h2>
    <div class='img-controller'><img id='dog' src='' alt='' /></div>
    <button class='option' id='svar'></button>
    <button class='option' >SVAR 2</button>
    <button class='option' >SVAR 3</button>
</div>";

echo $message;

 require_once 'footer.php';
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="getdog.js"></script>
<script src="findbreed.js"></script>
<script src="rightanswer.js"></script>
<script src="buttonfunctions.js"></script>

