
// var url1 = "http://api.open-notify.org/iss-now.json"
var url1 = "https://api.wheretheiss.at/v1/satellites/25544"
var url2 = "https://api.open-notify.org/astros.json"
var espacement = 17
var issX, issY
var issData
var astroData = true
var numberOfPeopleInSpace = 10
var altitude
var speed


function preload(){
  issImage = loadImage('./imagesISS/satellite.png')
}


function setup() {
  // Html Images select
  backgroundImg = select('#backgroundImage')
  satelliteLogo = select('#satelliteLogo')
  astronautLogo = select('#astronautLogo')
  rulerLogo = select('#rulerLogo')
  speedLogo = select('#speedLogo')

  // Canvas creation
  canvas = createCanvas(backgroundImg.width,backgroundImg.height)

  // Api Load
  data = loadJSON(url1, getData)

  // Api live reload
  setInterval(newCoord, 2000)

  // Map set up
  backgroundImgPosition = backgroundImg.position()
  imgX = backgroundImgPosition.x
  imgY = backgroundImgPosition.y
  canvas.position(imgX, imgY)

  // Info paragraph set up
  infoP = select('#InfoH2')
  infoP.position(imgX + backgroundImg.width + espacement, imgY - espacement)

  // Satellite Logo and paragraph positioning
  satelliteLogo.position(imgX + backgroundImg.width + espacement, imgY + espacement*4.5)
  satelliteExplainP = select('#satelliteExplain')
  satelliteExplainP.position(imgX + backgroundImg.width + espacement + satelliteLogo.width + 5, imgY + espacement *4.1)

  // Astronaut Logo and paragraph positioning
  astronautLogo.position(imgX + backgroundImg.width + espacement, imgY +  + espacement * 11)
  astroNumberP = select('#numberOfAstro')
  astroNumberP.position(imgX + backgroundImg.width + espacement + astronautLogo.width + 5, imgY + espacement*10.5)

  // Ruler Logo and paragraph positioning

  rulerLogo.position(imgX + backgroundImg.width + espacement, imgY + espacement * 17)
  altitudeP = select('#issAltitude')
  altitudeP.position(imgX + backgroundImg.width + espacement + rulerLogo.width +5 , imgY + espacement*16.5)

  // Speed Logo and paragraph positioning

  speedLogo.position(imgX + backgroundImg.width + espacement, imgY + espacement * 24)
  speedP = select('#speedP')
  speedP.position(imgX + backgroundImg.width + espacement + speedLogo.width + 5, imgY + espacement * 23)

}

// Api Load
function getData(data){
  issData = data
  altitude = int(data.altitude)
  speed = int(data.velocity)

}


// Update of the map and paragraphs
function draw() {
  clear()
  background(80,80,80,50)
    if (issData){
      image(issImage,issX,issY,32,32)
    }
  if (astroData){
    astroNumberP.html(": There is actually " + numberOfPeopleInSpace + " peoples in the space !")
    altitudeP.html(": The ISS is actually " + str(altitude) + " km above the earth")
    speedP.html(": The ISS speed is actually around " + str(speed) + " km/h")
  }
}

// ISS coordonate update
function newCoord(){
  data = loadJSON(url1, getData)

  if (issData){
  issX = int((width/360)*(180+float(issData.longitude)))
  issY = int((height/180)*(90-float(issData.latitude)))
  }
}
