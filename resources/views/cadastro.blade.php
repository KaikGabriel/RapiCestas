<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="/css/styleCadastro.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <title>RapiCestas- Cadastrar Produto</title>

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="icon" href="/image/cesta.png" >
<body>
  
    <h1 class ="frsttxt" style= "text-align : center;"> Cadastro de alimentos <br> <a class = "home" href="/" style="text-decoration : none;color : #ff7800;"> Home </a></h1 >
    
    
  <div class="container">
    <div class="content">
      <form method ="post" action="{{route('bdcadastro')}}" enctype="multipart/form-data" >
        @csrf
        <div class="user-details">
          <div class="input-box" >
          <span class="details" for ="image">Imagem do produto</span>
          <input id="real-file" name ="image" type="file" placeholder="Enter your name" required hidden="hidden">
          <button type="button" id="custom-button">Escolher Imagem</button>
          <span id="custom-text">Nenhuma imagem escolhida.</span>
          </div>
          <div class="user-details">

<div class="input-box">

  <span class="details">Nome do Produto</span>

  <input  type="text" name="nome" placeholder="Digite o nome do produto" required>

</div>

<div class="input-box">

  <span class="details">Valor (em doações deixe vazio)</span>

  <input id="valor" type="text" name="valor" placeholder="R$ 0,00" >

</div>

<div class="input-box">

<span class="details">Estado</span>

<input  type="text" name="estado" placeholder="Digite seu Estado" required>

</div>

<div class="input-box">

<span class="details">Cidade</span>

<input  type="text" name="cidade" placeholder="Digite sua Cidade" required>

</div>



<div class="input-box">

<span class="details">Categoria</span>

    <div class="select" required >    

        <select name="categoria" id="cidade" required>

        <option selected disabled placeholder="Digite a forma de envio" value ="" required >Seleciona a Categoria</option>

        <option value="Cesta Básica" required>Cesta Básica</option>

        <option value="Perecíveis" required>Perecíveis</option>

        <option value="Não Perecíveis" required >Não Perecíveis</option>



        </select>

    </div>

    </div>
  <div class="input-box">

<span class="details"> Vender ou Doar</span>

    <div class="select"  required>    

        <select name="vendadoe" required >

        <option selected disabled placeholder="67s7w6575" value =""  required >Seleciona a Categoria</option>

        <option value="Venda" required>Venda</option>

        <option value="Doação" required>Doação 
          
        </option>
        
  
        </select>

    </div>

</div>



<div class="input-box">

<span class="details">Contato (E-Mail ou Telefone)</span>

<input type="text" name="contato"  placeholder="Digite seu e-mail ou telefone"  required>

</div>


<input type="text" name="apr" value= "0" required style = "display: none;">






</div>

        <div class="button">
          <input type="submit" value="Registrar" style="padding:10px;">
          
        </div>
       
     
        
      </form>
    </div>
  </div>
 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://plentz.github.io/jquery-maskmoney/javascripts/jquery.maskMoney.min.js" type="text/javascript"></script>
<script src="js/cidades.js" type="text/javascript"></script>


<script>
 const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});

</script>

  <script>
jQuery(function() {
    
    jQuery("#valor").maskMoney({
	prefix:'R$ ', 
	thousands:'.', 
	decimal:','
})

});
</script>

</body>
</html>
