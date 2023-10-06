<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notifications</title>
</head>
<body style="font-family: 'Arial', sans-serif; background-color: #f8f9fa; margin: 0; padding: 0;">

<div style="width: 80%; margin: 50px auto; background-color: #ffffff; padding: 20px; border-radius: 12px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; margin-bottom: 20px; color: #343a40;">Notifications</h1>
    <ul style="list-style-type: none; padding: 0;">
        @foreach($notifications as $notification)
            @php
                $data = json_decode($notification->data, true);
            @endphp
            <li style="margin-bottom: 20px; padding: 15px; background-color: {{ $notification->vu ? '#f4f4f4' : '#e6f7ff' }}; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <strong style="color: #343a40;">User ID:</strong> <span style="color: #495057;">{{ $notification->id_user }}</span><br>
                        <strong style="color: #343a40;">Message:</strong> <span style="color: #495057;">{{ $data['message'] }}</span><br>
                        <strong style="color: #343a40;">Type:</strong> <span style="color: {{ $data['type'] === 'info' ? '#17a2b8' : '#dc3545' }};">{{ ucfirst($data['type']) }}</span><br>
                        <strong style="color: #343a40;">Seen:</strong> <span style="color: {{ $notification->vu ? '#28a745' : '#dc3545' }};">{{ $notification->vu ? 'Yes' : 'No' }}</span><br>
                    </div>
                    <div>
                        <strong style="color: #343a40;">Timestamp:</strong> <span style="color: #495057;">{{ $notification->created_at }}</span>
                        
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

</body>
</html>
