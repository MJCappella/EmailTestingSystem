<!-- resources/views/sendEmail.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <script>
            window.onload = function() {
                alert("{{ $errors->first() }}");
            };
        </script>
    @endif

    <fieldset style="margin: 0 auto; width: 50%; background-color: #f2f2f2; padding: 20px;">
        <legend style="color: #333; font-weight: bold;">Send Test Email</legend>
        <form action="{{ route('send.email') }}" method="POST">
            @csrf
            <h2 style="color: #333;">Send Email</h2>
            <label for="email" style="color: #333;">Email:</label>
            <input type="email" name="email" id="email" style="padding: 5px; margin-bottom: 10px;">
            <button type="submit" style="background-color: #333; color: #fff; padding: 10px 20px; border: none; cursor: pointer;">Send Email</button>
        </form>
    </fieldset>
</body>
</html>
