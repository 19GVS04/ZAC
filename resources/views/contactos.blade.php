<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/contactos.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <title>Contactos</title>
</head>
<body>
  <!--NAVBAR + IMAGEM E RESUMO DA ZAC -> Para Homepage/index -->
  <nav class="navbar">
    <div class="content">
      <div class="logo" >
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
      <div class="title" style="margin-top: 10px;">Contactos</div>
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
    
  
    
    
  
  
  
  
  
  
  
  
  
  <div >
    <div class="contact-in">
      
      <div class="contact-form">
          <div class='contact-info'>
              <div class="box">
                  
                  <div class="text" style="margin-bottom: 25px;">
                      <h2>Morada</h2>
                      <h4>Aldeia Nova, Ferreira de Aves <br> Viseu</h4>
                  </div>
                  
                  <div class="text" style="margin-bottom: 25px;">
                      <h2>Telefone</h2>
                      <h4>933228743, 935265469</h4>
                  </div>
                  
                  <div class="text">
                      <h2>Email</h2>
                      <h4>zaccarpintaria@gmail.com</h4>
                  </div>
              </div>

          </div>
                  </div>
                  <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24152.342756959126!2d-7.6593508906471754!3d40.827022576434224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3cb0f7dfa9158d%3A0xa00ebc04f814790!2zQWxkZWlhIE5vdmEsIFPDoXTDo28!5e0!3m2!1spt-PT!2spt!4v1622110976673!5m2!1spt-PT!2spt" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen= "" aria-hidden="false" tabindex="0"></iframe>
                </div>
  </div>
  </div>  
  
  
  
  
  
  
  
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
  
  







  
  
  
  
  
  
  
  
  
  
  
    <section style="margin-top: 60px; margin-bottom:60px;">
       <div class="container">    
		<div class="contact-box">
			<div class="left"></div>
		
      <div class="right">
        <form method="post" action="{{route('contactos.store')}}">
          @csrf	
				<h2 class="c">Contacto Direto</h2>
				<select class="field" aria-label="Default select example" >
          <option selected>Escolha o assunto</option>
          <option value="1">Informação</option>
          <option value="2">Mobiliário</option>
          <option value="3">Orçamento</option>
          <option value="3">Outro</option>
        </select>
        
        <div>
          <input type="text" id="nome" name="nome" class="field" placeholder="Nome.." required>
        </div>
          <input type="text" name="email" class="field" placeholder="Email.." required>
				<input type="text" maxlength="9" name="telefone" class="field" placeholder="Telefone.." required>
				<textarea name="mensagem" placeholder="Introduza a sua mensagem.." class="field" required></textarea>
				<button type="submit" class="btn">Enviar</button>
        </form>
      </div>
    
		</div>
	</div> 
    </section> 
    











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

   
   
   
   
   
   
</body>
</html>