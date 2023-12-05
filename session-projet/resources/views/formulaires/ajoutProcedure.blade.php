@extends('layouts.app')

 
@section('Mid')
    <!-- MAIN CONTAINER -->
<section class="fullscreen connexion" >

  <div class="contain">


      <form action="{{ route('procedures.store') }}" method="POST">
      @csrf
      <h2 >Créer une procédure</h2>
        <div class="form-group">
            <label for="nom" >Titre:</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="liens" >Lien Web:</label>
            <input type="url" id="liens" name="liens" required>
      </div>
    
        <input type="submit" value="Créer" class="btn-base">
      </form>
  </div>
                              
      </div>
@endsection