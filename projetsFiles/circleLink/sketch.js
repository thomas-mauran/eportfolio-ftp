circleList = []
let circleNumber = 20


function setup(){
    createCanvas(windowWidth,windowHeight)
    
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
