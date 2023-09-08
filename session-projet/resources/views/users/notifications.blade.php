<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notifications</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">

<div style="width: 80%; margin: 50px auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; margin-bottom: 20px;">Notifications</h1>
    <ul style="list-style-type: none; padding: 0;">
        @foreach($notifications as $notification)
            <li style="margin-bottom: 20px; padding: 10px; background-color: {{ $notification->vu ? '#f4f4f4' : '#e6f7ff' }};">
                <strong>User ID:</strong> {{ $notification->id_user }}<br>
                <strong>Data:</strong> {{ json_encode($notification->data) }}<br>
                <strong>Seen:</strong> {{ $notification->vu ? 'Yes' : 'No' }}<br>
                <strong>Timestamp:</strong> {{ $notification->created_at }}
            </li>
        @endforeach
    </ul>
</div>

</body>
</html>
