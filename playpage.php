<?php
session_start();
 require_once 'header.php';
 require_once 'db.php';

 if(isset($_POST['uName'])){
    $player = htmlspecialchars($_POST["uName"]);
    $_SESSION['uName'] = htmlspecialchars($_POST["uName"]); 
        
    $message = "<div class='rules' onLoad='nextQuestion.js'>
                <h1 id='player'>Let's Go $player!</h1>
                <div class='scoreboard'>
                <div><p id='questionCounter'>Question: </p></div>
                <div><p id='score'>Score: 0</p></div></div>
                <h2>Guess The Dog Breed!</h2>
                <div class='img-controller'><img id='dog' src='' alt='' /></div>
                <div class='btnCon'>
                <p id='correct'></p>
                <p id='incorrect'></p>
                <button class='option' id='0' onClick='correctAnswer(id)'></button>
                <button class='option' id='1' onClick='correctAnswer(id)'></button>
                <button class='option' id='2' onClick='correctAnswer(id)'></button>
                </div>
                </div>";

 }
 echo $message;

 require_once 'footer.php';
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="findbreed.js"></script>
<script src="getRandomAnswer.js"></script>
<script src="getQuestion.js"></script>
<script src="buildHTML.js"></script>
<script src="correctAnswer.js"></script>

