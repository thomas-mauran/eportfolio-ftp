class Ball {
  constructor() {
    this.x = random(width)
    this.y = random(height)
    this.diameter = random(6, 18)


    this.speedList = [-4, -3, -2, 2, 3, 4]
    this.xSpeed = random(this.speedList)
    this.ySpeed = random(this.speedList)

    this.history = []

    this.binary = false

    this.r = random(255)
    this.g = random(255)
    this.b = random(255)
  }
  show(){
    stroke(2)
    fill(this.r, this.g, this.b)

    for (var i = 0; i < this.history.length; i ++){
      this.pos = this.history[i]
      ellipse(this.pos.x, this.pos.y, i)
    }
    ellipse(this.x, this.y, this.diameter)


  }
  move(){
    if(this.x >= width || this.x <= 0){
      this.xSpeed *= -1
    }
    if(this.y >= height || this.y <= 0){
      this.ySpeed *= -1
    }

    this.x += this.xSpeed
    this.y += this.ySpeed

    this.binary = !this.binary

    if(this.binary == true){
    this.vector = createVector(this.x,this.y)
    this.history.push(this.vector)

    }
    if(this.history.length > this.diameter){
      this.history.splice(0,1)
      }


  }
}
