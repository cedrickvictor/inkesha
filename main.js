let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
}

// let slides = document.querySelector('.home .slides-container .slide');
// let index = 0;

// function next(){
//     slides[index].classList.remove('active')
//     index = (index + 1) % slides.lenght;
//     slides[index].classList.add('active')
// }

// function prev(){
//     slides[index].classList.remove('active')
//     index = (index - 1 + slides.lenght) % slides.lenght;
//     slides[index].classList.add('active')
// }