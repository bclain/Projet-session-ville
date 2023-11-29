@extends('layouts.app')

@section('Mid')
@foreach ($notificationsA as $not)

{{$not->id}}
{{$not->id_user}}
{{$not->id_formulaire_soumis}}
{{$not->nom}}
{{$not->data}}


@endforeach   
@endsection



