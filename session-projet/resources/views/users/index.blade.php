@extends('layouts.app')

@section('Mid')
    <section style="form-principal">
        <div class="contain">
            <h2>Bonjour{{ Session::has('usager') ? ', ' . Session::get('usager')['nom'] : '' }}</h2>

            <div class="line">
                <h4 style="">Remplir un formulaire</h4>
                <!--Pour l'admin-->
                @if(Session::has('usager') && Session::get('usager')['droit_admin'] == 'o')
                    <button onclick="location.href='/formulaires/ajout'" class="btn-base">Ajouter un formulaire</button>
                @endif
            </div>
            <div class="forms-home">
                @foreach ($formulaire as $form)
                <div class="form-it"> 
                    <a href="{{ url('/formulaires/' . $form->id) }}">
                    <svg width="22" height="27" viewBox="0 0 22 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M9.625 21.6H12.375V17.55H16.5V14.85H12.375V10.8H9.625V14.85H5.5V17.55H9.625V21.6ZM2.75 27C1.99375 27 1.34613 26.7354 0.807127 26.2062C0.268127 25.677 -0.000914332 25.0416 2.33447e-06 24.3V2.7C2.33447e-06 1.9575 0.269502 1.32165 0.808502 0.792452C1.3475 0.263252 1.99467 -0.000897708 2.75 2.29202e-06H13.75L22 8.1V24.3C22 25.0425 21.7305 25.6783 21.1915 26.2075C20.6525 26.7367 20.0053 27.0009 19.25 27H2.75ZM12.375 9.45H19.25L12.375 2.7V9.45Z"
                        fill="#597383" />
                    </svg>
                    <p>{{$form->type_forms}}</p>
                    </a>
                    @if(Session::has('usager') && Session::get('usager')['droit_admin'] == 'o')
                    <form action="{{ route('formulaires.destroy', $form->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce formulaire ?');">Supprimer</button>
                    </form>
                @endif
                </div>
            @endforeach
            </div>  
            
                <div class="line">
                    <h4 style="">Liens procédures</h4>

                <!--Pour l admin -->
                @if(Session::has('usager') && Session::get('usager')['droit_admin'] == 'o')
                            <button onclick="location.href='/creerProcedure'" class="btn-base">Ajouter une procédure</button>                        
                @endif

                </div>
                <div class="liens-home">
                    
                    @foreach ($procedures as $procedure)
                    <div  class="lien-it">
                        <a href="{{ $procedure->liens }}">
                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.6875 2.125H7.0625C7.31114 2.125 7.5496 2.22871 7.72541 2.41332C7.90123 2.59792 8 2.8483 8 3.10938C8 3.37045 7.90123 3.62083 7.72541 3.80543C7.5496 3.99004 7.31114 4.09375 7.0625 4.09375H2.6875C2.60462 4.09375 2.52513 4.12832 2.46653 4.18986C2.40792 4.25139 2.375 4.33485 2.375 4.42188V15.5781C2.375 15.7592 2.515 15.9062 2.6875 15.9062H13.3125C13.3954 15.9062 13.4749 15.8717 13.5335 15.8101C13.5921 15.7486 13.625 15.6651 13.625 15.5781V10.9844C13.625 10.7233 13.7238 10.4729 13.8996 10.2883C14.0754 10.1037 14.3139 10 14.5625 10C14.8111 10 15.0496 10.1037 15.2254 10.2883C15.4012 10.4729 15.5 10.7233 15.5 10.9844V15.5781C15.5 16.1873 15.2695 16.7715 14.8593 17.2023C14.4491 17.633 13.8927 17.875 13.3125 17.875H2.6875C2.10734 17.875 1.55094 17.633 1.1407 17.2023C0.730468 16.7715 0.5 16.1873 0.5 15.5781V4.42188C0.5 3.154 1.48 2.125 2.6875 2.125ZM11.255 0.812501H16.4375C16.5204 0.812501 16.5999 0.847071 16.6585 0.908606C16.7171 0.970142 16.75 1.0536 16.75 1.14063V6.58225C16.7501 6.64723 16.7318 6.71079 16.6975 6.76485C16.6632 6.81892 16.6143 6.86107 16.5572 6.88595C16.5 6.91084 16.4371 6.91734 16.3764 6.90463C16.3157 6.89192 16.26 6.86057 16.2162 6.81456L14.2875 4.78938L9.6 9.71125C9.42217 9.88504 9.18711 9.97967 8.94421 9.97527C8.70132 9.97086 8.4695 9.86776 8.2975 9.68763C8.12595 9.50702 8.02775 9.26362 8.02356 9.00858C8.01936 8.75354 8.10949 8.50672 8.275 8.32L12.9625 3.39813L11.0338 1.37294C10.9899 1.32705 10.9601 1.26853 10.948 1.2048C10.9359 1.14107 10.9421 1.07501 10.9658 1.01498C10.9895 0.954948 11.0296 0.903659 11.0811 0.867612C11.1326 0.831565 11.1931 0.812384 11.255 0.812501Z" fill="#0076D5"/>
                            </svg>
                            <h5>{{ $procedure->nom }}</h5>
                
                        </a>
                                  <!-- Bouton de suppression pour les admins -->
                    @if(Session::has('usager') && Session::get('usager')['droit_admin'] == 'o')
                    <form action="{{ route('procedures.destroy', $procedure->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette procédure ?');">Supprimer</button>
                    </form>
                @endif
                </div>
                    
                @endforeach
            </div>
            
        </div>
    </section>
@endsection
