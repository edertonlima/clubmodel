<?php
	$page_title = 'Contato';
	$body_class = 'pages';
	$nav_page = 'contato';
?>

<?php include 'include/head.php'; ?> 
<?php include 'include/header.php'; ?>

<!-- BEGIN CONTENT -->
<div class="pages">
  <header class="page-header">
    <div id="" class="container">
      <div id="" class="row">
	<img src="assets/images/icon-pink.png" class="icon-header" alt=""/>
	<ul class="breadcrumb">
	  <li><a href="<?php echo $url; ?>">Home</a></li>
	  <li class="active"><i class="fa fa-angle-right" aria-hidden="true"></i> <?= $page_title; ?></li>
	</ul>
	<h2 class="title"><?= $page_title; ?></h2>
	<p>
	  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	  Lorem Ipsum has been the industry's standard dummy text.
	</p>
      </div>
    </div>
  </header>
  <main id="" class="main-page">
	<?php include 'include/nav-pages.php'; ?>
    <div id="" class="container">
      <div id="" class="fale-conosco row">
	<h3 class="title-styled">Fale Conosco</h3>
	<form class="col-sm-6">
	  <div class="form-group">
	    <input type="text" class="form-control" id="" placeholder="Nome">
	  </div>
	  <div class="form-group">
	    <input type="text" class="form-control" id="" placeholder="E-mail">
	  </div>
	  <div class="form-group">
	    <input type="text" class="form-control" id="" placeholder="Assunto">
	  </div>
	  <div class="form-group">
	    <textarea class="form-control" placeholder="Mensagem"></textarea>
	  </div>
	  <button type="submit" class="btn btn-submit">Enviar <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
	</form>
	<div id="" class="col-sm-6">
	  <p>
	    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
	    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
	    It has survived not only five centuries, but also the leap into electronic typesetting.
	  </p>
	</div>
      </div>
    </div>
  </main>
</div>
<!-- END CONTENT -->

<?php include 'include/assine-vip-club.php'; ?>
<?php include 'include/footer.php'; ?>
<?php include 'include/foot.php'; ?>