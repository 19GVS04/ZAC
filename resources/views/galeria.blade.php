<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogo</title>
    <link rel="stylesheet" href="/css/galeria.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<style>
</style>
<body>
  
     <!--NAVBAR + IMAGEM E RESUMO DA ZAC -> Para Homepage/index -->
     <nav class="navbar">
      <div class="content">
        <div class="logo">
          <a href="/index">ZAC</a>
        </div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li><a href="/sobrenos">Sobre Nós</a></li>
          <li><a href="/servicos">Serviços</a></li>
          <li><a href="/galeria">Catálogo</a></li>
          <li><a href="/orcamentos">Orçamentos</a></li>
          <li><a href="/contactos">Contactos</a></li>
          @if(Auth::user())
                      <li>
                        <a href=""
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><span style="margin-right: 10px; margin-left:5px; color:rgb(255, 135, 37);" >{{ Auth::user()->name }}</span>{{('Logout')}}<i class="fas fa-sign-out-alt" style="margin-left: 5px;"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf                        
                        </form>
                      </li>
                    @else
                      <li><a href="{{ route('login') }}"><button class="btnnavbar">Login/Registo<i class="fas fa-sign-in-alt" style="margin-left: 5px;"></i></button></a></li>
                    @endif
          
        </ul>
        <div class="icon menu-btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>
    <div class="banner"></div>
    <div class="about">
      <div class="content">
        <div class="title" style="margin-top: 10px;">Conheça o Nosso Catálogo</div>
    </div>
  
    <script>
      const body = document.querySelector("body");
      const navbar = document.querySelector(".navbar");
      const menuBtn = document.querySelector(".menu-btn");
      const cancelBtn = document.querySelector(".cancel-btn");
      menuBtn.onclick = ()=>{
        navbar.classList.add("show");
        menuBtn.classList.add("hide");
        body.classList.add("disabled");
      }
      cancelBtn.onclick = ()=>{
        body.classList.remove("disabled");
        navbar.classList.remove("show");
        menuBtn.classList.remove("hide");
      }
      window.onscroll = ()=>{
        this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
      }
    </script>




 
  <!-- Galeria -->
    <div class="wrapper" style="font-family: Poppins;">
    <!-- Filtrar items -->
    <nav>
      <div class="items">
        <span class="item active" data-name="all" style="font-size:17px;">TODOS</span>
        <span class="item" data-name="Carpintaria-Geral">Carpintaria</span>
        <span class="item" data-name="Cozinhas">Cozinhas</span>
        <span class="item" data-name="Renovações">Renovações</span>
        <span class="item" data-name="Projetos">Projetos</span>
        <span class="item" data-name="Acabamentos">Acabamentos</span>
        <span class="item" data-name="Mobiliário">Mobiliário</span>
      </div>
    </nav>
    <!-- Filtro de Imagens -->
    <div class="gallery">
      <div class="image" data-name="Cozinhas"><span><img src="/img/cozinha-galeria.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria.jpg" alt=""></span></div>
      <div class="image" data-name="Projetos"><span><img src="/img/projeto-galeria.jpg" alt=""></span></div>
      <div class="image" data-name="Projetos"><span><img src="/img/projeto-galeria1.jpg" alt=""></span></div>
      <div class="image" data-name="Projetos"><span><img src="/img/projeto-galeria2.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria1.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria2.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria3.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria4.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria5.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria7.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria8.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria9.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria10.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria11.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/cama.jpg" alt=""></span></div>
      <div class="image" data-name="Cozinhas"><span><img src="/img/cozinha-galeria2.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria.jpg" alt=""></span></div>
      <div class="image" data-name="Projetos"><span><img src="/img/projetos-galeria3.jpg" alt=""></span></div>
      <div class="image" data-name="Carpintaria-Geral" ><span><img src="/img/carpintaria-galeria1.jpg" alt=""></span></div>
      <div class="image" data-name="Carpintaria-Geral" ><span><img src="/img/todos.jpg" alt=""></span></div>
      <div class="image" data-name="Carpintaria-Geral" ><span><img src="/img/carpintaria-galeria2.jpg" alt=""></span></div>
      <div class="image" data-name="Carpintaria-Geral" ><span><img src="/img/carpintaria-galeria3.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria2.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria3.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria4.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria5.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria6.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria7.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria8.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria9.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria1.jpg" alt=""></span></div>
      <div class="image" data-name="Renovações"><span><img src="/img/renovacoes-galeria10.jpg" alt=""></span></div>
      <div class="image" data-name="Acabamentos"><span><img src="/img/acabamentos-galeria.jpg" alt=""></span></div>
      <div class="image" data-name="Acabamentos"><span><img src="/img/acabamentos-galeria1.jpg" alt=""></span></div>
      <div class="image" data-name="Acabamentos"><span><img src="/img/acabamentos-galeria2.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria13.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria14.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria15.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria16.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria17.jpg" alt=""></span></div>
      <div class="image" data-name="Carpintaria-Geral" ><span><img src="/img/carpintaria-galeria4.jpg" alt=""></span></div>
      <div class="image" data-name="Carpintaria-Geral" ><span><img src="/img/carpintaria-galeria5.jpg" alt=""></span></div>
      <div class="image" data-name="Carpintaria-Geral" ><span><img src="/img/carpintaria-galeria6.jpg" alt=""></span></div>
      <div class="image" data-name="Carpintaria-Geral" ><span><img src="/img/carpintaria-galeria8.jpg" alt=""></span></div>
      <div class="image" data-name="Carpintaria-Geral" ><span><img src="/img/carpintaria-galeria9.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria18.jpg" alt=""></span></div>
      <div class="image" data-name="Mobiliário"><span><img src="/img/mobiliario-galeria19.jpg" alt=""></span></div>

    </div>
  </div>
  <!-- Ver imagem fullscreen -->
  <div class="preview-box">
    <div class="details">
      <span class="title"><p>Categoria: </p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div> 
 
  <script>
    const filterItem = document.querySelector(".items");
    const filterImg = document.querySelectorAll(".gallery .image");

    window.onload = () => { 
    filterItem.onclick = (selectedItem) => { 
        if (selectedItem.target.classList.contains("item")) { 
            filterItem.querySelector(".active").classList.remove("active"); 
            selectedItem.target.classList.add("active"); 
            let filterName = selectedItem.target.getAttribute("data-name"); 
            filterImg.forEach((image) => {
                let filterImges = image.getAttribute("data-name"); 
                if ((filterImges == filterName) || (filterName == "all")) {
                    image.classList.remove("hide"); 
                    image.classList.add("show"); //Ver classe da img
                } else {
                    image.classList.add("hide"); 
                    image.classList.remove("show"); 
                }
            });
        }
    }
    for (let i = 0; i < filterImg.length; i++) {
        filterImg[i].setAttribute("onclick", "preview(this)"); // onclick nas imagens
    }
}

