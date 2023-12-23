<!-- resources/views/contacts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Détails du Contact</h1>

    <p><strong>Nom:</strong> {{ $contact->nom }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Message:</strong> {{ $contact->message }}</p>

    <a href="{{ route('contacts.index') }}">Retour à la liste des contacts</a>
@endsection
