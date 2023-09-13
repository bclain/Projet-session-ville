
@extends('layouts.app')
 
@section('Mid')


<section style="">
    <h1 style="">Welcome to the Homepage</h1>
    <p style="">
        This is a simple homepage. You can navigate to different sections of the website from here.
    </p>
    <ul style="">
        <li ><a href="/" style="text-decoration: none; color: #007bff;">Home</a></li>
        <li style=""><a href="/connexion" style="text-decoration: none; color: #007bff;">Connexion</a></li>
        <li style=""><a href="/notifications" style="text-decoration: none; color: #007bff;">Notifications</a></li>
        <li style=""><a href="/ajoutFormulaire" style="text-decoration: none; color: #007bff;">Ajout Formulaire</a></li>
        <li style=""><a href="/formulaires" style="text-decoration: none; color: #007bff;">Formulaires</a></li>
    </ul>
</section>

@endsection
