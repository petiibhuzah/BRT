@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="card ">
        <div class="card-header text-center">{{ __('Source Destinations') }}</div>
        <div class="card table-responsive">
            <table class="table table-hover table-striped table-light">
                <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Trash</th>
                </thead>
                <tbody>
                @if(count($source_destinations) > 0)
                    @foreach($source_destinations as $source_destination)
                        <tr>
                            <td><img src="{{url($source_destination->image)}}" alt="{{$source_destination->source_destination_name}}" width="90px" height="90px"></td>
                            <td>{{$source_destination->source_destination_name}}</td>
                            <td><a href="{{route('source_destination.edit',['id'=>$source_destination->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                            <td><a href="{{route('source_destination.destroy',['id'=>$source_destination->id])}}" class="btn btn-xs btn-danger">Trash</a></td>
                        </tr>
                        </td>
                    @endforeach
                @else
                    <th colspan="5" class="text-center">No published Posts</th>
                @endif
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
@stop