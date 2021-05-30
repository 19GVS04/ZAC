<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serviços</title>
    <link rel="stylesheet" href="/css/servicos.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
            <!--NAVBAR + IMAGEM -> Para serv -->
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
                  <div class="title" style="margin-top: 10px;">Como Trabalhamos?</div>
                  <p><a href="#servicos"><button class="btnscroll"> -Serviços</button></a></p>
                  <p>Oferecemos serviços em madeira de carpintaria geral, cozinhas, projetos personalizados, renovações, acabamentos e mobiliário.
                    Embaixo, demonstramos alguns dos nossos serviços.</p>                                       
                  <p><a href="#materiais"><button class="btnscroll"> -Materiais</button></a></p>
                  <!--<p><a href="#serv"><button class="btnscroll">Acabamentos</button></a></p>-->
                  <p>Trabalhos com todo o tipo de madeiras, mais especificamente com Carvalho, Pinho, Castanho, Choupo, Eucalipto e Contraplacado.<p>
                     Para trabalhos específicos pode solicitar outro tripo de madeira.
                     </p>                     
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




<div id="servicos" class="content">
  <div class="title" style="margin-top: 60px;">Serviços</div>
</div>
   

          <!--Serviços--> 

       <!--Imagem slider, Card's-->
       <section style="display: flex; align-items: center; margin-top: 10px; margin-bottom:20px;">
        <div class="wrapper">
          <div class="carousel owl-carousel">
             <div class="card-h card-1">
                G
             </div>
             <div class="card-h card-2">
                G
             </div>
             <div class="card-h card-3">
                C
             </div>
             <div class="card-h card-4">
                D
             </div>
             <div class="card-h card-5">
                E
             </div>
             <div class="card-h card-6">
              F
           </div>
           <div class="card-h card-7">
            G
         </div>
          </div>
       </div>
       <script>
        $(".carousel").owlCarousel({
          margin: 20,
          loop: true,
          autoplay: true,
          autoplayTimeout: 2000,
          autoplayHoverPause: true,
          responsive: {
            0:{
              items:1,
              nav: false
            },
            600:{
              items:2,
              nav: false
            },
            1000:{
              items:3,
              nav: false
            }
          }
        });
      </script>
      </section>











        <!--Materiais-->
<div id="materiais" class="content">
  <div class="title" style="margin-top: 10px;">Materiais</div>
</div>






















<!--materiais-->
<section style="height: 100%;
display: grid;
place-items: center;
text-align: center; margin-top:25px;">

<div class="container">
  <div class="card">
     <div class="img">
        <img src="/img/Carvalho.jpg">
     </div>
     <div class="top-text">
        <div class="name">
           <h3>Carvalho</h3>
        </div>
     </div>
     <div class="bottom-text">
        <div class="text">
        A madeira de carvalho é pesada e dura, com anéis muito visíveis na sua superfície. No que respeita à cor, o seu alburno deve ser amarelo, ao passo que a madeira do cerne deve ter um espetro de cor notável, com tons escuros.
        </div>
        
     </div>
  </div>
  <div class="card">
     <div class="img">
        <img src="/img/Pinho.jpg">
     </div>
     <div class="top-text">
        <div class="name">
           <h3>Pinho</h3>
        </div>
     </div>
     <div class="bottom-text">
        <div class="text">
        É uma madeira de cor branco e amarelado, o veio é recto e apresenta uma textura de média a grosseira a densidade é média, moderadamente dura, quanto á durabilidade é pouco durável, sensível ao ataque dos fungos e insectos xilófagos.
        </div>
        
     </div>
  </div>
  <div class="container">
  <div class="card">
     <div class="img">
        <img src="/img/Castanho.jpg">
     </div>
     <div class="top-text">
        <div class="name">
           <h3>Castanho</h3>
        </div>
     </div>
     <div class="bottom-text">
        <div class="text">
        O Castanho é por vezes descrito como o carvalho do homem pobre, porque é forte e durável. Contudo, não é fácil de usar.
        </div>
     </div>
   </div>
 </div>      
</div>
<div class="container" style="margin-top:25px;">
  <div class="card">
     <div class="img">
        <img src="/img/Contraplacado.jpg">
     </div>
     <div class="top-text">
        <div class="name">
           <h3>Contraplacado</h3> 
        </div>
     </div>
     <div class="bottom-text">
        <div class="text">
        A madeira de carvalho é pesada e dura, com anéis muito visíveis na sua superfície. No que respeita à cor, o seu alburno deve ser amarelo, ao passo que a madeira do cerne deve ter um espetro de cor notável, com tons escuros.  
       </div>
     </div>
  </div>
  <div class="card">
     <div class="img">
        <img src="/img/Eucalipto.jpg">
     </div>
     <div class="top-text">
        <div class="name">
           <h3>Eucalipto</h3>
        </div>
     </div>
     <div class="bottom-text">
        <div class="text">
        É uma madeira de cor branco e amarelado, o veio é recto e apresenta uma textura de média a grosseira a densidade é média, moderadamente dura, quanto á durabilidade é pouco durável, sensível ao ataque dos fungos e insectos xilófagos.
        </div>
     </div>
   </div>  
  <div class="container">
  <div class="card">
     <div class="img">
        <img src="/img/Choupo.jpg">
     </div>
     <div class="top-text">
        <div class="name">
           <h3>Choupo</h3>
        </div>
     </div>
     <div class="bottom-text">
        <div class="text">
        A madeira de carvalho é pesada e dura, com anéis muito visíveis na sua superfície. No que respeita à cor, o seu alburno deve ser amarelo, ao passo que a madeira do cerne deve ter um espetro de cor notável, com tons escuros.
        </div>
     </div>
   </div>
 </div>      
</div>
</section>

































          <!--FOOTER-->
<footer style="margin-top: 50px;">
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
			<li>
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