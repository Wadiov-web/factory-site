
const testimonyDiv = document.querySelector('.testiDiv')
const testimonies = document.querySelectorAll('.testiDiv div')
const testimonyWidth = testimonies[0].getBoundingClientRect().width;

const btnr = document.querySelector('.btnr')
const btnl = document.querySelector('.btnl')

testimonies.forEach((testimony, index) => {
    testimony.style.left = 100 * index + '%';
})

let y = 0;
btnr.addEventListener('click', () => {
    if(y < testimonies.length - 1) y++
    testimonyDiv.style.transform = 'translateX(-' + testimonyWidth*y + 'px)';
    testimonyDiv.style.transition = 'transform 0.5s ease-in-out';
    if(y !== 0) btnl.style.color = 'white';
    if(y == testimonies.length - 1) btnr.style.color = '#656565';
})

btnl.addEventListener('click', () => {
    y--;
    testimonyDiv.style.transform = 'translateX(-' + testimonyWidth*y + 'px)';
    testimonyDiv.style.transition = 'transform 0.5s ease-in-out';
    if(y <= 0){
        y = 0;
        btnl.style.color = '#656565';
    }
    if(y < testimonies.length - 1) btnr.style.color = 'white';
})
if(y == 0) btnl.style.color = '#656565';