function startSnowfall() {
  const canvas = document.querySelector('canvas');
  canvas.width = window.innerWidth;
  if(window.innerWidth>=768 && window.innerWidth < 1200) {
    canvas.height = window.innerHeight/1.16;
    //console.log('changed canvas height to', canvas.height 
  }
  else {
    canvas.height = window.innerHeight/1.8;
  }
  
  const c = canvas.getContext('2d');

  const snowflakesCount = 300;
  let floor = [];
  for (let i=0;i<198; i++) {
    floor[i] = {xCoord:i*10+10, yCoord: canvas.height}
  }
  
 
  const debounce = (func) => {
    let timer
    return (event) => {
      if (timer) { clearTimeout(timer) }
      timer = setTimeout(func, 100, event)
    }
  }

  // window.addEventListener('resize', debounce(() => {
  //   canvas.width = window.innerWidth
  //   canvas.height = window.innerHeight / 1.8 
  // }))
  const colors = ['#fffaf0','#f2f3f4', '#ffffff', '#f8f8ff', '#fffaf0', '#c4d8e2']
  var snowArray = []

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

  const init = () => {
  for (let i = 0; i < snowflakesCount; i++) {
      createNewSnowflake();  
    }
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

init()
let runAnimation = true;
function animate() {
  if(runAnimation) {
    requestAnimationFrame(animate)
    c.clearRect(0,0,innerWidth, innerHeight);
    for (let i= 0; i < snowArray.length; i++) {
      snowArray[i].update();
    }
  }
 
}

window.addEventListener('resize', function(){
  canvas.width = window.innerWidth;
  const width = window.innerWidth
  if(width>=768 && width < 1200) {
      canvas.height = window.innerHeight/1.11;
      console.log('changed canvas height to', canvas.height )
  }
  runAnimation = !runAnimation;
  startSnowfall();
}
)
 let animationId = requestAnimationFrame(animate);
 console.log('AnimationId ', animationId)

    let stop = document.querySelector('#stopSnow')
    stop.addEventListener('click', function(animationId){
      runAnimation = !runAnimation;
      //window.cancelAnimationFrame(animationId);
      console.log(runAnimation)
    })
}

startSnowfall();

