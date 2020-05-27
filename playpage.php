<?php
 require_once 'header.php';
 require_once 'db.php';

 if(isset($_POST['uName'])){

    $player = htmlspecialchars($_POST["uName"]);

    // $sql = "INSERT INTO `player`(`name`) VALUES ($player)";
    // $stmt = $db->prepare($sql);
    // $stmt->execute();
        
    $message = "<div class='rules' onLoad='nextQuestion.js'>
                <h1 id='player'>Let's Go $player!</h1>
                <div>Question: <p id='questionCounter'></p></div>
                <div>Score: <p id='score'></p></div>
                <h2>Guess The Dog Breed!</h2>
                <div class='img-controller'><img id='dog' src='' alt='' /></div>
                <button class='option' id='0' onClick='correctAnswer(id)'></button>
                <button class='option' id='1' onClick='correctAnswer(id)'></button>
                <button class='option' id='2' onClick='correctAnswer(id)'></button>
                </div>";

 }
 echo $message;


//skicka namn till databasen

 require_once 'footer.php';
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="findbreed.js"></script>
<script src="getRandomAnswer.js"></script>
<script src="getQuestion.js"></script>
<script src="buildHTML.js"></script>
<script src="pickAnswer.js"></script>
<script src="nextQuestion.js"></script>

