<link rel="stylesheet" href="/css/styleDashboard.css">
<title>RapiCestas - Área do Usuário</title>

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="icon" href="/image/cesta.png" >
<x-app-layout>

<x-slot name="header" class="header-dashboard">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bem Vindo!') }} 
        </h2>
    </x-slot>


    <section class="features" id="features">

    <h1 class="heading"> Comece <span>Agora</span> </h1>

    <div class="box-container">

        <div class="box">
            
            <h3>Anunciar</h3>
            <p>Tem alimentos sobrando e está precisando de um dinheiro extra? comece agora a anunciar.</p>
            <a href="cadastro" class="btn">Anunciar</a>
        </div>

 
        <div class="box">
         
            <h3>Desejos</h3>
            <p> Se interessou por algum produto? Gerencie sua lista de desejos e veja seus melhores produtos.</p>
            <a href="desejos" class="btn">Desejos</a>
        </div>

    </div>

</section>

<section class="features" id="features">

<h1 class="heading"> Editar <span>Perfil</span> </h1>

<div class="box-container">



    <div class="box">
     
        <h3>Quer trocar alguma informação?</h3>
        <p>Você pode trocar seu nome de usuário/email, alterar sua senha, ativar a autenticação de dois fatores, gerenciar as sessões dos navegadores e até mesmo deletar sua conta.</p>
        <a href="/user/profile" class="btn">Controle de Perfil</a>
    </div>
    <div class="box">
     
     <h3>Anúncios</h3>
     <p>Você pode gerenciar todos anúncios feitos por você (Nessa parte você apenas pode gerenciar os anúncios de venda, e não os de doação).</p>
     <a href="gerenciar" class="btn">Controle de Perfil</a>
 </div>

</div>

</section>
  

</x-app-layout>
