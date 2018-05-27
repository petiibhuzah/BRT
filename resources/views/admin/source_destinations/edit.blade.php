@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    @if(Auth::user()->role == 1)
                    <div class="card-header text-center">{{ __('Edit Source-Destination') }}  :{{$source_destination->source_destination_name}}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('source_destination.update',['id'=>$source_destination->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="source_destination_id" class="col-sm-4 col-form-label text-md-right">{{ __('Source-Destination Id') }}</label>

                                <div class="col-md-6">
                                    <input id="source_destination_id" type="text" class="form-control{{ $errors->has('source_destination_id') ? ' is-invalid' : '' }}" name="source_destination_id" value="{{ $source_destination->source_destination_id }}" required autofocus>

                                    @if ($errors->has('source_destination_id'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('source_destination_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="source_destination_name" class="col-sm-4 col-form-label text-md-right">{{ __('Source-Destination') }}</label>

                                <div class="col-md-6">
                                    <input id="source_destination_name" type="text" class="form-control{{ $errors->has('source_destination_name') ? ' is-invalid' : '' }}" name="source_destination_name" value="{{ $source_destination->source_destination_name }}" required autofocus>

                                    @if ($errors->has('source_destination_name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('source_destination_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Image" class="col-sm-4 col-form-label text-md-right">{{ __('Image') }}</label>
                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control" name="image">

                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="source_destination_name" class="col-sm-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $source_destination->price }}" required autofocus>

                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="source_destination_name" class="col-sm-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description" cols="10" rows="10" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description"  >{{ $source_destination->description }}"</textarea>

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Store') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @else
                        <h4>Your Not Allowed To view this Page</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
