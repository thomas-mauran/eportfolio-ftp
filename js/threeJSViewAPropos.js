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
    camera.position.z = 50;
    renderer.render( scene, camera );
}


// DEFINITIONS DES OBJETS

const size = 100;
const divisions = 10

const geometry1 = new THREE.PlaneGeometry(size, size, divisions, divisions);
const material1 = new THREE.MeshBasicMaterial( {color: 0xFFFFFF, wireframe: true, side: THREE.DoubleSide} );
const plan = new THREE.Mesh(geometry1, material1)

plan.position.set(0, 0.5, -10)

scene.add(plan)






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

function scrollPercentFunction(){
    scrollPercent =
        ((document.documentElement.scrollTop || document.body.scrollTop) /
            ((document.documentElement.scrollHeight ||
                document.body.scrollHeight) -
                document.documentElement.clientHeight)) *
        100

}


//calculate the current scroll progress as a percentage
window.addEventListener('scroll', scrollPercentFunction, false);
        


var animationScriptsList = []


animationScriptsList.push({
    'start': 20,
    'end': 40,
    'func': function() {
        camera.position.z = lerp(-10, 0, scalePercent(20, 40))
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


}
// On appelle animate
window.scrollTo({ top: 0, behavior: 'smooth' })
animate()