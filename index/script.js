particlesJS('particles-js',
  
  {
    "particles": {
      "number": {
        "value": 1000,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#000"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 1,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": false,
        "distance": 150,
        "color": "#000",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 5,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "bubble"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 100,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);

/****************************/
document.getElementById("an").innerHTML = (new Date().getFullYear());  

/****************************/
const slidingNewsLetters1 = document.querySelector('.title1')
const slidingNewsLetters2 = document.querySelector('.title2')
const slidingNewsLetters3 = document.querySelector('.title3')


window.addEventListener('scroll',()=>{
  const {scrollTop,clientHeight} = document.documentElement;
  const topElementToTopViewport1 = slidingNewsLetters1.getBoundingClientRect().top;
  const topElementToTopViewport2 = slidingNewsLetters2.getBoundingClientRect().top;
  const topElementToTopViewport3 = slidingNewsLetters3.getBoundingClientRect().top;

  if(scrollTop > (scrollTop+topElementToTopViewport1).toFixed()-clientHeight*0.5){
    slidingNewsLetters1.classList.add('active1')
  }

  if(scrollTop > (scrollTop+topElementToTopViewport2).toFixed()-clientHeight*0.5){
    slidingNewsLetters2.classList.add('active2')
  }

  if(scrollTop > (scrollTop+topElementToTopViewport3).toFixed()-clientHeight*0.5){
    slidingNewsLetters3.classList.add('active3')
  }
})



/********************************/
const b = document.querySelector(".container-button");
const b2 = document.querySelector("#b2");
const TL1 = new TimelineMax({pause : true});

TL1
.from(b,1, {x: -1000, opacity : 0})

TL1.play()