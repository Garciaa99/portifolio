<!DOCTYPE html>
	<html lang="en">
		<head>
		  <meta charset="UTF-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		  <title>Portifólio</title>
		  <!-- ESTILOS DO PROJETO -->
		  <link rel="stylesheet" href="teste.css">
		  <!-- GOOGLE FONTS -->
		  <link rel="preconnect" href="https://fonts.gstatic.com">
		  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		</head>
		<body>
		<header>
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<div class="collapse navbar-collapse" id="navbarNav">
						<a href="#" id="logo">
							<img src="img/img.png" alt="" onclick="dark()">
						</a>
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">SOBRE</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">EXPERIÊNCIA</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">CURSOS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">PROJETOS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">CONTATOS</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>	
			<div class="container">
				<div class="conteudo-home">
					<div class="texto-conteudo">
						<h1>Lorem Ipsum</h1>
						<p>
							É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando 
							estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites 
							ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).
						</p>
						<div class="icones botao">
							<button>
								<a href="pdf/cv.pdf" download> Dowload CV </a>
							</button>
							<div class="icone-menu"> 
								<a href="#">
									<img src="img/git-novo.png">
								</a>
								<a href="#">	
									<img src="img/linkedin-novo.png">
								</a>
								<a href="#">
									<img src="img/whats-novo.png">
								</a>
							</div>
						</div>
					</div>
					<div class="img-Home">
						<img src="img/teste.png" id="img" onclick="imgTroca()">
					</div>
				</div>
			</div>
			
			<!-- seção experiencia -->
			<div class="accordion" id="accordionExample">
			  <div class="accordion-item">
				<h2 class="accordion-header">
				  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					Accordion Item #1
				  </button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
				  <div class="accordion-body">
					<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
				  </div>
				</div>
			  </div>
			  <div class="accordion-item">
				<h2 class="accordion-header">
				  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Accordion Item #2
				  </button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
				  <div class="accordion-body">
					<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
				  </div>
				</div>
			  </div>
			  <div class="accordion-item">
				<h2 class="accordion-header">
				  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					Accordion Item #3
				  </button>
				</h2>
				<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
				  <div class="accordion-body">
					<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
				  </div>
				</div>
			  </div>
			</div>
			
		<footer>
			 <p>Vinicius &copy; 2023</p>
		</footer>
		<script src="js/script.js"></script>
		</body>
	</html>