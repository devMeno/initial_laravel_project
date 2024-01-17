@extends('base')

@section('content')
    <h1>Enrégistrer un élève</h1>
    <div>
        <form action="">
            <input type="text" name="firstName" placeholder="First name">
            <input type="text" name="lastName" placeholder="Last name">
            <input type="number" name="age" placeholder="Age">
            <select name="sex" id="">
                <option value="choice">Votre sexe</option>
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
            </select>
            <input type="text" name="class" placeholder="Class">
            <input type="radio" name="isStud" id="stud">
            <label for="stud">Studieux ?</label>
            <input type="submit">
        </form>
    </div>
@endsection
