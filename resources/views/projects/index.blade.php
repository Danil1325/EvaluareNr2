@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<a href="{{ route('create') }}" class="btn btn-primary">Add Project</a>
<div class="container text-center mt-3">
    <div class="row row-cols-4">
        @forelse($projects as $project)  
            
            <div class="col">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$project->name}}</h5>
                        <p class="card-text">{{$project->description}}</p>
                        <div href="#" class="card-link flex">
                            <div class="div">
                                <i class="fa-regular fa-calendar" style="color: #74C0FC;"></i>
                                {{$project->created}}
                            </div>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                {{ $project->status->name}}
                            </h6>
                        </div>
                        <a href="#" class="card-link">Another link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>               
        @empty
            <tr>
                <td collspan="6">
                    No data
                </td>
            </tr>
        @endforelse
    </div>
            
</div>
@endsection
