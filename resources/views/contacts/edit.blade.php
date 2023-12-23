<!-- resources/views/contacts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Modifier le Contact</h1>

    <!-- Formulaire de modification de contact -->
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="{{ $contact->nom }}" required>

        <label for="email">Email :</label>
        <input type="email" name="email" value="{{ $contact->email }}" required>

        <label for="message">Message :</label>
        <textarea name="message" required>{{ $contact->message }}</textarea>

        <button type="submit">Enregistrer</button>
    </form>
@endsection
