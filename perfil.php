<?php
	$page_title = 'Nanda Leme';
	$body_class = '';
	$menu = 'ensaios';
?>

<?php include 'include/head.php'; ?> 
<?php include 'include/header.php'; ?>

<header class="header-perfil" style="background-image: url('uploads/header-perfil.jpg');">
	<div class="bg-header-perfil">
		<div class="container">
			<h2 class="title"><?= $page_title; ?></h2>
			<div class="tel-perfil">
				<span class="tel"><i class="fa fa-phone" aria-hidden="true"></i> (011) 99872-0923</span>
				<img src="assets/images/ver-tel.png" alt="" class="ver-tel">
			</div>
			<p>Bairro: Jardins - São Paulo</p>
			<ul class="test-drives">
				<li class="title">TEST DRIVES</li>
				<li>Todos: <strong>4652</strong></li>
				<li>Somentes TDs: <strong>3435</strong></li>
				<li>Neutros: <strong>12</strong></li>
				<li>Positivos: <strong>350</strong></li>
				<li>Negativos: <strong>10</strong></li>
			</ul>
			<span class="rating">
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star-half" aria-hidden="true"></i>
				<span class="tit-avaliacao">AVALIAÇÃO MÉDIA: 4,5</span>
			</span>
		</div>
	</div>
</header>

<section class="box-container perfil-acompanhantes">
	<div class="container">

		<div class="bg-fotos">
			<div id="active-foto"></div>
			<div class="owl-carousel owl-theme perfil-fotos">
				<?php for($i=0; $i<10; $i++){ ?>
				<article class="item<?php if($i > 4){ echo ' blocked'; } if($i == 0){ echo ' active-foto'; } ?>" rel="<?php echo $i; ?>">
					<div class="img">
						<img src="uploads/pefil-acompanhantes-<?php echo $i; ?>.jpg" class="img-princ" alt=""/>
					</div>
					<?php if($i > 4){ ?>
						<span class="img-blocked"></span>
						<span class="label-blocked">
							<img src="assets/images/label-blocked.png" />
						</span>
					<?php } ?>
				</article>
				<?php } ?>
			</div>
		</div>

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item active">
				<a class="nav-link" data-toggle="tab" href="#sobre" role="tab">SOBRE A NANDA LEME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#entrevistas" role="tab"><i class="fa fa-lock" aria-hidden="true"></i> Entrevistas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#comentarios" role="tab"><i class="fa fa-lock" aria-hidden="true"></i> Comentários</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#videos" role="tab"><i class="fa fa-lock" aria-hidden="true"></i> Vídeos</a>
			</li>
			<li class="nav-item ouvir-recado">
				<a class="nav-link" data-toggle="tab" href="#ouvir-recado" role="tab"><i class="fa fa-play" aria-hidden="true"></i> OUVIR RECADO</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="sobre" role="tabpanel">
				<div class="content-txt">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>

				<table width="100%" cellpadding="0" cellspacing="0" border="0">
					<tr class="tit-table">
						<th colspan="5">INFORMAÇÕES</th>
					</tr>
					<tr valign="middle">
						<th width="20%">Perfil</th>
						<th width="20%">Características Físicas</th>
						<th width="20%">Programa</th>
						<th width="20%">Atendimento</th>
						<th width="20%">Perfil Social</th>
					</tr>
					<tr class="first">
						<td>25 Anos</td>
						<td>Bumbum Grande</td>
						<td>Anal</td>
						<td>Atende 2 Homens</td>
						<td>Bebe</td>
					</tr>
					<tr>
						<td>Altura: 1,67m</td>
						<td>Olhos Castanhos</td>
						<td>Beija na Boca</td>
						<td>Atende Casais</td>
						<td>Ensino Superior</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Atende Mulheres</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Despedida de Solteiro</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Sábado</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Domingo</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Eventos</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Homens</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Hotel & Motel</td>
						<td></td>
					</tr>
					<tr class="last">
						<td></td>
						<td></td>
						<td></td>
						<td>Período Tarde</td>
						<td></td>
					</tr>
				</table>

			</div>
			<div class="tab-pane" id="entrevistas" role="tabpanel">
				<div class="content-txt">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
			<div class="tab-pane" id="comentarios" role="tabpanel">
				<div class="content-txt">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
			<div class="tab-pane" id="videos" role="tabpanel">
				<div class="content-txt">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
			<div class="tab-pane" id="ouvir-recado" role="tabpanel">
				<div class="content-txt">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="box-container bg-gray as-mais-do-club">

	<h2>RELACIONADOS COM <strong>NANDA LEME</strong></h2>
	<div class="owl-carousel owl-theme as-mais as-mais-itens as-mais-perfil">

		<?php for($i=1; $i<9; $i++){ ?>
		<article class="item">
			<img src="uploads/as-mais-do-club-01.png" class="img-responsive" alt=""/>
			<span class="title">Bruna Blanco</span>
			<div id="" class="overlay">
				<a href="<?php echo $url; ?>/perfil" class="see-more">Ver mais</a>
				<h3 class="title">Bruna Blanco</h3>
				<span class="local">Moema - São Paulo</span>
				<span class="rating clearfix">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</span>
				<div id="" class="clearfix">
					<a href="<?php echo $url; ?>" class="gift"></a>
					<a href="<?php echo $url; ?>" class="add-fav"><i class="fa fa-star" aria-hidden="true"></i></a>
				</div>
			</div>
		</article>
		<?php } ?>

	</div>

</section>

<section class="box-container bg-gray box-action">
	<div class="container">
		<div class="row">
			
			<?php include 'include/club-model.php'; ?>
			<?php include 'include/news.php'; ?>

		</div>
	</div>
</section>

<?php include 'include/assine-vip-club.php'; ?>

<?php include 'include/footer.php'; ?>

<?php include 'include/foot.php'; ?>

<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$('.owl-carousel.as-mais').owlCarousel({
		loop: false,
		nav: false,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 3
			},
			992: {
				items: 6
			}
		}
	})

	function callback(event) {
    	var img = $('.active-foto .img').html();
    	$('#active-foto').html(img);
	}

    var carousel = $(".perfil-fotos");
	carousel.owlCarousel({
		loop: false,
		nav: true,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		center: false,
		responsive: {
			0: {
				items: 3
			},
			768: {
				items: 6
			},
			992: {
				items: 9
			}
		},
		onInitialized: callback
	});

	$('.perfil-fotos .owl-item').click(function(e){
		if(!$('.item', this).hasClass('blocked')){
			var slide = $('.item', this).attr('rel');
			$('.perfil-fotos .item').removeClass('active-foto');
			$('.item', this).addClass('active-foto');
			e.preventDefault();
			carousel.trigger('owl.goTo', slide);
			callback();
		}
	});

	$('#myTab a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	})
</script>