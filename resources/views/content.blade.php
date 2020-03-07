	<div class="container">
		<div class="card has-background-grey-lighter">
			@if(is_null($id))
			<div class="card-header"></div>
					<div class="card-header-title is-size-1 has-text-grey-dark">
						<i class="fas fa-arrow-left"></i>&nbsp;<strong>Seleciona um capítulo!</strong>
					</div>
				</div>
			@else
				<header class="card-header ">
		    		<div class="card-header-title is-size-1 has-text-grey-dark">
		    			@foreach($title as $t)
		     			 <p>{{$t->name}}</p>
		     			 <p><a class="is-size-7" href="https://tutoria.ualg.pt/2019/pluginfile.php/129168/mod_resource/content/1/Chapter_1.pdf">pdf aqui</a></p>
		     			@endforeach
		   			 </div>    		
				</header>
				@if(count($chapter)==0)
					<div class="card-content"></div>
						<div class="content is-size-3 has-text-grey-dark has-text-centered">
							<strong>Ainda não existem apontamento sobre este capítulo!</strong>
						</div>
						<div class="has-text-centered">
							<img src="https://media.giphy.com/media/gngO1gmBhS9na/giphy.gif">
						</div>
					</div>
				@else
					@foreach($chapter as $content)
			      	<div class="card">
				      	<div class="card-image">
				      		<figure class="image ">
				      			<img src="{{asset('resources/assets/images/'.$content->image)}}">
				      		</figure>
			      		</div>
						<div class="card-content">
							<div class="content is-size-5 has-text-grey-dark">
						  		{!!$content->description!!}
						  	</div>
						</div>
					</div>
					<br>
					@endforeach
					@endif
				@endif
			</div>
   