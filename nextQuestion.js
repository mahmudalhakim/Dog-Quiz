let questionCounterText = document.getElementById("questionCounter");
let scoreText = document.getElementById("score");
let score = 0;
let questionCounter = 1;
const maxQuestions = 10;
questionCounterText.innerText =
  "Question: " + questionCounter + "/" + maxQuestions;

getQuestion();
function correctAnswer(id) {
  questionCounter++;

  if (id == question.correctAnswer) {
    document.getElementById("correct").innerHTML = "Right pup!";

    setTimeout(function () {
      document.getElementById("correct").innerHTML = "";
    }, 1000);

    incrementScore(1);
    questionCounterText.innerText =
      "Question: " + questionCounter + "/" + maxQuestions;
    setTimeout(getQuestion, 1000);
  } else {
    document.getElementById("incorrect").innerHTML = "Wrong pup :(";

    setTimeout(function () {
      document.getElementById("incorrect").innerHTML = "";
    }, 1000);
    questionCounterText.innerText =
      "Question: " + questionCounter + "/" + maxQuestions;
    setTimeout(getQuestion, 1000);
  }

  if (questionCounter > maxQuestions) {
    location.href = "endpage.php?score=" + score;
  }
}
incrementScore = (num) => {
  score += num;
  scoreText.innerText = "Score: " + score;
};
