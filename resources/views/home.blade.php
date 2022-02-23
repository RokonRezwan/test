@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="p-2 text-end">
                    <a href="{{ route('classes.index') }}" class="btn btn-primary">Class</a>
                    <a href="{{ route('students.index') }}" class="btn btn-primary">Student</a>
                </div>

                <div class="card">
                    <div class="card-header text-center fs-2">{{ __('Dashboard') }}</div>
                    
                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif 

                        {{-- <table class="table table-bordered">
                            <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Class</th>
                                  <th>Class Roll</th>
                                  <th>Details</th>
                                  <th width="280px">Action</th>
                            </tr>
                            @foreach($students as $student)
                            <tr>
                                  <td>{{ $student->id }}</td>
                                  <td>{{ $student->name }}</td>
                                  <td>{{ $student->email }}</td>
                                  <td>{{ $student->classe->class_name ?? 'None' }}</td>
                                  <td>{{ $student->class_roll }}</td>
                                  <td>{{ $student->details }}</td>
                                  <td>
                                    <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                      
                        </table> --}}
                      
                        
                    </div>
                </div>

                <div class="row">
                    @foreach ($classes as $classe)

                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Class {{ $classe->class_name }}</h5>
                          <p class="card-text">See all students of class {{ $classe->class_name }} </p>
                          <a class="btn btn-info" href="{{ route('classes.show',$classe->id) }}">Show</a>
                        </div>
                      </div>
                    </div>
                    
                    @endforeach
                    
                  </div>

                {{-- {{ $students->links() }} --}}
            </div>
        </div>
    </div>
@endsection
