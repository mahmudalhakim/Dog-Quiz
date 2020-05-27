function findbreed(url) {
  let breed = findkey(url);
  let newBreed = breed.split("-");
  let realBreed = "";

  for (let i = newBreed.length - 1; i >= 0; i--) {
    if (i == newBreed.length - 1) {
      realBreed += newBreed[i].charAt(0).toUpperCase() + newBreed[i].slice(1);
    } else {
      realBreed +=
        " " + newBreed[i].charAt(0).toUpperCase() + newBreed[i].slice(1);
    }
  }
  //   console.log(realBreed);
  return realBreed;
}

function findkey(url) {
  let url_array = url.split("/");
  let breed = url_array[4];
  return breed;
}

function rightAnswer(breed) {
  let rightAnswer = document.getElementById("svar");
  rightAnswer.innerHTML = breed;
}
