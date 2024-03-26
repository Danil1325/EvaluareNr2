@extends('layouts.app')

@section('title', 'Create')

@section('content')
<form action="{{ route('projects.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label"></label>
        <input type="text" id="name" name="name" class="form-control"
            placeholder="Nume">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label"></label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <select name="status_id" class="form-select form-select-sm mb-3"
        aria-label=".form-select-sm example">
        @foreach ($status as $stat)
        <option value="{{ $stat->id }}">{{ $stat->name }}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3">
        <label for="created" class="form-label"></label>
        <input type="date" id="created" name="created" class="form-control ">
    </div>
    <button type="submit" class="btn btn-dark">Save</button>
</form>
@stop

@section('css')

@stop

@section('js')

@stop
