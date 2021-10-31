dotList = []
dotNumber = 3


function setup() {
  createCanvas(windowWidth,windowHeight)

  for (i = 0; i < dotNumber; i ++){
  dot = new Dot()
  dotList.push(dot)
  }
}

function draw() {

  for (i = 0; i < dotList.length; i ++){
    dotList[i].move()

    for (dots of dotList){
      dots.bridge(dotList[i])
    }



  }


}
