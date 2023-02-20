function debounce(func, timeout = 200){
    let timer;
    return (...args) => {
      if (!timer) {
        func.apply(this, args);
      }
      clearTimeout(timer);
      timer = setTimeout(() => {
        timer = undefined;
      }, timeout);
    };
  }


const target = document.querySelectorAll('.anime');
const animationClass = 'anime-off';

function animeScroll(){
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    target.forEach(function(element) {
        if((windowTop) > element.offsetTop){
            element.classList.add(animationClass);
        }
    })
}

animeScroll();

if(target.length){
        window.addEventListener('scroll', debounce(function(){
        animeScroll();
        console.log('dsadsa');
    }, 10));
}

