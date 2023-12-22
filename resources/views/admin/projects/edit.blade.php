@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>Modifica Progetto</h1>

        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" class="p-3 w-50 m-auto">

            @csrf

            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label text-uppercase">Nome Progetto</label>
                <input type="text" required class="form-control" name="name_project" id="name_project" value="{{ old('name_project', $project->name_project) }}">
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label text-uppercase">Data Creazione</label>
                <input type="date" required class="form-control" name="date_creation" value="{{ old('date_creation', $project->date_creation) }}"">
            </div>
            
            <button type="submit" class="btn btn-primary">Modifica</button>
                
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</section>
    
@endsection