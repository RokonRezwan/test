@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                  <div class="p-2 text-end">
                        <a href="{{ url('/home') }}" class="btn btn-primary">Back</a>
                  </div>
                    
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Student Information') }}</div>

                    
                    <div class="card-body">            
                            <div class="mb-3 row">
                                <strong class="col-md-4 col-form-label text-end">
                                    {{ __('Name') }} :</strong>

                                <div class="col-md-4 col-form-label">
                                    {{ $student->name }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                               <strong class="col-md-4 col-form-label text-end">
                                  {{ __('Email') }} :</strong>

                               <div class="col-md-4 col-form-label">
                                    {{ $student->email }}
                               </div>
                            </div>

                           
                            <div class="mb-3 row">
                              <strong class="col-md-4 col-form-label text-end">
                                  {{ __('Class') }} :</strong>

                              <div class="col-md-4 col-form-label">
                                  {{ $student->class }}
                              </div>
                          </div>

                          <div class="mb-3 row">
                              <strong class="col-md-4 col-form-label text-end">
                                  {{ __('Class Roll') }} :</strong>

                              <div class="col-md-4 col-form-label">
                                  {{ $student->class_roll }}
                              </div>
                          </div>

                          <div class="mb-3 row">
                              <strong class="col-md-4 col-form-label text-end">
                                  {{ __('Details') }} :</strong>

                              <div class="col-md-4 col-form-label">
                                  {{ $student->details }}
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
