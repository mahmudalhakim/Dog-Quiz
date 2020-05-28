<?php
 require_once 'header.php';
 require_once 'db.php';

session_start();
$score = htmlspecialchars($_GET['score']);
$player = $_SESSION['uName'];

$sqlins = "INSERT INTO `player`(`player_name`, `score`, `date`) VALUES ('$player', '$score', CURRENT_TIMESTAMP)";
$stmtins = $db->prepare($sqlins);
$stmtins->execute();

$message = "<div class='rules'>
             <h1>Well done $player!</h1>
             <h1>You got $score out of 10 pups right!</h1>
             </div>";


$highscore = "<div class='highscore'>
               
               <table class='highscoreTable' style='width:40% margin:5em'>
               <h1>Highscore board</h1>
                    <tr>
                        <th>Name</th>
                        <th>Score</th> 
                        <th>Date</th>
                    </tr>";
$limit = 5;
$sql = "SELECT * FROM `player` ORDER BY `score` DESC LIMIT " .$limit;
$stmt = $db->prepare($sql);
$stmt->execute();

for ($x = 0; $x < $limit; $x++) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $name = htmlspecialchars($row['player_name']);
    $score = htmlspecialchars($row['score']);
    $date = htmlspecialchars($row['date']);
    $highscore .= "<tr>
                    <td>$name</td>
                    <td>$score</td>
                    <td>$date</td>
                </tr>";
} 

$highscore .= "</table>
            <a href='index.php'><button class='option'> Play again!</button></a>
            </div>
            ";


 echo $msg;
 echo $message;
 echo $highscore;

require_once 'footer.php';
?>