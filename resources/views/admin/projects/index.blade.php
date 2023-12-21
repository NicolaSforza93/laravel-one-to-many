@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h1>Projects index</h1>
        <table class="table table-striped table-hover border">
            <thead>
              <tr>
                <th scope="col">Nome Progetto</th>
                <th scope="col">Data Creazione</th>
                <th scope="col">
                    <button class="btn btn-success btn-sm">
                        <a href="{{ route('admin.projects.create') }}" class="text-white text-decoration-none">Nuovo</a>
                    </button>
                </th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr>
                    <td>
                        <a href="{{ route('admin.projects.show', $project->id) }}">
                            {{ $project->name_project }}
                        </a>
                    </td>
                    <td>{{ $project->date_creation }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-white text-decoration-none">Modifica</a>
                        </button>
                    </td>
                    <td>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">

                            @csrf

                            @method('DELETE')

                            <input type="submit" class="btn btn-danger btn-sm" value="Cancella">
                        
                        </form>
                    </td>
                  </tr>
                @empty
                    <tr>
                        <td>Non ci sono Progetti</td>    
                    </tr>        
                @endforelse
            </tbody>
          </table>
    </div>
</section>
    
@endsection