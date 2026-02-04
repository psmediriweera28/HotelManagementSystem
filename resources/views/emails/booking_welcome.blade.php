<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to DIO Green Hilltop</title>
</head>
<body>
    <p>Hi {{ $user->name }},</p>

    <p>Thank you for your booking at DIO Green Hilltop.</p>

    <p><strong>Booking details:</strong></p>
    <ul>
        <li>Check-in: {{ $booking->check_in }}</li>
        <li>Check-out: {{ $booking->check_out }}</li>
        <li>Guests: {{ $booking->guests }}</li>
    </ul>

    <p><strong>Your login details:</strong></p>
    <ul>
        <li>Email: {{ $user->email }}</li>
        <li>Password: {{ $password }}</li>
    </ul>

    <p>You can log in here: 
        <a href="{{ url('/login') }}">{{ url('/login') }}</a>
    </p>

    <p>Please change your password after logging in.</p>
</body>
</html>
