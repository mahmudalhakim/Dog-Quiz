$(document).ready(function () {
  const url = "https://dog.ceo/api/breeds/image/random/3";

  let answers_amount = 3;

  for (let i = 0; i < answers_amount; i++) {
    //spara ner varje JSON-objekt (som motsvar en hund) i en array (t.ex. "dogs[]")
  }
  // i = 0: {breed, img_url}, motsvarar {"Cocker Spaniel", "https:://ksjdbu/lskdfl"}
  // i = 1: [breed, img_url]
  // i = 2: [breed, img_url]

  $.getJSON(url, function (data) {
    //console.log(data);
    //console.log(data.message);

    // hämta 3 random hund, spara i array, index 0 = rätt svar
    //
    let url = data.message;
    let breed = findbreed(url);
    rightAnswer(breed);

    $("img#dog").attr("src", data.message);
  });
});
