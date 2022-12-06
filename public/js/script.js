let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}



let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".product-slider", {
    loop:false,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: false,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

var swiper = new Swiper(".review-slider", {
    loop:false,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

const urlEstados = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados'

const cidade = document.getElementById("cidade")



const estado = document.getElementById("estado")



estado.addEventListener('change', async function(){

    const urlCidades = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+estado.value+'/municipios'

    const request = await fetch(urlCidades)

    const response = await request.json()

    let options = ''

    response.forEach(function(cidades){

        options += '<option>'+cidades.nome+'</option>'

    })



    cidade.innerHTML = options

})



window.addEventListener('load', async()=>{

    const request = await fetch(urlEstados)

    const response = await request.json()

   

    const options = document.createElement("optgroup")

    options.setAttribute('label','Estados')



    response.forEach(function(estado){

        options.innerHTML += '<option>'+estado.sigla+'</option>'

    })



    estado.append(options)

})