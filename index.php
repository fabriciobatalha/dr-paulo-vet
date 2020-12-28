<?php 
	include_once("_routine/get-instagram-photo.php");
	$accessToken = "IGQVJVQ3hxVk9NVjRYSlZA2MXRSc1pqN1dyYkZAqaV9ZAeS1TenA0R2REZA3hLTmVodm5LdW9NdE53dG91aEgxOV9xbERiVEhEZA0l4enhrNmp1Wk0xUmpjeUV4bmpORU1yTDNjM3lOaDdn";
	$result = fetchData("https://graph.instagram.com/me/media?fields=media_url&access_token=$accessToken");
    $result = json_decode($result);
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>	
		<meta charset="utf-8">
		<meta name="author" content="FaroSys" />
		<title> Dr. Paulo Vet. - Clínica Veterinária e Pet Shop em Manaus </title>
		<link rel="shortcut icon" href="_img/favicon.ico" type="image/x-icon" />
		<link rel="icon" href="_img/favicon.ico" type="image/x-icon" />
		<meta name="keywords" content="drpaulovet, dr.paulovet., dr paulo vet, dr. paulo vet.,  dr.paulovet, clinica veterinaria, pet shop, petshop, clinica veterinaria e pet shop, clinica veterinaria e petshop, disk entrega, disk racao" />
		<meta name="description" content="Dr. Paulo Vet. é uma Clínica Veterinária e Pet Shop localizada em Manaus. Vacinas, exames, cirurgias, medicamentos, rações, disk entrega e muito mais. Entre e confira!" />

		<link rel="canonical" href="https://www.drpaulovet.com" />
		<link rel="alternate" href="https://www.drpaulovet.com" hreflang="pt-br" />
		<meta name="google-site-verification" content="yrpKa3NRvmxcqCL4OiYQLIR4DT9rILEmwNailHcWm60" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="format-detection" content="telephone=no">
		<meta name="robots" content="index, follow" />

		<meta property="og:locale" content="pt_br" />
		<meta property="og:locale:alternate" content="pt_br" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="https://www.drpaulovet.com/_img/preview.jpg" />
		<meta property="og:url" content="https://www.drpaulovet.com" />
		<meta property="og:title" content="Dr. Paulo Vet." />
		<meta property="og:description" content="Clínica Veterinária e Pet Shop em Manaus. Entre e confira!" />
		
		<meta name="theme-color" content="#FF0000" />
        <meta name="msapplication-navbutton-color" content="#FF0000" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<link rel="preload" as="font" crossorigin="crossorigin" type="font/ttf" href="_font/Exo2-Regular.ttf" />
		<link rel="preload" as="font" crossorigin="crossorigin" type="font/ttf" href="_font/Sniglet-Regular.ttf" />

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
		<!-- <link rel="stylesheet" type="text/css" href="_css/_fw/bootstrap.min.css" /> -->
		<link rel="stylesheet" type="text/css" href="_css/master.css" />
	</head>

	<body data-spy="scroll" data-offset="120">
		<!-- Plugin Messenger -->
        <div id="fb-root"></div>

        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v3.3'
                });
            };
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/pt_BR/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

        <div class="fb-customerchat"
            attribution=setup_tool
            page_id="367639233887637"
            logged_in_greeting="Olá! Como podemos ajudar você?"
            logged_out_greeting="Olá! Como podemos ajudar você?">
        </div>

		<!-- Modal Marcar Consulta -->
		<!--
		<div class="modal fade" id="modal-one" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  			<div class="modal-dialog modal-dialog-centered" role="document">
    			<div class="modal-content">
      				<div class="modal-header">
        				<h5 class="modal-title" id="exampleModalCenterTitle"> Atendimento ao Cliente </h5>
      				</div>

         			<form method="post" action="_routine/send-email.php">
      					<div class="modal-body">
          					<div class="form-group">
            					<label for="email" class="col-form-label"> Seu e-mail </label>
            					<input type="email" class="form-control" id="email" name="email" required>
          					</div>

          					<div class="form-group">
            					<label for="name" class="col-form-label"> Seu nome </label>
            					<input type="text" class="form-control" id="name" name="name" required>
          					</div>

          					<div class="form-group">
            					<label for="whatsapp-phone" class="col-form-label"> Seu WhatsApp ou telefone </label>
            					<input type="text" class="form-control whatsapp-phone" id="whatsapp-phone" name="whatsapp-phone" required>
          					</div>

          					<div class="form-group">
            					<label for="message" class="col-form-label"> Sua mensagem </label>
            					<textarea class="form-control" id="message" name="message" required></textarea>
          					</div>

                            <div class="form-group">
            					<input type="text" class="naoExibir form-control" id="captcha" name="captcha" placeholder="Captcha">
          					</div>
      					</div>

      					<div class="modal-footer">
        					<button type="button" class="btn btn-secondary" data-dismiss="modal"> Fechar </button>
        					<button type="submit" class="btn btn-primary"> Solicitar Consulta </button>
      					</div>
        			</form>
    			</div>
  			</div>
		</div>
        -->

		<!-- Website -->
		<nav class="navbar navbar-expand-md navbar-light sticky-top shadow">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="_img/logo.png" width="100" height="80" alt="Logo Dr. Paulo Vet.">
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">					  	
						<li class="nav-item">
							<a class="nav-link mt-2 mt-md-0" href="#especialidades"> ESPECIALIDADES </a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#pet-shop"> PET SHOP </a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#mural-animal"> MURAL ANIMAL </a>
						</li>

						<li class="nav-item">
							<a class="ml-0 ml-md-4 mb-2 mb-md-0 mt-3 mt-md-0 btn btn-outline-info"  href="https://wa.me/559292156295?text=Ol%C3%A1%2C%20Dr.%20Paulo%20Vet.%20%F0%9F%98%8A" target="_blank"> 
							    MARCAR CONSULTA
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<header id="carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="_img/header/1.jpg" class="d-block w-100" alt="Banner 1">
				</div>
				
				<div class="carousel-item">
					<img src="_img/header/2.jpg" class="d-block w-100" alt="Banner 2">
				</div>

				<div class="texto">
					<p class="m-0"> Quem ama, cuida </p>
               		<p class="m-0"> Traga seu pet </p>
                </div>
			</div>

			<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only"> Anterior </span>
			</a>

			<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only"> Próximo </span>
			</a>
		</header>

		<main>
			<section id="encontre-nos" class="bg-light text-secondary">
				<div class="container p-5">
					<div class="row">
						<article class="col-12 col-md-4 mb-5 mb-md-0">
							<div class="row mb-2">
								<div class="col-3">
									<img src="_img/main/encontre-nos/1.png" alt="WhatsApp Dr. Paulo Vet.">
								</div>

								<div class="col-9">
									<p class="mb-0"> Nosso WhatsApp </p>
									<p class="mb-0" datadetectors="off" x-apple-data-detectors="false"> (92) 99215-6295 </p>
								</div>
							</div>

							<div class="row text-center">
								<div class="col-12">
									<a class="btn btn-outline-info" href="https://wa.me/559292156295?text=Ol%C3%A1%2C%20Dr.%20Paulo%20Vet.%20%F0%9F%98%8A" target="_blank"> Marcar Consulta </a>
								</div>
							</div>
						</article>

						<article class="col-12 col-md-4 mb-5 mb-md-0">
							<div class="row mb-2">
								<div class="col-3">
									<img src="_img/main/encontre-nos/2.png" alt="Redes Sociais Dr. Paulo Vet.">
								</div>

								<div class="col-9">
									<p class="mb-0"> Nossas Redes Sociais </p>
									<p class="mb-0"> @dr.paulovet </p>
								</div>
							</div>

							<div class="row text-center">
								<div class="col-12">
									<a class="btn btn-outline-info" href="https://linktr.ee/dr.paulovet" target="_blank"> Acessar </a>
								</div>
							</div>
						</article>

						<article class="col-12 col-md-4">
							<div class="row mb-2">
								<div class="col-3">
									<img src="_img/main/encontre-nos/3.png" alt="Localização Dr. Paulo Vet.">
								</div>

								<div class="col-9">
									<p class="mb-0"> Nossa Localização </p>
									<p class="mb-0 d-none d-md-block"> R. Itaeté, 161 - Novo Aleixo </p>
									<p class="mb-0 d-block d-md-none"> Rua Itaeté, 161 </p>
									<p class="mb-0 d-block d-md-none"> Novo Aleixo </p>
								</div>
							</div>

							<div class="row text-center">
								<div class="col-12">
									<a class="btn btn-outline-info" href="https://g.page/dr.paulovet" target="_blank"> Como Chegar </a>
								</div>
							</div>
						</article>
					</div>
				</div>
			</section>

			<section id="apresentacao" class="text-white bg-light">
				<div class="container px-5 pb-5">
					<div class="row">
						<article class="col-12 col-md-4 block-one p-5">
							<h3 class="mb-4"> Quem Somos </h3>
							<p class="mb-0"> A Clínica Veterinária e Pet Shop Dr. Paulo Vet. foi criada para oferecer à população de Manaus e região um novo conceito em atendimento veterinário. Aliando nossa qualidade técnica à um carinho especial por nossos pacientes. </p>
						</article>

						<article class="col-12 col-md-4 block-two p-5">
							<h3 class="mb-4"> Dr. Paulo Vet. </h3>
							<p class="mb-0"> Sou suspeito para falar, mas sou apaixonado pela minha profissão. Cuidar diariamente de pets e vê-los alcançando o seu melhor estado de saúde não tem preço. </p>
						</article>

						<article class="col-12 col-md-4 block-three p-5">
							<h3 class="mb-4"> Horário de Atendimento </h3>
							<p class="mb-0"> Segunda à Sábado, </p>
							<p class="mb-0"> das 9h às 19h </p>
						</article>
					</div>
				</div>
			</section>

			<section id="resumo">
				<div class="container p-5">
					<div class="row mb-5">
						<h1 class="col-12"> Dr. Paulo Vet. - Clínica Veterinária e Pet Shop em Manaus </h1>
						<p class="m-0 col-12 text-secondary section-description"> Nossa clínica veterinária dispõe de diversas especialidades, enquanto nosso pet shop oferece produtos desde rações à medicamentos. </p>
					</div>

					<article class="row">
						<div class="col-12 col-md-3 mb-5 mb-md-0 block">
							<img class="mb-3" src="_img/main/resumo/4.png" alt="Profissionais Qualificados" />
							<p class="m-0"> Profissionais Qualificados </p>
						</div>

						<div class="col-12 col-md-3 mb-5 mb-md-0 block">
							<img class="mb-3" src="_img/main/resumo/3.png" alt="Consultas Médicas" />
							<p class="m-0"> Consultas Médicas </p>
						</div>
						
						<div class="col-12 col-md-3 mb-5 mb-md-0 block">
							<img class="mb-3" src="_img/main/resumo/1.png" alt="Disk Entrega" />
							<p class="m-0"> Disk Entrega </p>
						</div>

						<div class="col-12 col-md-3 block">
							<img class="mb-3" src="_img/main/resumo/2.png" alt="Atendimento de Emergência" />
							<p class="m-0"> Atendimento de Emergência </p>
						</div>
					</article>
				</div>
			</section>

			<section id="depoimentos">
				<div class="container p-5">
					<article class="row mb-5">
						<h2 class="col-12 text-center"> Depoimentos </h2>
						<p class="m-0 col-12 text-secondary text-center section-description"> Veja a opinião de quem sabe o que é ser cliente da melhor Clínica Veterinária e Pet Shop de Manaus </p>
					</article>

					<div class="row">
						<article class="col-12 col-md-4 px-0 px-md-5 mb-5 mb-md-0">
							<div class="block py-4  text-center shadow">
								<img class="rounded-circle shadow" src="_img/main/depoimentos/1.jpeg" alt="Cliente Dr. Paulo Vet.">
								<p class="name mt-2 mb-0 px-5"> Ivone Azevedo </p>
								<p class="commentary mt-2 mb-0 px-4 text-secondary"> Levo a Nina ao Dr. Paulo Vet. desde quando ela era apenas uma filhote, pois sei que ela sempre será tratada com muito carinho. </p>
							</div>
						</article>

						<article class="col-12 col-md-4 px-0 px-md-5 mb-5 mb-md-0">
							<div class="block py-4  text-center shadow">
								<img class="rounded-circle shadow" src="_img/main/depoimentos/2.jpeg" alt="Cliente Dr. Paulo Vet.">
								<p class="name mt-2 mb-0 px-5"> Adriana Souza </p>
								<p class="commentary mt-2 mb-0 px-4 text-secondary"> A Bia precisou passar por cirurgia para a retirada de nódulos na mama e castração, os procedimentos foram um sucesso. </p>
							</div>
						</article>

						<article class="col-12 col-md-4 px-0 px-md-5 mb-5 mb-md-0">
							<div class="block py-4  text-center shadow">
								<img class="rounded-circle shadow" src="_img/main/depoimentos/1.jpeg" alt="Cliente Dr. Paulo Vet.">
								<p class="name mt-2 mb-0 px-5"> Ivone Azevedo </p>
								<p class="commentary mt-2 mb-0 px-4 text-secondary"> Levo a Nina ao Dr. Paulo Vet. desde quando ela era apenas uma filhote, pois sei que ela sempre será tratada com muito carinho. </p>
							</div>
						</article>
					</div>
				</div>
			</section>

			<section id="especialidades">
				<div class="container p-5">
					<div class="row mb-1">
						<h2 class="col-12"> Especialidades </h2>
						<p class="m-0 col-12 text-secondary section-description d-none d-md-block"> Nossas instalações atendem diversas especialidades veterinárias, trazendo os mais avançados recursos de saúde. Marque uma consulta via WhatsApp. </p>
						<p class="m-0 col-12 text-secondary section-description d-block d-md-none"> Nossas instalações atendem diversas especialidades veterinárias. Marque uma consulta via WhatsApp. </p>
						
						<div class="col-12 mt-3">
							<a class="btn btn-outline-info" href="https://wa.me/559292156295?text=Ol%C3%A1%2C%20Dr.%20Paulo%20Vet.%20%F0%9F%98%8A" target="_blank"> Marcar Consulta </a>
						</div>
					</div>

					<div class="row text-center">
						<div class="col-12 col-md-4 p-4">
							<div class="px-4 block shadow">
								<img class="mt-5" src="_img/main/especialidades/8.png" alt="Consultas">
								<p class="mt-2 mb-0"> Consultas </p>
							</div>
						</div>

						<div class="col-12 col-md-4 p-4">
							<div class="px-4 block shadow">
								<img class="mt-5" src="_img/main/especialidades/4.png" alt="Exames Laboratoriais">
								<p class="mt-2 mb-0"> Exames Laboratoriais </p>
							</div>
						</div>

						<div class="col-12 col-md-4 p-4">
							<div class="px-4 block shadow">
								<img class="mt-5" src="_img/main/especialidades/2.png" alt="Cirurgias">
								<p class="mt-2 mb-0"> Cirurgias </p>
							</div>
						</div>

						<div class="col-12 col-md-4 p-4">
							<div class="px-4 block shadow">
								<img class="mt-5" src="_img/main/especialidades/7.png" alt="Vacinação">
								<p class="mt-2 mb-0"> Vacinação </p>
							</div>
						</div>

						<div class="col-12 col-md-4 p-4">
							<div class="px-4 block shadow">
								<img class="mt-5" src="_img/main/especialidades/6.png" alt="Remoção de Tártaro">
								<p class="mt-2 mb-0"> Remoção de Tártaro </p>
							</div>
						</div>

						<div class="col-12 col-md-4 p-4">
							<div class="px-4 block shadow">
								<img class="mt-5" src="_img/main/especialidades/3.png" alt="Eletrocardiograma">
								<p class="mt-2 mb-0 d-none d-md-block"> Eletrocardiograma </p>
								<p class="mt-2 mb-0 d-block d-md-none"> Eletrocard. </p>
							</div>
						</div>
						<!--
						<div class="col-12 col-md-4 p-4">
							<div class="px-4 block shadow">
								<img class="mt-5" src="_img/main/especialidades/5.png" alt="Internação">
								<p class="mt-2 mb-0"> Internação </p>
							</div>
						</div>
						-->
						<div class="col-12 col-md-4 p-4">
							<div class="px-4 block shadow">
								<img class="mt-5" src="_img/main/especialidades/1.png" alt="Atestado Para Viagem">
								<p class="mt-2 mb-0"> Atestado Para Viagem </p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="pet-shop" class="bg-light">
				<div class="container p-5">
					<div class="row mb-1">
						<h2 class="col-12"> Pet Shop </h2>
						<p class="m-0 col-12 text-secondary section-description d-none d-md-block"> Todos os produtos que seu pet precisa, desde uma imensa variedade de rações até uma farmácia veterinária. Disk Entrega via WhatsApp. </p>
						<p class="m-0 col-12 text-secondary section-description d-block d-md-none"> Todos os produtos que seu pet precisa, desde rações até uma farmácia veterinária. Disk Entrega via WhatsApp. </p>

						<div class="col-12 mt-3">
							<a class="btn btn-outline-info" href="https://wa.me/559292156295?text=Ol%C3%A1%2C%20Dr.%20Paulo%20Vet.%20%F0%9F%98%8A" target="_blank"> Disk Entrega </a>
						</div>
					</div>

					<div class="row text-center">
						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/pet-shop/2.jpg" alt="Medicamentos">	
							<p class="text-secondary mb-0 mt-3"> Medicamentos </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/pet-shop/1.jpg" alt="Rações">	
							<p class="text-secondary mb-0 mt-3"> Rações </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/pet-shop/6.jpg" alt="Caixa Transportadora">	
							<p class="text-secondary mb-0 mt-3"> Caixa Transportadora </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/pet-shop/4.jpg" alt="Comedouro e Bebedouro">	
							<p class="text-secondary mb-0 mt-3"> Comedouro e Bebedouro </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/pet-shop/3.jpg" alt="Brinquedos">	
							<p class="text-secondary mb-0 mt-3"> Brinquedos </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/pet-shop/5.jpg" alt="Coleiras">	
							<p class="text-secondary mb-0 mt-3"> Coleiras </p>
						</div>

						<div class="col-12 col-md-4 p-4 block">
							<img class="shadow" src="_img/main/pet-shop/7.jpg" alt="Roupas">	
							<p class="text-secondary mb-0 mt-3"> Roupas </p>
						</div>
					</div>
				</div>
			</section>

			<section id="mural-animal">
				<div class="container p-5">
					<div class="row mb-1">
						<h2 class="col-12"> Mural Animal </h2>
						<p class="section-description m-0 col-12 text-secondary"> Olha só essa galerinha. Sãos os pets do nosso Instagram fazendo uma visitinha ao nosso Mural Animal. Traga o seu pet também! </p>

						<div class="col-12 mt-3">
							<a class="btn btn-outline-info" href="https://www.instagram.com/dr.paulovet" target="_blank"> Visitar Instagram </a>
						</div>
					</div>

					<div class="row pt-4">
	<?php
						foreach ($result->data as $post) 
						{
	?>
							<div class="col-6 col-md-3 block p-0">
								<img class="w-100" src="<?php echo $post->media_url; ?>" alt="Foto do Instagram @dr.paulovet" />
							</div>
	<?php
						}
	?>
					</div>
				</div>
			</section>
		</main>

		<footer class="text-white">
			<div class="container pt-5 px-5">
				<div class="row">
					<article class="col-12 col-md-4 mb-5 mb-md-0">
						<h3> + Saiba Mais </h3>
						<p> Dr. Paulo Vet. é uma Clínica Veterinária e Pet Shop localizada em Manaus que realiza consulta veterinária e Disk Entrega. </p>
						<a class="btn" href="https://linktr.ee/dr.paulovet" target="_blank"> Redes Sociais </a>
					</article>

					<article class="col-12 col-md-4 mb-5 mb-md-0">
						<h3> Onde Estamos </h3>
						<p class="mb-0"> Rua Itaeté, 161 - Novo Aleixo </p>
						<p> Manaus/AM </p>
						<p class="mb-0"> contato@drpaulovet.com </p>
						<p class="mb-0" datadetectors="off" x-apple-data-detectors="false"> (92) 99215-6295 </p>
					</article>

					<div class="col-12 col-md-4">
						<h3> Dr. Paulo Vet. </h3>
						<img class="rounded shadow-sm" src="_img/footer/1.jpeg" alt="Dr. Paulo Vet.">
					</div>
				</div>
				
				<div class="row pt-5 pb-3">
					<div class="col-6">
						<p class="m-0"> @ 2020 Dr. Paulo Vet. </p>
					</div>

					<div class="col-6 text-right">
					 	<a class="text-white" target="_blank" href="https://www.fabriciobatalha.dev"> Desenvolvido por Fabrício S. Batalha </a>
					</div>
				</div>
			</div>
		</footer>

		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="_js/_lib/jquery.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="_js/_lib/popper.min.js"></script> -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="_js/_fw/bootstrap.min.js"></script> -->
		<script src="_js/_pg/maskbrphone.min.js"></script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142144075-1"></script>
		<script src="_js/master.js"></script>
	</body>
</html>
