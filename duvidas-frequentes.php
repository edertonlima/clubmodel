<?php
	$page_title = 'Dúvidas frequentes';
	$body_class = 'pages';
	$nav_page = 'duvidas-frequentes';
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
      <div id="" class="row">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		  <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</span>
		  <i class="fa fa-angle-down fa-inverse"></i>
		</a>
	      </h4>
	    </div>
	    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
	      <div class="panel-body">
		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title">
		<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		  <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</span>
		  <i class="fa fa-angle-down fa-inverse"></i>
		</a>
	      </h4>
	    </div>
	    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingThree">
	      <h4 class="panel-title">
		<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		  <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</span>
		  <i class="fa fa-angle-down fa-inverse"></i>
		</a>
	      </h4>
	    </div>
	    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	      <div class="panel-body">
		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	      </div>
	    </div>
	  </div>
	</div>
      </div>
    </div>
  </main>
</div>
<!-- END CONTENT -->

<?php include 'include/assine-vip-club.php'; ?>
<?php include 'include/footer.php'; ?>
<?php include 'include/foot.php'; ?>

<script type="text/javascript">
  $('[data-toggle="collapse"]').on('click', function () {
    $('.panel-heading').find('.fa').addClass('fa-angle-down').removeClass('fa-angle-up');
    $(this).closest('.panel-heading').find('.fa').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
    $('.panel-heading').removeClass('opened');
    $(this).closest('.panel-heading').toggleClass('opened');
  })
</script>
