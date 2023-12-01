<php
{{-- <div class="form-container" style="margin: 0 auto; width: 300px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
    <h2 style="text-align: center; margin-bottom: 20px;">Créer un lien pour procédure</h2>
    <form action="{{ route('procedures.store') }}" method="POST" style="margin-bottom: 10px;">
        @csrf <!-- Token CSRF pour Laravel -->
        <div class="form-group" style="margin-bottom: 10px;">
            <label for="nom" style="display: block; margin-bottom: 5px;">Titre:</label>
            <input type="text" id="nom" name="nom" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <div class="form-group">
            <label for="liens" style="display: block; margin-bottom: 5px;">Lien Web:</label>
            <input type="url" id="liens" name="liens" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <input type="submit" value="Créer" style="width: 100%; padding: 10px; border: none; border-radius: 4px; background-color: #007bff; color: white; cursor: pointer;">
    </form>
</div> --}}



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