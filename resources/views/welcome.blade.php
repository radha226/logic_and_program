<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<!-- Styles -->
		@include('components.footer')
		<style>
			html, body {
				background-color: #fff;
				color: #636b6f;
				font-family: 'Nunito', sans-serif;
				font-weight: 200;
				height: 100vh;
				margin: 0;
			}
			.wrapper{
				text-align: center;
    		width: 99%;
    		margin: 0 auto;
			}
			.row a{
				width: 24%;
		    display: inline-block;
		    border: 1px solid #008074;
		    padding: 10px;
		    box-sizing: border-box;
		    color: black;
		    font-size: 15px;
		    text-decoration: none;
		    text-align: center;
		    border-bottom:0;
			}
			.row a:hover{
				background:#008074;
				color: #fff;
			}
			.row:last-child a{
				border-bottom:1px solid #008074;
			}

		</style>
	</head>
	<body>
		<div class="wrappper">
			<div class="heading"><h1>This is home page</h1></div>
				<div class="content">
					<div class="row">
						<a href="{{url('simple')}}">Array of object</a>
						<a href="">Make a array and object</a>
						<a href="">Make a array and object</a>
						<a href="">Make a array and object</a>
					</div>
					<div class="row">
						<a href="">Make a array and object</a>
						<a href="">Make a array and object</a>
						<a href="">Make a array and object</a>
						<a href="">Make a array and object</a>
					</div>		
					<div class="row">
						<a href="">Make a array and object</a>
						<a href="">Make a array and object</a>
						<a href="">Make a array and object</a>
						<a href="">Make a array and object</a>
					</div>						
				</div>
		</div>
	</body>
</html>
