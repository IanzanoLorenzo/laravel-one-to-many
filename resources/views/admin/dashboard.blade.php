@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="{{ route('admin.project.index') }}" class="btn card-header h5">Progetti</a>
                        <div class="list-group list-group-flush">
                            @foreach ($projects as $project)                        
                            <a href="{{ route('admin.project.show', $project ) }}" class="list-group-item list-group-item-action"><strong class="me-3">#{{$project->id}}</strong>{{$project->project_name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-6 text-center">
                    <a href="{{ route('admin.project.index') }}" class="btn btn-primary mt-4">Lista dei progetti</a>
                </div>
                <div class="col-6 text-center">
                    <a href="{{ route('admin.project.create') }}" class="btn btn-success mt-4">Nuovo progetto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
