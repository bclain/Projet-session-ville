@extends('layouts.app')

@section('Mid')

Formulaire en attente 
        @foreach($notificationCours as $notificationC)
            @php
                $data = json_decode($notification->data, true);
            @endphp
            <li style="margin-bottom: 20px; padding: 15px; background-color: {{ $notificationC->vu ? '#f4f4f4' : '#e6f7ff' }}; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <strong style="color: #343a40;">Type forms :</strong> <span style="color: #495057;">{{ $notificationC->type_forms }}</span><br>                       
                        <strong style="color: #343a40;">Nom:</strong> <span style="color: #495057;">{{ $notificationC->nom }}</span><br>                                               
                        <strong style="color: #343a40;">Message:</strong> <span style="color: #495057;"></span><br>

                    </div>
                <div>
                        <strong style="color: #343a40;">Timestamp:</strong> <span style="color: #495057;">{{ $notificationC->created_at }}</span>
                    </div>
                </div>
            </li>
        @endforeach


@foreach($notifications as $notification)
            @php
                $data = json_decode($notification->data, true);
            @endphp
            <li style="margin-bottom: 20px; padding: 15px; background-color: {{ $notification->vu ? '#f4f4f4' : '#e6f7ff' }}; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <strong style="color: #343a40;">Type forms :</strong> <span style="color: #495057;">{{ $notification->type_forms }}</span><br>                       
                        <strong style="color: #343a40;">Nom:</strong> <span style="color: #495057;">{{ $notification->nom }}</span><br>                                               
                        <strong style="color: #343a40;">Message:</strong> <span style="color: #495057;"></span><br>

                    </div>
                <div>
                        <strong style="color: #343a40;">Timestamp:</strong> <span style="color: #495057;">{{ $notification->created_at }}</span>
                    </div>
                </div>
            </li>
        @endforeach



@endsection