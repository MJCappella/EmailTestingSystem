<!-- resources/views/emails/userMail.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Test Email</title>
</head>
<body style="display: flex;">
    <div style="flex: 1;">
        <h1>{{ $details['title'] }}</h1>
        <p>{{ $details['body'] }}</p>
    </div>
    <div style="flex: 1;">
        <img src="https://images.pexels.com/photos/11035390/pexels-photo-11035390.jpeg" alt="Laravel Logo" style="width: 100%; height: auto;">
    </div>
</body>
</body>
</html>
