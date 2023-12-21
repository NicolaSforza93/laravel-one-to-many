@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>Projects edit</h1>

        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" class="p-3 w-50 m-auto">

            @csrf

            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label text-uppercase">Nome Progetto</label>
                <input type="text" class="form-control" name="name_project" id="name_project" value="{{ $project->name_project }}">
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label text-uppercase">Data Creazione</label>
                <input type="date" class="form-control" name="date_creation" value="{{ $project->date_creation }}"">
            </div>
            
            <button type="submit" class="btn btn-primary">Modifica</button>
                
        </form>
    </div>
</section>
    
@endsection