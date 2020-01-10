 
@extends('master')

@section('content')
@if(count($errors)>0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $errors)
		<li>{{$errors}}</li>
		@endforeach
	</ul>
</div>
@endif
@if(\Session::has('success'))
<div class="alert alert-success">
	{{\Session::get('success')}}
</div>
@endif
<form method="post" action="{{url('etudiant')}}">
	{{csrf_field()}}
<div id="container" >
	<label>nom:</label>
	<input type="nom" name="nom">
	<br><br>
	<label>prenom :</label>
			
	<input type="prenom" name="prenom">
	<br><br>
		<label>mail :</label>
	<input type="mail" name="email">
	<br><br>
		<label>password </label>
	<input type="password" name="password">
	<br><br>
		<label>groupe </label>
	<input type="groupe" name="groupe">
	<br><br>
	<button>register</button>
</div>
</form>
@endsection