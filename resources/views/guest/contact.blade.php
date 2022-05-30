@extends('layouts.app');

@section('content')
<div class="container mx-auto">
    <div class="row">
        <div class="col-6">
            <h1>Contattaci:</h1>
            <form action="{{route("guest.contact")}}" method="post">
                @csrf
                @method("POST")
                <div class="mb-3">
                <label for="guestName">Inserisci il tuo nome</label><br>
                <input type="text" id="guestName" name="guestName">
                </div>
                <div class="mb-3">
                <label for="guestEmail">Inserisci la tua migliore email</label><br>
                <input type="email" id="guestEmail" name="guestEmail">
                </div>
                <div class="mb-3">
                <label for="guestMessage">Scrivi il tuo messaggio</label>
                <textarea class="form-control w-50" type="text" id="guestMessage" name="guestMessage"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Invia</button>
             </form>
        </div>
    </div>
</div>
@endsection
