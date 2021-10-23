class Circle{
    constructor(x, y){
      this.speed = random(-2, 2)
      this.diameter = 10
      // this.diameter = 0
      if(x){
        this.x = x
        this.speedX = 0
      }
      else{
        this.x = random(this.diameter, width- this.diameter)
        this.speedX = this.speed


      }
      if(y){
        this.y = y
        this.speedY = 0
      }
      else{
        this.y = random(this.diameter, height-this.diameter)
        this.speedY = this.speed

      }

  
      this.rayon = this.diameter/2
  
  
      this.c = 255
  
      this.c1 = 255
      this.c2 = 255
      this.c3 = 255
  
      this.weight = random(1, 3)
    }

    



    show(){
      stroke(this.c)
      strokeWeight(1)
      fill(30, 30, 30, 0)
      rectMode(CENTER)
      rect(this.x, this.y, this.diameter, this.diameter)
    }

    move(){
      if (this.x > width -this.rayon || this.x < 0 + this.rayon){
        this.speedX *= -1
        this.x += this.speedX
    }else if (this.y > height - this.rayon|| this.y < 0 + this.rayon){
      this.speedY *= -1
      this.y += this.speedY
  
    }else {
      this.x += this.speedX
      this.y += this.speedY
      }
    }
    
    link(circle2X, circle2Y){
      this.distance = dist(this.x, this.y, circle2X, circle2Y)
      if (this.distance < 200){
        return true
      }else {
        return false
      }
    }
  
    alpha(circle2X, circle2Y){
      this.distance = dist(this.x, this.y, circle2X, circle2Y)
      this.a = map(this.distance, 0, 200, 255, 0)
      stroke(this.c, this.a)
      // stroke(255,255,255,this.a)
      strokeWeight(this.weight)
      line(this.x,this.y,circle2X,circle2Y)
    }
  
  }
  