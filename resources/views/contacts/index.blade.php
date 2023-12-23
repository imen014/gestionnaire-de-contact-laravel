<!-- resources/views/contacts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Liste des Contacts</h1>

    <!-- Afficher la liste des contacts -->
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->nom }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact->id) }}">Voir</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('contacts.create') }}">Créer un nouveau contact</a>
@endsection
