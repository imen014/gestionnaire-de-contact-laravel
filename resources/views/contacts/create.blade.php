<!-- resources/views/contacts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Créer un Nouveau Contact</h1>

    <!-- Formulaire de création de contact -->
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <label for="email">Email :</label>
        <input type="email" name="email" required>

        <label for="message">Message :</label>
        <textarea name="message" required></textarea>

        <button type="submit">Enregistrer</button>
    </form>
@endsection