const previewBox = document.querySelector(".preview-box"),
    categoryName = previewBox.querySelector(".title p"),
    previewImg = previewBox.querySelector("img"),
    closeIcon = previewBox.querySelector(".icon"),
    shadow = document.querySelector(".shadow");

    function preview(element) {
        document.querySelector("body").style.overflow = "hidden";
        let selectedPrevImg = element.querySelector("img").src; 
        let selectedImgCategory = element.getAttribute("data-name"); 
        previewImg.src = selectedPrevImg; 
        categoryName.textContent = selectedImgCategory; 
        previewBox.classList.add("show"); 
        shadow.classList.add("show"); 
        closeIcon.onclick = () => { 
        previewBox.classList.remove("show"); 
        shadow.classList.remove("show"); 
        document.querySelector("body").style.overflow = "auto"; 
    } 
}
</script>

















          <!--FOOTER-->
          <footer>
            <div class="footer-content">
                <h2>ZAC Carpintaria</h2>
                <p style="font-style: italic;">50 anos a construir o futuro juntos</p>
                <ul class="socials">
                    <li><a href="https://www.facebook.com/zac.carpintaria"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/zac_carpintaria"><i class="fab fa-instagram"></i></li>
                    <li><a href="https://www.google.com/maps/place/Aldeia+Nova,+S%C3%A1t%C3%A3o/data=!4m2!3m1!1s0xd3cb0f7dfa9158d:0xa00ebc04f814790?sa=X&ved=2ahUKEwimxcbm7OPwAhXyBGMBHSEhD_8Q8gEwAHoECAMQAQ"><i class="fas fa-map-marked-alt"></i></a></li>
                    <li><a href="mailto: zaccarpintaria@gmail.com"><i class="fab fa-google-plus"></i></a></li>
                    <li><a href="tel:+351933228743"><i class="fas fa-phone"></i></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>Copyright &copy;2021 ZAC Carpintaria. designed by <span>PDI</span></p>
            </div>
        </footer>


<!--botao-->
<div class="botao">
  
	<div class="fab-container">
		<div class="fab fab-icon-holder" style="width: 60px;
    height: 60px;
    background: rgb(255, 135, 37);">
      <i style="font-size:25px; " class="fas fa-thumbtack"></i>
		</div>

		<ul class="fab-options">
			<li>
				<span class="fab-label">Facebook</span>
				<div class="fab-icon-holder">
					<a href="https://www.facebook.com/zac.carpintaria" style="text-decoration:none;"><i class="fab fa-facebook"  style="color:rgb(255, 135, 37);"></i></a>
				</div>
			</li>
			<li>
				<span class="fab-label">Instagram</span>
				<div class="fab-icon-holder" >
          <a href="https://www.instagram.com/zac_carpintaria/" style="text-decoration:none;"><i class="fab fa-instagram" style="color:rgb(255, 135, 37);"></i></a>
				</div>
			</li>
			<li>
				<span class="fab-label">Chat (Brevemente)</span>
				<div class="fab-icon-holder">
					<a href="" style="text-decoration:none;"><i class="fas fa-comment"  style="color:rgb(255, 135, 37);"></i></a>
				</div>
			</li>
			<li >
				<span class="fab-label">ZAC</span>
				<div class="fab-icon-holder">
					<a href="/index" style="text-decoration:none;"><i class="fas fa-home"  style="color:rgb(255, 135, 37);"></i></a>
				</div>
			</li>
		</ul>
	</div>
</div>  



</body>


</html>