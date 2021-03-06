@extends('layouts.app')

@section('content')
<div class="container">
    <form action ="/profile/{{$user->id}}" enctype = "multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit profile</h1>
                       </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                    <input id="title"
                           type="text"
                           class="form-control @error('title') is-invalid @enderror"
                           name="title"
                           value="{{ old('title') ?? $user->profile->title}}" autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                        <input id="description"
                               type="text"
                               class="form-control @error('description') is-invalid @enderror"
                               name="description"
                               value="{{ old('description')??$user->profile->description }}"
                               autocomplete="description" autofocus>

                        @error('description')
                    </div>
                <div>
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong>
                      </span>
                        @enderror
                    </div>
                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">Url</label>

                            <input id="url"
                                   type="text"
                                   class="form-control @error('url') is-invalid @enderror"
                                   name="url"
                                   value="{{ old('url') ?? $user->profile->url}}" autocomplete="url" autofocus>

                            @error('url')
                            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                      </span>
                            @enderror
                        </div>
                    <div class ="row">
                        <label for = "image" class="col-md-4 colform-label">Profile image</label>

                        <input type = "file"  class="form-control-file" id="image" name="image">



                        @if($errors->has('image'))
                            <strong>{{$errors->first('image')}}</strong>
                        @endif
                    </div>
                    <div class="row pt-5">
                        <button class="btn btn-primary">Save Profile </button>
                    </div>
                </div>
            </div>
    </form>
</div>
@endsection
