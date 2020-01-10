@extends('master')

@section('content')

<form method="post" action="{{url('etudiante')}}">
	{{csrf_field()}}
<div id="container" >
	<label>nom:</label>
	<input type="nom" name="nom">
	<br><br>
	<label>prenom :</label>
			
	<input type="prenom" name="prenom">
	<br><br>
	<label>email :</label>
			
	<input type="email" name="email">
	<br><br>
	<label>password :</label>
			
	<input type="password" name="password">
	<br><br>
	<br><br>
		<label>groupe </label>
	<input type="groupe" name="groupe">
	<br><br>
		<label>note1 :</label>
	<input type="note1" name="note1">
	<br><br>
		<label>note2 </label>
	<input type="note2" name="note2">
	<br><br>
	<br><br>
		<label>note3 </label>
	<input type="note3" name="note3">
	<br><br>
	<br><br>
		<label>note4 </label>
	<input type="note4" name="note4">
	<br><br>
	
	<button>add</button>
</div>
</form>
@endsection