@extends('master')
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Gender</td>
                <td>Address</td>
                <td>Bacth</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $student)
            <tr>
            <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->batch}}</td>
                <td><a href="{{action('StudentController@edit',$student->id)}}" class="btn btn-success">Edit</a></td>
                <td>
                <form action="{{action('StudentController@destroy',$student->id)}}" method="POST">
                    {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                
            </tr>
            @endforeach
            
        </tbody>

    </table>
@endsection