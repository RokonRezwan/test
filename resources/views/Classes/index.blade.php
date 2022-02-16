@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="p-2 text-end">
                    <a href="{{ route('classes.create') }}" class="btn btn-primary">Add class</a>
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

                        <table class="table table-bordered">
                            <tr>
                                  <th>Class ID</th>
                                  <th>Class Name</th>                                  
                                  <th width="280px">Action</th>
                            </tr>
                            @foreach($classes as $classe)
                            <tr>
                                  <td>{{ $classe->id }}</td>
                                  <td>{{ $classe->class_name }}</td>
                                  <td>
                                    <form action="{{ route('classes.destroy',$classe->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('classes.show',$classe->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('classes.edit',$classe->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                      
                        </table>
                      
                        
                    </div>
                </div>
                {{ $classes->links() }}
            </div>
        </div>
    </div>
@endsection
