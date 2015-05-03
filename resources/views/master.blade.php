<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
			<title> Blog:: Home</title>
			{!! Html::style('css/style.css') !!}
			{!! Html::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}
			{!! Html::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') !!}
			{!! Html::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') !!}
			
		</head>
		<body>
			
			@yield('header')

			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						@yield('content')
					</div>
				</div>
			</div>

		</body>
		</html>		