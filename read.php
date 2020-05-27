<?php
/**************************************** *
 * read info from db & display posts
 * different sql-orders depending on which link pushed
 * filters according to categories
**************************************** */

  // koppla till databas
  require_once 'db.php';
?>
<div class="rules game">
<h2>Welcome to Dog Quiz!</h2>

  <p>
    The rules are simple, you'll see a picture of a cute dog 
    and then you have to guess what breed the picture represent. 
    You will get three options, just press the button with 
    (what you think is) the right answer and hope for the best!
  </p>
<br>
<form class="form" action="playpage.php" method="POST">
  <label class="label" for="name">What do you want us to call you? </label><br>
  <input id="player" class="username" type="text" name="uName" placeholder="write your username" /><br>
  <button id ="start" class="start">Let's get started!</button>
</form>
</div>
