@extends('layouts.app')

@section('Mid')
@foreach ($notifications as $not)

{{$not->id}}
{{$not->id_user}}
{{$not->id_formulaire_soumis}}
@endforeach   
@endsection



