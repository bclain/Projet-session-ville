
@extends('layouts.app')

 
@section('Mid')
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location info" id="home">
            <br><br><br>
       <h2 >Ajouter un film </h2>
      
<form action="/login" method="post" >
@csrf
  <label for="user">nom d'utilisateur</label>
  <input type="text" id="nom" name="nom">
  <label for="password">password</label>
  <input type="password" id="password" name="password">

  @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                        <li class="text-red-500 list-none">
                            {{$error}}

                        </li>

                        @endforeach
                    </div>
                @endif

                
  <button class="button">Se connecter</button>
</form>
                              
      </div>
@endsection



