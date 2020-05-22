function findbreed(url) {
  let url_array = url.split("/");
  for (let i = 0; i < url_array.length; i++) {
    console.log(url_array[i]);
  }
  let breed = url_array[4];
  console.log(breed);

  let newBreed = breed.split("-");
  console.log(newBreed.length);

  let realBreed = "";
  for (let i = newBreed.length - 1; i >= 0; i--) {
    //console.log(i);
    //console.log(newBreed[i]);
    //realBreed += newBreed[i];
    if (i == newBreed.length - 1) {
      realBreed += newBreed[i].charAt(0).toUpperCase() + newBreed[i].slice(1);
    } else {
      realBreed +=
        " " + newBreed[i].charAt(0).toUpperCase() + newBreed[i].slice(1);
    }
  }
  console.log(realBreed);
  return realBreed;
}


function rightAnswer(breed) {
  let rightAnswer = document.getElementById("svar");
  rightAnswer.innerHTML = breed;
}
