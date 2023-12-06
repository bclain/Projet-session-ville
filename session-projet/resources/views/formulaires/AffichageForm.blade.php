@extends('layouts.app')

@section('Mid')
<section style="form-principal">
    <div class="contain">
        <h2>Accueil</h2>

        <div class="forms-home">
        @foreach($formulairesSoumis as $formulaire)
            <a href="{{ url('/formulaire-soumis/' . $formulaire->id) }}" class="soumisaff" style="border: 1px solid  {{ $formulaire->confirmation ? '#DBDBDB' : '#FF1F00' }};">
                <div class="infos">

                        <strong >Type de formulaire :</strong> <span>{{ $formulaire->type_forms }}</span>                    
                        <strong>Nom:</strong> <span >{{ $formulaire->nom }}</span>                                            
                </div>
                <div class="infos">
                        <strong >Date de création :</strong> <span >{{ $formulaire->created_at }}</span>
                </div>
                {!! $formulaire->confirmation 
                    ? 
                    // Si $notification->vu est vrai, afficher le SVG avec le chemin rouge
                '<div class="infos-val">
                        <strong >Validé</strong>
                
                     <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.39995 13.0125L0.699951 7.31255L2.12495 5.88755L6.39995 10.1625L15.575 0.987549L17 2.41255L6.39995 13.0125Z" fill="#1BBF00"/>
                     </svg></div> '
                    : 
                    // Sinon, afficher le SVG avec le chemin vert
                    '<div class="infos-val">
                        <strong >À valider</strong>
                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="#FF1F00"/>
                     </svg></div> '
                     !!}
            </a>
        @endforeach
         </div>   
    </div>
</section>
@endsection