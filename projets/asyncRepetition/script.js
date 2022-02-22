const idP = document.getElementById("monP")
const delayTime = 2000;
let myArrayofRepetition = [];

const serieInput = document.getElementById("serie")
const repetitionInput = document.getElementById("repetition")
monBtn.innerHTML = `<div id="monBtn1">Play</div>`

document.body.addEventListener('click', function (e) {
  e.stopPropagation()
  const serie = serieInput.value 
  const repetition = repetitionInput.value
  myArrayofRepetition = [];

  for(i=1; i<=repetition;i++){
    myArrayofRepetition.push(i)
    console.log(myArrayofRepetition)
  }
  const myArrayofSeries=setSerieArray(serie)
  if (e.target.id == "monBtn1") {
    processSeries(myArrayofSeries)
  } else if (e.target.id == "monBtn2") {
    alert("Pause")
  }
})


function delay() {
  return new Promise(resolve => setTimeout(resolve, delayTime));
}

async function delayedLog(item) {
  // notice that we can await a function
  // that returns a promise
  await delay();
  idP.innerHTML = `répétition ${item}`
  console.log(item);
}

async function processArray(array) {

  for await (item of array) {
    await delayedLog(item);
  }
  setTimeout(function () {
    idP.innerHTML = `|`
    console.log('Done!');
  }, delayTime)

}

async function processSeries(array) {
  monBtn.innerHTML = `<div id="monBtn2">Pause</div>`

  for await (item of array) {
    serieShow.innerHTML = `série ${item}`
    await processArray(myArrayofRepetition);
  }
  serieShow.innerHTML = `FINI !`
  setTimeout(function () {
    serieShow.innerHTML = `|`
  }, delayTime)
  monBtn.innerHTML = `<div id="monBtn1">Play</div>`
}

function setSerieArray(serie){
  const numberOfSeries = parseInt(serie, 10);
  const result = []
  for (let i=1; i<=numberOfSeries; i++){
      result.push(i)
  }
  return result;
}


