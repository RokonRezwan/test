@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                  <div class="p-2 text-end">
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                  </div>
                    
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Update Class Information') }}</div>

                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('classes.update',$classe->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3 row">
                                <label for="class_name" class="col-md-4 col-form-label text-end">
                                    {{ __('Class Name') }} :
                                </label>

                                <div class="col-md-6">
                                    <input id="class_name" type="text" class="form-control @error('class_name') is-invalid @enderror"
                                        name="class_name" value="{{ $classe->name }}" required autocomplete="class_name" autofocus>

                                    @error('class_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
