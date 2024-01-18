@extends('base')

@section('content')
    <h1>Enrégistrer un élève</h1>
    <div>

        <form action="{{ route('index.student.store', ['student' => $student]) }}" method="POST">

            @csrf

            <input type="text" name="first_name" placeholder="First name" value="{{ $student->first_name }}">
            <input type="text" name="last_name" placeholder="Last name" value="{{ $student->last_name }}">
            <input type="number" name="age" placeholder="Age" value="{{ $student->age }}">
            <select name="sex" id="" value="{{ $student->sex }}">
                <option value="choice">Votre sexe</option>
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
            </select>
            <input type="text" name="class" placeholder="Class" value="{{ 0 }}">
            <input type="checkbox" value="{{ 1 }}" name="isStudious" id="stud">
            <label for="stud">Studieux ?</label>
            <input type="submit">
        </form>
    </div>
@endsection
