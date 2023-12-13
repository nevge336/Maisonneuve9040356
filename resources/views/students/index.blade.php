@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            Cliquez sur un nom pour plus de détails!
        </div>
        <div class="col-4">
            <a href="{{route('students.create')}}" class="btn btn-primary">Ajouter</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Liste des étudiants</h4>
                </div>
                <div class="card-body">
                    <ul>
                        @forelse($students as $student)
                        <li><a href="{{ route('students.show', $student->id)}}">{{ $student->name }}</a></li>
                        @empty
                        <li class="text-danger">Aucun étudiant n'est inscrit !</li>
                        @endforelse
                    </ul>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection