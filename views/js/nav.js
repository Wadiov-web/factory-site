const navSlide = () => {
    const btn = document.querySelector('.menubtn')
    const menu = document.querySelector('.list')
    const links = document.querySelectorAll('.list li')
    btn.addEventListener('click', () => {
        menu.classList.toggle('nav-active')

        links.forEach((link, index) => {
            if(link.style.animation){
                link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 4}s`
            }
        });
        btn.classList.toggle('toggle')
    })
}
navSlide()