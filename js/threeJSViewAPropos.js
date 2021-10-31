// On setup les constante genre camera scene et render qui vont nous permettre d'animer la scene 
 
const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

const renderer = new THREE.WebGLRenderer({canvas: document.querySelector('#bg'), alpha: true});

renderer.setClearColor( 0x000000, 0 )

renderer.setPixelRatio(window.devicePixelRatio);
renderer.setSize( window.innerWidth, window.innerHeight );
camera.position.z = 50;
renderer.render( scene, camera );

// DEFINITIONS DES OBJETS

const size = 100;
const divisions = 10

const geometry1 = new THREE.PlaneGeometry( size, size, divisions, divisions);
const material1 = new THREE.MeshBasicMaterial({color: 0xFFFFFF, wireframe: true, side:THREE.DoubleSide})
const plan = new THREE.Mesh(geometry1, material1)

plan.position.setZ(-500)

scene.add(plan)




// On assigne la fonction onscroll du body a la fonction rotateObject
document.body.onscroll = animateOnScroll

var lastScrollTop = 0;
var scrollDirection = 0;

function scrollDirectionFunction(){ // or window.addEventListener("scroll"....
    var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
    if (st > lastScrollTop){
        scrollDirection = -1
    } else {
        scrollDirection = 1
    }
    lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
 }
  window.addEventListener('scroll', scrollDirectionFunction, false);

function animateOnScroll(){
    const t = document.body.getBoundingClientRect().top;
    console.log(t)
    var ableToScrollPlan = 0

    if(t >= -window.innerHeight/5){
        ableToScrollPlan = 1
        console.log(window.innerHeight/8)
    }
    plan.position.z += scrollDirection*-15*ableToScrollPlan

}

function animate(){
    
    // On demande d'appeller animate depuis animate
    requestAnimationFrame( animate );
    renderer.render( scene, camera );


  }


  // On appelle animate
  animate()