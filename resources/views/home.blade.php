<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RapiCestas - Aqui você pode vender, doar e até mesmo comprar alimentos</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="icon" href="/image/cesta.png" >
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"><img src="/image/logo1.png" alt="" style = "width : 100px;"></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">sobre</a>
        <a href="produtos">produtos</a>
     
      
     
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        @if(Auth::check())

        <a href="desejos"><div class="fas fa-heart" id="heart-btn"></div></a>
      @else
      @endif
        <div class="fas fa-user" id="login-btn">
            


        @if(Auth::check())
       
        <form action="" method="POST" class ="login-form">

            <h3>{{Auth::user()-> name}}</h3>
            <p>
            <a href="user/profile"> Gerenciar perfil</a>
            </p>
            <p>
            <a href="cadastro"> Cadastrar Produto</a>
            </p>

         

            <p>
            <a method="POST" href="gerenciar"> Gerenciar Produtos
            </a>
            </p>

           
        @if($user ['role_as'] === 1)
            <p>
            <a href="Aprovar-produtos"> Administração</a>
            </p>


        @else
        @endif

        <p>
            <a  href="dashboard"> Área do usuário </a>
        </p>

        
        <p>
            <a  href="/logout"> Sair </a>
            </p>

        </form>
        


        @else

        <form action="" class ="login-form">
        <p>
            Ainda não tem uma Conta?
            <a href="register"> Criar</a>
            </p>
            <p>
            Já tem uma Conta?
            <a href="login">Login</a>
            </p>

        </form>

@endif
        </div>
        
    </div>


        <form  class="search-form" action="{{url('search')}}" method="GET" role="search">
        <input type="search" id="search-box" name="search" placeholder="Pesquise aqui...">
    
        
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">




    <div class="content">
    <h3>Compre, Venda ou Doe<br> <span>Cestas Básicas</span> e<span> Alimentos</span></h3>

<p>Tem uma cesta básica ou algum alimento sobrando em casa? Aqui você pode vender, doar e até mesmo comprar alimentos.</p>

<a href="#features" class="btn">Explorar</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> Como <span>Funciona</span> </h1>

    <div class="box-container">

    <div class="box">

<img src="image/announcement.png" alt="">

<h3>Anuncie!</h3>

<p>Tem alimentos sobrando? Você pode anunciar seus alimentos em nosso site! </p>

<a href="register" class="btn">Saiba Mais</a>

</div>



<div class="box">

<img src="image/buy.png" alt="">

<h3>Compre!</h3>

<p>Além de anunciar, você também pode comprar cestas básicas e alimentos anunciados.</p>

<a href="register" class="btn">Saiba Mais</a>

</div>



<div class="box">

<img src="image/food.png" alt="">

<h3>Doe!</h3>

<p>Quer ajudar alguém? Nós também temos a opção de doação!</p>

<a href="register" class="btn">Saiba Mais</a>

</div>

</div>

    </div>

</section>

<!-- features section ends -->
<style>





.products .product-slider .box{

    min-height:620px;
}
</style>
<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> Nossos <span>Produtos</span> </h1>
 

    <div class="swiper product-slider">

        <div class="swiper-wrapper">


        @foreach($produtos ->where ('apr', 1) as $produto)
            <div class="swiper-slide box">
                <img src="/image/produtos/{{$produto ->image}}" alt="">
                <h3>{{ $produto -> nome}}</h3>

                <div class="price"> {{ $produto -> valor}} </div>

                <div class="price"> {{ $produto->estado}} <a>-</a> {{ $produto-> cidade}}</div>

              

                <div class="price"> <a>Categoria - </a>{{ $produto->categoria}} </div>

                <div class="price"> <a>Contato - </a>{{ $produto->contato}} </div>

                <div class="price"> <a>  </a>{{ $produto->vendadoe}} </div>

                <div><a href="{{url ('add/to-wishlist' , $produto -> id)}}"  class="btn">Favoritar</a></div>
                <div><a href="produtos"  class="btn">Ver Mais</a></div>
                
            </div>
@endforeach
      
           

        </div>

<h1>

</h1>

    </div>

    
  

    </div>

</section>

<!-- products section ends -->

<!-- categories section starts  -->



<!-- categories section ends -->

<!-- review section starts  -->



<!-- review section ends -->

<!-- blogs section starts  -->



<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
        <a href="#" class="logo"><img src="/image/logo1.png" alt="" style = "width : 100px;"></a>
            <p>Tem Uma Cesta Básica Ou Algum Alimento Sobrando Em Casa? Aqui Você Pode Vender, Doar E Até Mesmo Comprar Alimentos.</p>
            <div class="share">
                <a href="https://www.instagram.com/rapicestas/" target="_blank" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contato</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +55 11 982493127 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +55 11 954496921     </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> rapicestas@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> São Bernardo do Campo, SP - 09750-000 </a>
        </div>

        <div class="box">
            <h3>Links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#features" class="links"> <i class="fas fa-arrow-right"></i> sobre </a>
            <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> produtos </a>
 
           
        </div>
        <div class="box">

       </div>
       
    </div>

 
</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>