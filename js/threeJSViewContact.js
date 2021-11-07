// On setup les constante genre camera scene et render qui vont nous permettre d'animer la scene 

const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

const renderer = new THREE.WebGLRenderer({canvas: document.querySelector('#bg'), alpha: true});

const heightOfPage = document.body.clientHeight





function resize () {
    renderer.height = window.innerHeight;
    renderer.width = window.innerWidth;
    renderer.setSize(renderer.width, renderer.height);
    camera.aspect = renderer.width / renderer.height;
    camera.updateProjectionMatrix();
}





var objectList = []
var speedList = []
const nbObjets = window.innerWidth/20


for(var i = 0; i < nbObjets; i ++){
    g = new THREE.SphereGeometry(10);
    m = new THREE.MeshBasicMaterial({color: 0xFFFFFF, wireframe: true})
    o = new THREE.Mesh(g, m)


    randomPosition(o)
    o.position.z = randomInteger(0, -1000)
    o.scale.multiplyScalar(randomInteger(0.3, 2))
    objectList.push(o)

    speedList.push(randomInteger(1, 3))
    
    scene.add(o)

}

function randomInteger(min, max) {
    return Math.random() * (max - min) + min;
}

function randomPosition(o){
    o.position.z = -900
    o.position.x = randomInteger(-window.innerWidth/2 , window.innerWidth/2 )
    o.position.y = randomInteger(-window.innerHeight/2, window.innerHeight/2)

}

function moveForward(){
    for(var k = 0; k < nbObjets; k ++){
        if(objectList[k].position.z < 100){
            objectList[k].position.z += speedList[k]
            rotationFunc(objectList[k], speedList[k])
        }
        else{
            randomPosition(objectList[k])
        }
    }
}

function rotationFunc(o, speed){
    o.rotation.y += speed/500
    o.rotation.z += speed/500
}



function initThree(){
    // On setup le renderer pour que le background soit transparent
    renderer.setClearColor( 0x000000, 0 )

    //setup du reste du rederer
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize( window.innerWidth, window.innerHeight );
    camera.position.z = 50;
    renderer.render( scene, camera );
}


function init () {
    initThree()
    window.addEventListener('resize', resize, { passive: true
    })
    animate()
}

init()


function animate(){

    moveForward()
    // On demande d'appeller animate depuis animate
    requestAnimationFrame( animate );
    renderer.render( scene, camera );
}
// On appelle animate
window.scrollTo({ top: 0, behavior: 'smooth' })

animate()