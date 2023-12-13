@extends('layouts.layout')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <form method="post">
                @method('put')
                @csrf
                <div class="card-header display-6 text-center">
                    Modifier les informations de l'étudiant.e
                </div>
                <div class="card-body">
                    <div class="control-group col-12">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $student->name }}">
                    </div>

                    <div class="control-group col-12">
                        <label for="address">Adresse</label>
                        <input type="text" id="address" name="address" class="form-control" value="{{ $student->address }}">
                    </div>

                    <div class="control-group col-12">
                        <label for="phone">Téléphone</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{ $student->phone }}">
                    </div>

                    <div class="control-group col-12">
                        <label for="email">Courriel</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ $student->email }}">
                    </div>

                    <div class="control-group col-12">
                        <label for="birthday">Date de naissance</label>
                        <input type="date" id="birthday" name="birthday" class="form-control" value="{{ $student->birthday }}">
                    </div>

                    <div class="control-group col-12">
                        <label for="city_id">Ville</label>
                        <select id="city_id" name="city_id" class="form-control">
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}" {{ $student->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <input type="submit" value="Modifier" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>@endsection