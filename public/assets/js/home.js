let totalslides = document.querySelectorAll('.carousel-img').length;
let currentSlide = 0;

document.querySelector('.carousel').style.width = `calc(1vw * ${totalslides} )`;
document.querySelector('.carousel-controls').style.height =
    `${document.querySelector('.container-carousel').clientHeight}px`;


function goPrev(){
    currentSlide--;
    if(currentSlide < 0){
        currentSlide = totalslides - 1;
    }

    updateMargin();
}

function goNext(){
    currentSlide++; 
    if(currentSlide > (totalslides - 1 )){
        currentSlide = 0;
    }
    updateMargin();
}

function updateMargin(){
    let sliderimgWidth = document.querySelector('.carousel-img').clientWidth;
    let newMargin = (currentSlide * sliderimgWidth);
    document.querySelector('.carousel').style.marginLeft = 
        `-${newMargin}px`;
}

setInterval(goNext, 5000);



