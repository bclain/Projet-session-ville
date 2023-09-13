
@extends('layouts.app')

 
@section('Mid')
    <!-- MAIN CONTAINER -->
<section class="fullscreen connexion" >

  <div class="contain">
    <img src="{{ asset('img/logoVille.png') }}" alt="Logo image">


      <form action="/login" method="post" >
      @csrf
      <h2 >Connexion</h2>
        <div class="input">
          <label for="user">nom d'utilisateur</label>
          <input type="text" id="nom" name="nom">
        </div>
        <div class="input">
          <label for="password">password</label>
          <input type="password" id="password" name="password">
        </div>
      
        @if ($errors->any())
                          <div>
                              @foreach ($errors->all() as $error)
                              <li class="text-red-500 list-none">
                                  {{$error}}
      
                              </li>
      
                              @endforeach
                          </div>
                      @endif
      
                      
        <button class="btn-base">Se connecter</button>
      </form>
  </div>
                              
      </div>
@endsection



