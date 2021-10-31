class Dot {
  constructor() {
    this.x = random(width)
    this.y = random(height)
    this.speedList = [-4,-3,-2,-1,1,2,3,4]
    this.diameter = 10
    this.xSpeed = random(this.speedList)
    this.ySpeed = random(this.speedList)
    this.colorR = random(0,255)
    this.colorG = random(0,255)
    this.colorB = random(0,255)

  }

  show(){
    ellipse(this.x, this.y, this.diameter)
  }

  move(){
    if (this.x >= width || this.x <= 0){
      this.xSpeed *= -1
    }
    if (this.y >= height || this.y <= 0){
      this.ySpeed *= -1
    }
    this.x += this.xSpeed
    this.y += this.ySpeed
  }
  bridge(other){
    stroke(this.colorR, this.colorG, this.colorB)
    line(this.x, this.y, other.x, other.y)
  }
}
