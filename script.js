let pageCount = 1;
let pageReadyToTurn = true;

scroll(0, 0);

//Interaction pour passer à la page suivante via l'icone flèche droite
function changePageRight() {

    var pageOver = "page" + pageCount;


    var delayInMilliseconds = 1500; //1.5 seconds
    if (pageReadyToTurn === true) {
        pageReadyToTurn = false;

        if (pageCount < 4) {
            document.getElementById(pageOver).classList.remove('pageIn');
            document.getElementById(pageOver).classList.add('pageOff');

            document.getElementById("page" + (pageCount + 1)).classList.remove('pageWaiting');
            document.getElementById("page" + (pageCount + 1)).classList.add('pageIn');
            pageCount++;
            verticalScrollAllowed()


        } else if (pageCount === 4) {
            document.getElementById(pageOver).classList.remove('pageIn');
            document.getElementById(pageOver).classList.add('pageOff');

            document.getElementById("page1").classList.remove('pageWaiting');
            document.getElementById("page1").classList.add('pageIn');

            pageCount = 1;

        }
        titleChange()
        setTimeout(function () {
            document.getElementById(pageOver).classList.remove('pageOff');
            document.getElementById(pageOver).classList.add('pageWaiting');
            pageReadyToTurn = true;

        }, delayInMilliseconds);
    }
}

var boutonElt = document.getElementById("arrow");
// Ajout d'un gestionnaire pour l'événement click
boutonElt.addEventListener("click", changePageRight);

//Page 2 : Activer le scroll vertical

function verticalScrollAllowed() {
    if (pageCount === 3) {
        var delayInMilliseconds = 1500; //1.5 seconds
        setTimeout(function () {
            document.body.style['overflow-y'] = 'scroll';
        }, delayInMilliseconds);
    } else {
        scroll(0, 0);
        document.body.style['overflow-y'] = 'hidden';
    }
}

function goTop(){
    window.scrollTo(0, 0);
}

function titleChange() {
    switch (pageCount) {
        case 1:
            document.title = "Simon F. ✌️"
            break;
        case 2:
            document.title = "Simon F. 🐓"
            break;
        case 3:
            document.title = "Simon F. 🤯"
            break;
        case 4:
            document.title = "Simon F. 🍾"
            break;
        default:
            alert("Celui qui lit ça est un gentleman.")
            break;
    }
}








// DRAG AND DROP

const base = document.querySelector('.base');
const box = document.querySelectorAll('.case');



base.addEventListener('dragstart', dragStart);
base.addEventListener('dragend', dragEnd);


function dragStart() {
    this.className += ' tenu';

    setTimeout(() => (this.className = 'invisible'), 0);
}

function dragEnd() {
    this.className = 'base';
}


for (const vide of box) {

    vide.addEventListener('dragover', dragOver);

    vide.addEventListener('dragenter', dragEnter);

    vide.addEventListener('dragleave', dragLeave);

    vide.addEventListener('drop', dragDrop);


}



function dragOver(e) {
    e.preventDefault()


}

function dragEnter(e) {
    e.preventDefault();
    this.className += ' hovered';
}

function dragLeave() {
    this.className = 'case';
}


function dragDrop() {
    this.className = 'case';
    this.append(base);
    if (this.id === 'hole') {
        //Récompense
        document.getElementById("grandeDiv").classList.add('reward');

        //Faire apparaitre le SVG
        document.getElementById("arrowDiv").classList.remove('arrowHidding');
        document.getElementById("arrowDiv").classList.add('arrowCome');

        //Etendre la div
        document.getElementById("locomotive").classList.remove('hidden');
    }
}



// Copy to clipboard

function copy() {
    var copyText = document.querySelector("#hiddenMail");
    copyText.select();
    document.execCommand("copy");
  }
  
  document.querySelector("#sendMail").addEventListener("click", copy);

  //DL CV
  function openCV(){
    window.open("./img/SFournierCVLDM2022.pdf", '_blank');
  }
  document.querySelector("#openCV").addEventListener("click", openCV);

