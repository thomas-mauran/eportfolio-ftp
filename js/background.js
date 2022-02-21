circleList = []
let circleNumber = window.innerWidth / 50


function setup(){
    canvas = createCanvas(window.innerWidth,window.innerHeight)
    canvas.position(0,0)
    canvas.style('z-index', '-1')
    for (i = 0; i < circleNumber; i ++){
      circle = new Circle()
      circleList.push(circle)
    }
    frameRate(60)
    background(0)

}

function draw() {
  background('#020E16')

  for (i = 0; i < circleList.length; i ++){
    circleList[i].show()
    circleList[i].move()

    for (c of circleList){
      if (circleList[i] != c && circleList[i].link(c.x, c.y)){
        circleList[i].alpha(c.x, c.y)
        circleList[i].alpha(mouseX, mouseY)

      }
    }

  }
}

function windowResized(){
    resizeCanvas(window.innerWidth,window.innerHeight)
}
