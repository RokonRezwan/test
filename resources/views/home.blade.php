@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="p-2 text-end">
                    <a href="{{ route('create') }}" class="btn btn-primary">Add Student</a>
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
                                <div class="alart alart-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif  

                        <table class="table table-bordered">
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
                                  <td>{{ $student->class }}</td>
                                  <td>{{ $student->class_roll }}</td>
                                  <td>{{ $student->details }}</td>
                            </tr>
                            @endforeach
                      
                        </table>
                      
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
