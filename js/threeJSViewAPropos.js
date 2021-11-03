
// On setup les constante genre camera scene et render qui vont nous permettre d'animer la scene 
 
const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

const renderer = new THREE.WebGLRenderer({canvas: document.querySelector('#bg'), alpha: true});

function resize () {
    renderer.height = window.innerHeight;
    renderer.width = window.innerWidth;
    renderer.setSize(renderer.width, renderer.height);
    camera.aspect = renderer.width / renderer.height;
    camera.updateProjectionMatrix();
}

function initThree(){
    renderer.setClearColor( 0x000000, 0 )
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize( window.innerWidth, window.innerHeight );
    renderer.render( scene, camera );
}

// FONCTION Random

function randomInteger(min, max) {
    return Math.random() * (max - min) + min;
  }
// DEFINITIONS DES OBJETS

const size = 10;
const divisions = size*5

var minHeight = -4
var maxHeight = 0


var geometry = new THREE.PlaneBufferGeometry(size, size*2, divisions, divisions)

/* Wireframe */
var material	= new THREE.MeshBasicMaterial({
    wireframe: true
});
var plan = new THREE.Mesh(geometry, material );

scene.add(plan);


const number = geometry.attributes.position.count

for(var i = 0; i < number; i +=1){
    var randomZ = randomInteger(minHeight, maxHeight)
    geometry.attributes.position.setZ(i, randomZ)
}
    


plan.lookAt(new THREE.Vector3(0,15,0));
/* Terrain */
plan.scale.y	= 2.5;
plan.scale.x	= 5;
plan.scale.z	= 0.30;
plan.scale.multiplyScalar(50);



// Pour smooth le scroll 
function lerp(x, y, a) {
    return (1 - a) * x + a * y
}

// Used to fit the lerps to start and end at specific scrolling percentages
function scalePercent(start, end) {
    return (scrollPercent - start) / (end - start)
}

// Pour les animations 



// Pour avoir le % de la page qui a été scroll

var scrollPercent = 0;
var scrollDirection = 1
var lastScrollTop = 0;
function scrollPercentFunction(){
    scrollPercent =
        ((document.documentElement.scrollTop || document.body.scrollTop) /
            ((document.documentElement.scrollHeight ||
                document.body.scrollHeight) -
                document.documentElement.clientHeight)) *
        100
    
    var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
    if (st > lastScrollTop){
        scrollDirection = -1
    } else {
        scrollDirection = 1
    }
    lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling}
}

//calculate the current scroll progress as a percentage
window.addEventListener('scroll', scrollPercentFunction, false);
        


var animationScriptsList = []


animationScriptsList.push({
    'start': 0,
    'end': 30,
    'func': function() {
        camera.position.set(0, 10, -500)
        camera.position.y = lerp(300, 0, scalePercent(0, 30))
        camera.rotation.x = lerp(-2, -0.3, scalePercent(0, 30))

    },
})

var increase = -1

animationScriptsList.push({
    'start': 0,
    'end': 100,
    'func': function() {

        console.log(scrollDirection)
        console.log(scrollPercent)

        
        if(plan.position.z == -size*150 || plan.position.z == size*50){
            scrollDirection *= -1
        }
        plan.position.z += scrollDirection

    },
})

animationScriptsList.push({
    'start': 0,
    'end': 100,
    'func': function() {
        camera.position.z = lerp(-1000, 0, scalePercent(0, 100))

    },
})





// On joue les animations qui sont sur le % de scroll de la page 
function playScrollAnimations() {
    animationScriptsList.forEach(function(a) {
        if (scrollPercent >= a.start && scrollPercent < a.end) {
            a.func()
        }
    })
}


function init () {
    initThree()
    window.addEventListener('resize', resize, { passive: true
    })
    animate()
}

init()
function animate(){

    // On demande d'appeller animate depuis animate
    playScrollAnimations()
    requestAnimationFrame( animate );
    renderer.render( scene, camera );
    geometry.attributes.position.needsUpdate = true
}
// On appelle animate
window.scrollTo({ top: 0, behavior: 'smooth' })
animate()