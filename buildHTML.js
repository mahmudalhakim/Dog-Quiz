function buildHTML(question) {
  $("img#dog").attr("src", question.corrAnswerImgUrl);

  for (let i = 0; i < question.choices.length; i++) {
    $("button#" + i).html(question.choices[i]);
  }
}
