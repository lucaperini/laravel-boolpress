<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail from Boolpress</title>
</head>
<body>
    <h2>{{ $guestName }} ha inviato un messaggio al sito Boolpress</h2>
    <h4>La mail per contattarl* è: {{ $guestEmail }}</h4>
    <p>Questo è il testo del messaggio che hai ricevuto:<br>
        <p>{{$guestMessage}}</p>
    </p>

</body>
</html>
