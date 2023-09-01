@extends('layouts.app')

 
@section('Mid')
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location info" id="home">
            <br><br><br>
       <h2 >Ajouter un film </h2>
      
<form action="" method="post" >
@csrf
  <label for="user">nom d'utilisateur</label>
  <input type="text" id="user" name="user">
  <label for="password">password</label>
  <input type="password" id="password" name="password">
  <button class="button">Se connecter</button>
</form>
                              
      </div>
@endsection