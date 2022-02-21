ballList = []
ballNumber = 10
backgroundColor = 10
backgroundIncrease = 0
function setup() {
  createCanvas(windowWidth,windowHeight)

  for(var k = 0; k < ballNumber; k ++){
  ball = new Ball(width/2 + k *10, height/2 + k*30)
  ballList.push(ball)
  }
  frameRate(60)

}

function draw() {
  background(backgroundColor)
  for (var f = 0; f < ballList.length; f ++){
    ballList[f].move()
    if(ballList[f].hit == true){
      for (i = 0; i < ballList.length; i ++){
        ballList[i].switchDirection()
      }
    }
    ballList[f].show()



  }
  if(backgroundColor >= 255 || backgroundColor <= 0){
    backgroundIncrease *= -1
  }
  backgroundColor += backgroundIncrease



}
