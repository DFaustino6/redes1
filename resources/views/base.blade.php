<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Redes 1</title>
    <link rel="shortcut icon" href="fal fa-project-diagram" type="image/x-icon" /> 
    <link rel="stylesheet" href="{{asset('resources/assets/css/bulma.css')}}">

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
     
   <link rel="stylesheet" href="https://streamonion.com/kinnith/fontawesome/css/all.css">
  </head>
  <body>
  <section class="has-background-white-ter" >
  	<div class="columns" >
  		<div class="column is-one-fifth" style="padding-top: 3%;padding-left: 2%">
	  		@include('navbar')
	  	</div>
	  	<div class="column is-three-fifths" style="padding-top: 2%">
	  		@yield('content')
	  	</div>
	  	<div class="column"></div>
  	</div>
  </section>
  </body>
</html>