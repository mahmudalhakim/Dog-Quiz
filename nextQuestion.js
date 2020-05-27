let questionCounterText = document.getElementById("questionCounter");
let scoreText = document.getElementById("score");
let score = 0;
let questionCounter = 1;
const maxQuestions = 3;
questionCounterText.innerText = questionCounter + "/" + maxQuestions;

getQuestion();
function correctAnswer(id) {
  console.log("id: ", id);
  console.log("question outside:", question.correctAnswer);
  questionCounter++;

  if (questionCounter > maxQuestions) {
    //Skicka score plus namn till databasen och användaren till slutsidan där highscore och ens egna poäng visas
    console.log("SLUT");
    location.href = "endpage.php";
  }

  if (id == question.correctAnswer) {
    console.log(
      "correct! your answer is",
      id,
      "the correct answer is",
      question.correctAnswer
    );
    incrementScore(1);
    questionCounterText.innerText = questionCounter + "/" + maxQuestions;
    getQuestion();
    //popup med gå vidare till nästa fråga eller visa med färg på knapparna
  } else {
    console.log("you suck");
    incrementScore(0);
    questionCounterText.innerText = questionCounter + "/" + maxQuestions;
    getQuestion();
    //popup med gå vidare till nästa fråga eller visa med färg på knapparna
  }
  console.log("score: ", score);
}
incrementScore = (num) => {
  score += num;
  scoreText.innerText = score;
};
