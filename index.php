<!DOCTYPE html><html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SoftDream Матрасы </title>
		<link href="https://fonts.googleapis.com/css?family=El+Messiri:400,500|Lobster|Pattaya&amp;subset=cyrillic" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css?ver=<?=rand(763324,7879872987)?>">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$('documnet').ready(function() {
				var $animation_elements = $('.an');
		var $window = $(window);
		function check_if_in_view() {
				var window_height = $window.height();
				var window_top_position = $window.scrollTop();
				var window_bottom_position = (window_top_position + window_height);
				
				$.each($animation_elements, function() {
				var $element = $(this);
				var $timeout = $(this).attr('data-time');
				var $effect = $(this).attr('data-effect');
				var element_height = $element.outerHeight();
				var element_top_position = $element.offset().top;
				var element_bottom_position = (element_top_position + element_height);
				
				//check to see if this current container is within viewport
				if ((element_bottom_position >= window_top_position) &&
				(element_top_position <= window_bottom_position) &&
				($element.hasClass($effect)==false)) {
		
		setTimeout(function() {
					$element.addClass($effect).css('opacity',1);
					console.log($element.prop('nodeName'));
					}, $timeout);
				
				} else {
				//$element.removeClass($effect);
				}
				});
			}
			$window.on('scroll resize', check_if_in_view);
		$window.trigger('scroll');
		$("#demo01").animatedModal();
			});
		</script>
	</head>
	<body>
		<div class="container-fluid top-div">
			<div class="container">
				<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="container">
						<div class="navbar-header"><a class="navbar-brand" href="#">Softdream</a>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse navbar-menubuilder">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#products">О нас</a></li>
							<li><a href="#about-us">Зависимые матрасы </a></li>
							<li><a href="#about-us">Назависимые матрасы </a></li>
							<li><a href="#about-us">Беспружинные матрасы </a></li>
							<li><a href="#about-us">Детские матрасы </a></li>
							<li><a href="#contact">Отзывы</a></li>
						</ul>
					</div>
				</div>
			</div>
			<h1 class="attracter ">Лучшие Мтрасы для Сладких Снов</h1>
			<h4 class="attracter-add text-center">
			У нас вы можете преобрести отличную продкуцию на 30% ниже рыночной стоимости.
			Мы работаем на прямую спроизводителем матрасов.
			</h4>
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="advantages">
						<i class="fa fa-bug"></i>
						<div class="description">
							Антибактерилаьное покрытие
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="advantages">
						<i class="fa fa-leaf"></i>
						<div class="description">
							Антибактерилаьное покрытие
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="advantages">
						<i class="fa fa-cloud-upload"></i>
						<div class="description">
							<h5>Дашащие материалы</h5>
							Чехлы на матрсы производятся из матрилаов пропускающих воздух на 70%
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="advantages">
						<i class="fa fa-cloud-upload"></i>
						<div class="description">
							<h5>Дашащие материалы</h5>
							Чехлы на матрсы производятся из матрилаов пропускающих воздух на 70%
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="container">
			<h3 class="an head text-center" data-effect='fadeInUp animated' data-time='10'>
			<span>Пружинный блок <span class="highlight"> Bonell</span></span>
			<h5>160 пружин на 1 м2</h5>
			</h3>
			<div class="row">
				<div class="col-sm-4">
					<div class="product-section">
						<div class="col-sm-12">
							<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Simplex</h4>
							<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
							<div class="prices">
								<del>10 500 тг</del>
								<div class="price">9 000 тг. <small>за м<sup>2</sup></small></div>
							</div>
							<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-10%</div></div>
							
							
							<div class="an" data-time='10' data-effect='flipInY animated'>
								<h6>Характеристики</h6>
								<ul class="list-unstyled">
									<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
									<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
									<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
									<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
									<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12">
							<table class="table">
								<tr class="sizes">
									<td>80x190</td>
									<td>180x200</td>
									<td>200x200</td>
								</tr>
								<tr class="prices-for-sizes">
									<td>14 000 тг.</td>
									<td>24 000 тг.</td>
									<td>65 000 тг.</td>
								</tr>
							</table>
							<form class="form">
								<div class="form-group">
									<button type="submit" class="btn btn-success">Заказать</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-section">
						<div class="col-sm-12">
							<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Simplex Strong</h4>
							<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
							<div class="prices">
								<del>13 500 тг</del>
								<div class="price">10 200 тг. <small>за м<sup>2</sup></small></div>
							</div>
							<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-23%</div></div>
							
							
							<div class="an" data-time='10' data-effect='flipInY animated'>
								<h6>Характеристики</h6>
								<ul class="list-unstyled">
									<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
									<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
									<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
									<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
									<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12">
							<table class="table">
								<tr class="sizes">
									<td>80x190</td>
									<td>180x200</td>
									<td>200x200</td>
								</tr>
								<tr class="prices-for-sizes">
									<td>14 000 тг.</td>
									<td>24 000 тг.</td>
									<td>65 000 тг.</td>
								</tr>
							</table>
							<form class="form">
								<div class="form-group">
									<button type="submit" class="btn btn-success">Заказать</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-section">
						<div class="col-sm-12">
							<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Summer Set</h4>
							<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
							<div class="prices">
								<del>17 500 тг</del>
								<div class="price">13 420 тг. <small>за м<sup>2</sup></small></div>
							</div>
							<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-10%</div></div>
							<div class="an" data-time='10' data-effect='flipInY animated'>
								<h6>Характеристики</h6>
								<ul class="list-unstyled">
									<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
									<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
									<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
									<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
									<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12">
							<table class="table">
								<tr class="sizes">
									<td>80x190</td>
									<td>180x200</td>
									<td>200x200</td>
								</tr>
								<tr class="prices-for-sizes">
									<td>14 000 тг.</td>
									<td>24 000 тг.</td>
									<td>65 000 тг.</td>
								</tr>
							</table>
							<form class="form">
								<div class="form-group">
									<button type="submit" class="btn btn-success">Заказать</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="product-section">
						<div class="col-sm-12">
							<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Simplex</h4>
							<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
							<div class="prices">
								<del>10 500 тг</del>
								<div class="price">9 000 тг. <small>за м<sup>2</sup></small></div>
							</div>
							<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-10%</div></div>
							
							
							<div class="an" data-time='10' data-effect='flipInY animated'>
								<h6>Характеристики</h6>
								<ul class="list-unstyled">
									<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
									<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
									<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
									<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
									<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12">
							<table class="table">
								<tr class="sizes">
									<td>80x190</td>
									<td>180x200</td>
									<td>200x200</td>
								</tr>
								<tr class="prices-for-sizes">
									<td>14 000 тг.</td>
									<td>24 000 тг.</td>
									<td>65 000 тг.</td>
								</tr>
							</table>
							<form class="form">
								<div class="form-group">
									<button type="submit" class="btn btn-success">Заказать</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-section">
						<div class="col-sm-12">
							<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Simplex Strong</h4>
							<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
							<div class="prices">
								<del>13 500 тг</del>
								<div class="price">10 200 тг. <small>за м<sup>2</sup></small></div>
							</div>
							<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-23%</div></div>
							
							
							<div class="an" data-time='10' data-effect='flipInY animated'>
								<h6>Характеристики</h6>
								<ul class="list-unstyled">
									<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
									<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
									<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
									<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
									<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12">
							<table class="table">
								<tr class="sizes">
									<td>80x190</td>
									<td>180x200</td>
									<td>200x200</td>
								</tr>
								<tr class="prices-for-sizes">
									<td>14 000 тг.</td>
									<td>24 000 тг.</td>
									<td>65 000 тг.</td>
								</tr>
							</table>
							<form class="form">
								<div class="form-group">
									<button type="submit" class="btn btn-success">Заказать</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-section">
						<div class="col-sm-12">
							<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Summer Set</h4>
							<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
							<div class="prices">
								<del>17 500 тг</del>
								<div class="price">13 420 тг. <small>за м<sup>2</sup></small></div>
							</div>
							<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-10%</div></div>
							<div class="an" data-time='10' data-effect='flipInY animated'>
								<h6>Характеристики</h6>
								<ul class="list-unstyled">
									<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
									<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
									<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
									<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
									<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12">
							<table class="table">
								<tr class="sizes">
									<td>80x190</td>
									<td>180x200</td>
									<td>200x200</td>
								</tr>
								<tr class="prices-for-sizes">
									<td>14 000 тг.</td>
									<td>24 000 тг.</td>
									<td>65 000 тг.</td>
								</tr>
							</table>
							<form class="form">
								<div class="form-group">
									<button type="submit" class="btn btn-success">Заказать</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</div>
	<!--Call your modal-->
	<a id="demo01" href="#animatedModal">DEMO01</a>
	<!--DEMO01-->
	<div id="animatedModal">
		<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
		<div class="close-animatedModal">
			CLOSE MODAL
		</div>
		
		<div class="modal-content">
			<!--Your modal content goes here-->
		</div>
	</div>
</body>
</html>