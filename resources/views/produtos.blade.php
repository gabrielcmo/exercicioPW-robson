@extends('layouts.app')

@section('content')
		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Nossos melhores livros</span></h2>
					</div>
				</div>
				
				@auth
					@if(Auth::guard()->user()->role_id == 2)
						<strong>
							<a href="{{ route('create') }}">Adicionar livro</a> &nbsp;&nbsp;&nbsp;
							<a href="{{ route('remove') }}">Remover livro</a>
						<br></strong><br><br>
					@endif
				@endauth

				<div class="row">
					@foreach($products as $key => $product)
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(storage/images/{{ $product['image'] }});">
								<p class="tag"><span class="sale">Disponível</span></p>
								<div class="cart">
									<p>
										<span><a href="/produto/{{ $key }}"><i class="icon-eye"></i>&nbsp; Ver produto</a></span> 
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">{{ $product['name'] }}</a></h3>
								<p class="price"><span class="price"><h4>R$ {{ $product['price'] }}</h4></span> </p>
							</div>
						</div>
					</div>	
					@endforeach
				</div>
		</div>
@endsection