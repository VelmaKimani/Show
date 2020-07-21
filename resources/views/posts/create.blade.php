@extends('layouts.app')

@section('content')
<div class="container">
<form action="/p" enctype="multipart/form-data" method="POST">

    @csrf

<div class="row col-8 offeset-2">
    <h2 > Add a new Post </h2>
</div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                            
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>      
                                                         
                        <div class="row" style="text-align: centre">
                    <label for="image" class="col-md-4 col-form-label"> Post Image </label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                                 <strong>{{$errors->first('image')}}</strong>
                    @endif

                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary"> Post </button>
                </div>

            </div>
     

    

</div>
@endsection
