@extends('layouts.app')

@section('title', 'Page Title')



@section('content')
<a href="{{ route('create') }}" class="btn btn-primary">Add Project</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nume</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$project->name}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{ $project->status->name}}</td>
                    <td>{{ $project->created }}</td>
                    
                </tr>
            @empty
                <tr>
                    <td collspan="6">
                        No data
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
  
@stop