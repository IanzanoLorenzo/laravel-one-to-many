@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="fs-4 text-secondary text-capitalize my-5">
                Modifica Progetto
            </h2>
            <div class="form-control">
                <form action="{{route('admin.project.update', $project)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group p-3">
                        <label class="control-label">Nome progetto</label>
                        <input type="text" name="project_name" id="project_name" class="form-control @error('project_name') is-invalid @enderror" placeholder="Inserisci il nome del progetto" value="{{ old('project_name') ?? $project->project_name }}">
                        @error('project_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group p-3">
                        <label class="control-label">Descrizione</label>
                        <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Inserisci la descrizione del progetto">{{ old('description') ?? $project->description }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group p-3">
                        <label class="contol-label">Autore</label>
                        <input type="text" name="creator_name" id="creator_name" class="form-control @error('creator_name') is-invalid @enderror" placeholder="Inserisci il nome dell'autore" value="{{ old('creator_name') ?? $project->creator_name}}">  
                        @error('creator_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group p-3">
                        <label class="control-label">Tipo di Progetto</label>
                        <select name="type_id" id="type_id" value="{{ old('type_id') ?? $project->type_id }}" class="form-control">
                            <option value="" disabled selected>Seleziona un tipo</option>
                            @foreach ($types as $item)
                                <option value="{{$item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group p-3">
                        <label class="control-label">Immagine</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror 
                        <img class="m-3" src="{{ asset('storage/'.$project->image) }}" alt="">
                    </div>
                    <button type="submit" class="btn btn-primary m-3">Conferma modifiche</button>  
                </form>
            </div>
        </div>
    </div>
</div>
@endsection