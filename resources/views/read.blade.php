@include('inc.header')
	<div class="container">
		<div class="row">
			<legend>Laravel CRUD Read page</legend>
			<p class="lead">{{ $articles->title}}</p>
			<p>{{ $articles->description }}</p>
		</div>		
	</div>
@include('inc.footer')