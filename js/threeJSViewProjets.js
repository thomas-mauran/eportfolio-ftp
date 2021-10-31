// On setup les constante genre camera scene et render qui vont nous permettre d'animer la scene 
 
 const scene = new THREE.Scene();

  const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

  const renderer = new THREE.WebGLRenderer({canvas: document.querySelector('#bg'), alpha: true});


// On setup le renderer pour que le background soit transparent
  renderer.setClearColor( 0x000000, 0 )

  //setup du reste du rederer
  renderer.setPixelRatio(window.devicePixelRatio);
  renderer.setSize( window.innerWidth, window.innerHeight );
  camera.position.z = 50;
  renderer.render( scene, camera );

// On créer un premier objet en lui creant une géometrie et un material et en additionnant les deux avec THREE.Mesh
  const geometry1 = new THREE.IcosahedronGeometry(10);
  const material1 = new THREE.MeshBasicMaterial({color: 0xFFFFFF, wireframe: true})
  const objet1 = new THREE.Mesh(geometry1, material1)

  // Place l'objet 
  objet1.position.x = -40;
  objet1.scale.multiplyScalar(1.2)

  // On ajoute l'objet a la scène 
  scene.add(objet1)


  // Creation du deuxième objet
  const geometry2 = new THREE.OctahedronGeometry( 10);
  const material2 = new THREE.MeshBasicMaterial({color: 0xFFFFFF, wireframe: true})
  const objet2 = new THREE.Mesh(geometry2, material2)

  // On le place dans la scène
  objet2.position.x = 30;
  objet2.position.y = -40;
  objet2.scale.multiplyScalar(1.4)


  // On l'ajoute a la scène
  scene.add(objet2)


  // Creation du 3 eme objet 
  const geometry3 = new THREE.SphereGeometry( 10, 1, 10);
  const material3 = new THREE.MeshBasicMaterial({color: 0xFFFFFF, wireframe: true})
  const objet3 = new THREE.Mesh(geometry3, material3)

  // On le place
  objet3.position.x = -40;
  objet3.position.y = -90;
  objet3.scale.multiplyScalar(1.3)

  // On lajoute 
  scene.add(objet3)

  // On assigne la fonction onscroll du body a la fonction rotateObject
  document.body.onscroll = rotateObject

  // fonction pour savoir si on scroll down ou up 
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


  // Fonction qui va s'activer a chaque fois qu'on scroll
  function rotateObject(){

    const t = document.body.getBoundingClientRect().top;

    // On fait bouger les objets
    objet1.rotation.x += t/1000*0.05*scrollDirection;

    objet1.scale.x += 0,2*scrollDirection
    objet1.scale.y += 0,2*scrollDirection
    objet1.scale.z += 0,2*scrollDirection

    objet1.position.x += scrollDirection/10
    objet1.position.y += scrollDirection/10



    objet2.rotation.x += t/1000*0.05*scrollDirection;


    objet2.scale.x += 0,2*scrollDirection
    objet2.scale.y += 0,2*scrollDirection
    objet2.scale.z += 0,2*scrollDirection

    objet2.position.x += -scrollDirection/7
    objet2.position.y += -scrollDirection/8


    objet3.rotation.x += t/1000*0.02*scrollDirection;
    objet3.position.x += scrollDirection/14
    objet3.position.y += scrollDirection/13

    objet3.scale.x += 0,2*scrollDirection
    objet3.scale.y += 0,2*scrollDirection
    objet3.scale.z += 0,2*scrollDirection

    camera.position.y = t * 0.07;

  }

  // La fonction animte (reccursive) qui s'appelle elle même pour bouger les objets constament 
  function animate(){
    
    // On demande d'appeller animate depuis animate
    requestAnimationFrame( animate );
    renderer.render( scene, camera );


    objet1.rotation.y += 0.006

    objet2.rotation.y += 0.006

    objet3.rotation.y += -0.003

    resize()
  }


  // On appelle animate
  animate()



 // jquery afficher les projets on scroll
 $(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".projetLine").each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      
      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        if ($(this).css("opacity")==0) {$(this).fadeTo(250,1);}
      } else { //object goes out of view (scrolling up)
        if ($(this).css("opacity")==1) {$(this).fadeTo(250,0);}
      }
    });
  }).scroll(); //invoke scroll-handler on page-load
});
function resize () {
    renderer.width = container.clientWidth;
    renderer.height = container.clientHeight;
    renderer.setSize(renderer.width, renderer.height);
    camera.aspect = renderer.width / renderer.height;
    camera.updateProjectionMatrix();
  }

