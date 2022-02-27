@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                  <div class="p-2 text-end">
                        <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
                  </div>
                    
                <div class="card">
                    <div class="card-header fw-bold">{{ __('Update Student Information') }}</div>

                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('students.update',$student->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-end">
                                    {{ __('Name') }} :
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $student->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-end">
                                    {{ __('E-Mail Address') }} :
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $student->email }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           
                            <div class="mb-3 row">
                               <label for="class" class="col-md-4 col-form-label text-end">
                                    {{ __('Class') }} :
                               </label>

                               <div class="col-md-6">
                                  <input id="class" type="number" class="form-control @error('class') is-invalid @enderror"
                                      name="class" value="{{ $student->class }}" required autocomplete="class" autofocus>

                                  @error('class')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>
                             </div>

                             <div class="mb-3 row">
                              <label for="class_roll" class="col-md-4 col-form-label text-end">
                                  {{ __('Class Roll') }} :
                              </label>

                              <div class="col-md-6">
                                  <input id="class_roll" type="number" class="form-control @error('class_roll') is-invalid @enderror"
                                      name="class_roll" value="{{ $student->class_roll }}" required autocomplete="class_roll" autofocus>

                                  @error('class_roll')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>
                             </div>

                             <div class="mb-3 row">
                              <label for="details" class="col-md-4 col-form-label text-end">
                                  {{ __('Details') }} :
                              </label>

                              <div class="col-md-6">
                                  <input id="details" type="text" class="form-control @error('details') is-invalid @enderror"
                                      name="details" value="{{ $student->details }}" required autocomplete="details" autofocus>

                                  @error('details')
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
