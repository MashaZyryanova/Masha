let canvas = document.querySelector('canvas');
let c = canvas.getContext('2d');
let startedSnowfall = false;
let floor = [];
let runAnimation;


//set canvas size depending on a viewport
function setCanvas(canvas) {
  canvas.width = window.innerWidth;
  if(screen.width>=768 && screen.width < 1200) {
    
   canvas.height = window.innerHeight/1.16;
    console.log('initial canvas height ', canvas.height )
    
  }
  else {
    // canvas.height = window.innerHeight/1.8;
    canvas.height = 520;
    console.log('Initial canvas height for bigger screens ', canvas.height )
  } 
}

function resizeCanvas() {
   canvas = document.querySelector('canvas');
  
  canvas.width = window.innerWidth;
  console.log(window.innerWidth);
  console.log(screen.width)
  if(screen.width>=768 && screen.width < 1200) {
    canvas.height = 632;
    console.log('height in resize', canvas.height )
  }
  else {
    canvas.height = 520;
    console.log(' in resize height for bigger screens ', canvas.height )
  } 
}
//create ground
function createGround() {
  for (let i=0;i<198; i++) {
    floor[i] = {xCoord:i*10+10, yCoord: canvas.height}
  } 
  //console.log(floor)
}


class Snowflake {
  constructor(x, y, dx, dy, fontSize, reachedGround, counted, getx) {
      this.x = x
      this.y = y
      this.dx = dx
      this.dy = dy
      this.fontSize = fontSize;
      this.reachedGround = reachedGround;
      this.counted = counted;
      this.getx = getx;
      this.snowHeight = canvas.height;
      this.color = colors[Math.floor(Math.random() * colors.length)]
  }
  draw () {
    c.font = this.fontSize +'px serif'
    c.strokeStyle= this.color;
    c.strokeText("\u2744",this.x,this.y)
  }

  update() {
    if(this.x  > innerWidth || this.x < 0) {
        this.dx = -this.dx;
    }
    if (this.y < 0) {
        this.dy =-this.dy;
    }
    this.x+=this.dx;
    this.y+=this.dy;
  
    if(!this.getx) {
      let gx = Math.floor(this.x)
      //console.log('xcoord ', gx)
      let bucket = floor.find((el) => {
          if(gx<=10) {
               gx+=10;
          }
          return el.xCoord >=  gx-10 && el.xCoord <gx;
      })
      if(bucket) {
          this.snowHeight = bucket.yCoord;
         
      }
      else {
          this.snowHeight = 520;
          
      }
      this.getx = true    
    }
  
    if (this.y >= this.snowHeight) {
        this.dx = 0;
        this.reachedGround = true;
        this.y = this.snowHeight; 
        
    }

    if(this.reachedGround && !this.counted) {
      this.counted = true;
      let placeOfReachGround = Math.floor(this.x)
      let bucket = floor.find((el) => {
         return el.xCoord >=  placeOfReachGround-10 && el.xCoord < placeOfReachGround;
      })
      if(bucket) {
          bucket.yCoord -= 7;
      }
      //create new snowflake
      if(snowArray.length <1000) {
          createNewSnowflake();
    }
      
  }
  this.draw();
 }
}
//screate snowflakes
const snowflakesCount = 300;
const colors = ['#fffaf0','#f2f3f4', '#ffffff', '#f8f8ff', '#fffaf0', '#c4d8e2']
var snowArray = []
//1. Create one snowflake with random values
function createNewSnowflake() {
  const radius = Math.random() * 20 + 1
  const x = Math.random() * (innerWidth - radius  * 2) + radius
  const y = Math.random() * (canvas.height - radius  * 2) + radius
  const dx = (Math.random() - 0.5) * 2
  const dy = (Math.random() - 0.5) * 2
  const fontSize = Math.floor(Math.random()*35 +1)
  const snowflake = new Snowflake(x, y, dx, dy, fontSize, false, false, false)
  snowArray.push(snowflake);
  snowflake.draw()
}

// create many snowflakes
  function initSnowflakes() {
    for (let i = 0; i < snowflakesCount; i++) {
        createNewSnowflake();  
    }
  }


var animationId;
function animate() {
  if(runAnimation) {
    if (animationId) {
      window.cancelAnimationFrame (animationId)
    }
   animationId= requestAnimationFrame(animate)
    //console.log(animatedId)
    c.clearRect(0,0,innerWidth, innerHeight);
    for (let i= 0; i < snowArray.length; i++) {
      snowArray[i].update();
    }
  }
}






setCanvas(canvas);

function startSnowfall() {
  runAnimation = true;
  createGround();
  initSnowflakes();
  animate();
}




function snowOnScroll() {
  let aboutSection = document.querySelector('.about__desktop');
  let aboutSectionPosition = aboutSection.getBoundingClientRect().top;
  let screenPosition = window.innerHeight;
 
  if(aboutSectionPosition < screenPosition-200 && startedSnowfall === false) {
    startSnowfall();
    startedSnowfall = true;
  }
}

window.addEventListener('scroll', function(e) {
  snowOnScroll();
})


window.addEventListener('resize', function() {
  runAnimation=false;
  snowArray=[]
  c.clearRect(0,0,innerWidth, innerHeight);
  resizeCanvas()
  floor.forEach(bucket => {
    bucket.yCoord = canvas.height;
     
  })
  startSnowfall();
})

let stop = document.querySelector('#stopSnow')
stop.addEventListener('click', function() {
  runAnimation = !runAnimation;
  if(runAnimation) {
    animationId= requestAnimationFrame(animate);
    //let it snow
    for (let i = 0; i < 12; i++) {
      console.log('creating new snowflake')
      const radius = Math.random() * 20 + 1
      const x = Math.random() * (innerWidth - radius  * 2) + radius
      const snowflake = new Snowflake(x, 1, 0.1, 2, 20, false, false, false)
      snowArray.push(snowflake);
      snowflake.draw()
   }
  }
})