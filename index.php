<!DOCTYPE html><html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css?ver=<?=rand(763324,7879872987)?>">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<div>
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
						$element.addClass($effect);
								}, $timeout);
					
					
					} else {
					//$element.removeClass($effect);
					}
					});
				}
				$window.on('scroll resize', check_if_in_view);
			$window.trigger('scroll');
				});
			</script>
		</div>
	</head>
	<body>
		<div class="container-fluid" style="background: url('img/bg.jpg') center center no-repeat;height: 300px;">
			<div class="container">
				<div class="row">
					cvxcvxcv sdfd fg df
				</div>
			</div>
		</div>
		
		<div>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="an" data-time='300' data-effect='fadeInLeft animated'>test sampl 1
                            <div class="an" data-time='1500' data-effect='fadeInRight animated'> 
                            i fade in form the right
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas culpa quibusdam id consequatur non maxime tempora? Quos, adipisci doloremque atque non earum fuga, vero nemo cupiditate corrupti ut ea labore.</p>

						</div>
					</div>
					<div class="col-sm-4">
						<div class="an" data-time='300' data-effect='fadeInLeft animated'>test sampl 1</div>
					</div>
					<div class="col-sm-4">
						<div class="an" data-time='300' data-effect='fadeInLeft animated'>test sampl 1</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>