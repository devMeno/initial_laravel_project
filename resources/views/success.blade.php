@extends('base')

@section('content')
    <h1>Elève ajouté!</h1>

    <h2>Liste des élèves</h2>
    @foreach ($students as $student)
        <p>Il s'appelle {{ $student->first_name }} {{ $student->last_name }} et il a {{ $student->age }} ans. </p>
        <a href="{{ route('index.student.create') }}">Ajouter un nouvel élève</a>
    @endforeach
@endsection
