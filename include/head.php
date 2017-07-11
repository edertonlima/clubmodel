<?php 
	$dev = true;
	if ($dev) :
		$url = 'http://localhost/clubmodel';
		else:
			$url = 'http://clubmodel.projetosvp.com.br';
	endif
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="" type="image/x-icon" />
<link rel="icon" href="" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $page_title; ?>" />

<!-- SOCIAL META -->
<meta itemprop="name" content="" />
<meta itemprop="description" content="" />
<meta itemprop="image" content="" />

<html itemscope itemtype="" />
<link rel="image_src" href="" />
<link rel="canonical" href="" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $page_title; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="" />
<meta property="fb:admins" content="" />
<meta property="fb:app_id" content="" /> 

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="" />
<meta name="twitter:title" content="<?php echo $page_title; ?>" />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content="" />

<title><?php echo $page_title; ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="screen" />

</head>
<body class="<?php echo $body_class; ?>">