@extends('layouts.app')

@section('title', 'Create')

@section('content_header')
    <h1>Editeaza tara</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-6">
        <form action="{{ route('projects.update', ['project'=>$project->id]) }}" method="post">
            @method("PUT")
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"></label>
                <input type="text" id="name" name="name" class="form-control"
                    placeholder="Nume" value="{{$project->name}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"></label>
                <textarea name="description" id="description" cols="30" rows="10" value="{{$project->description}}">{{$project->description}}</textarea>
            </div>
            <div class="mb-3">
                <select name="status_id"  class="form-select form-select-sm mb-3">
                    <option value="{{ $project->status->name}}">{{ $project->status->name}}</option>
                @foreach ($status as $stat)
                    <option value="{{ $stat->id }}">{{ $stat->name }}</option>
                @endforeach
                </select>
            </div>
           
            <div class="mb-3">
                <label for="created" class="form-label"></label>
                <input type="date" id="created" name="created" class="form-control " value="{{$project->created}}">
            </div>

            <button type="submit" class="btn btn-dark">Edit</button>
        </form>
    </div>
@stop