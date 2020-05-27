<?php
 require_once 'header.php';
 require_once 'db.php';

//Skicka score och namn till databasen.


 $message = "<div class='rules'>
             <h1>Well done!</h1>
             <h1>You got 5 out of 10 pups right!</h1>
             </div>";

 $highscore = "<div class='highscore'>
               
               <table class='highscoreTable' style='width:40% margin:5em'>
               <h1>Highscore board</h1>
                    <tr>
                        <th>Name</th>
                        <th>Score</th> 
                        <th>Time</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>10</td>
                        <td>1 April 2020</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>8</td>
                        <td>14 Mars 2020</td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>5</td>
                        <td>20 Maj 2020</td>
                    </tr>
                </table>
            </div>";

 echo $message;
 echo $highscore;

require_once 'footer.php';
?>