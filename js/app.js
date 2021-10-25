const navSlide = () =>{
    const burger = document.querySelector('.burger')
    const nav = document.querySelector('.nav-links')

    const navLinks = document.querySelectorAll('.nav-links li')


    // Afficher le menu
    burger.addEventListener('click', ()=>{

        nav.classList.toggle('nav-active')

            // Animer les liens
        navLinks.forEach((link, index)=>{
            if(link.style.animation){
                link.style.animation = ``
                           
            }
            else{
                link.style.animation = `navLinkFadeIn 0.5s ease forwards ${index / 7 }s`
            }
        })
        //burger anim
        burger.classList.toggle('toggle')
    })
}
navSlide();

