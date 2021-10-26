
  const scene = new THREE.Scene();

  const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

  const renderer = new THREE.WebGLRenderer({canvas: document.querySelector('#bg'), alpha: true});


  renderer.setClearColor( 0x000000, 0 )
  renderer.setPixelRatio(window.devicePixelRatio);
  renderer.setSize( window.innerWidth, window.innerHeight );
  camera.position.z = 50;
  renderer.render( scene, camera );

  const geometry1 = new THREE.IcosahedronGeometry(10);
  const material1 = new THREE.MeshBasicMaterial({color: 0xFFFFFF, wireframe: true})
  const objet1 = new THREE.Mesh(geometry1, material1)

  objet1.position.x = -40;
  objet1.scale.multiplyScalar(1.2)

  scene.add(objet1)

  const geometry2 = new THREE.OctahedronGeometry( 10);
  const material2 = new THREE.MeshBasicMaterial({color: 0xFFFFFF, wireframe: true})
  const objet2 = new THREE.Mesh(geometry2, material2)

  objet2.position.x = 30;
  objet2.position.y = -40;
  objet2.scale.multiplyScalar(1.4)


  scene.add(objet2)


  const geometry3 = new THREE.SphereGeometry( 10, 1, 10);
  const material3 = new THREE.MeshBasicMaterial({color: 0xFFFFFF, wireframe: true})
  const objet3 = new THREE.Mesh(geometry3, material3)

  objet3.position.x = -40;
  objet3.position.y = -90;

  objet3.scale.multiplyScalar(1.2)

  scene.add(objet3)

  document.body.onscroll = rotateObject

  function rotateObject(){

    const t = document.body.getBoundingClientRect().top;

    objet1.rotation.x += t/1000*0.01;
    objet1.rotation.y += t/1000*0.01;

    objet2.rotation.x += t/1000*0.01;
    objet2.rotation.y += t/1000*0.01;

    objet3.rotation.x += t/1000*0.007;
    objet3.rotation.y += t/1000*0.007;

    camera.position.y = t * 0.07;

  }

  function animate(){
    requestAnimationFrame( animate );
    renderer.render( scene, camera );

    objet1.rotation.x += 0.006
    objet1.rotation.y += 0.005

    objet2.rotation.x += 0.006
    objet2.rotation.y += 0.005

    objet3.rotation.x += -0.003
    objet3.rotation.y += -0.004

  }
  animate()
