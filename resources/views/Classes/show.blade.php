@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                  <div class="p-2 text-end">
                        <a href="{{ route('classes.index') }}" class="btn btn-primary">Back</a>
                  </div>
                    
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Class Information') }}</div>

                    
                    <div class="card-body">            
                            <div class="mb-3 row">
                                <strong class="col-md-4 col-form-label text-end">
                                    {{ __('Class Name') }} :</strong>

                                <div class="col-md-4 col-form-label">
                                    {{ $classe->class_name }}
                                </div>
                            </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
