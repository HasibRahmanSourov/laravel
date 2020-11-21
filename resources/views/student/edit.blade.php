@extends('master')
@section('content')
   <div class="container">
       <h2>Students Information</h2>
        <form action="{{action('StudentController@update',$students->id)}}" method="post">
           {{ csrf_field() }}
           <input type="hidden" name="_method" value="PATCH">
           <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name" class="form-control" value="{{$students->name}}">
           <br><br>
           <label for="gender">Gender</label>
           <input type="radio" name="gender"  value="male" {{$students->gender=='male' ? 'checked' : ''}}>Male
           <input type="radio" name="gender"  value="female" {{$students->gender=='female' ? 'checked' : ''}}>Female
           <br><br>
           <label for="address">Address</label>
           <textarea name="address" id="address"  class="form-control">{{$students->address}}</textarea>
           <br><br>
           <label for="batch">Batch</label>
           <select name="batch" id="batch">
               <option value=""></option>
               <option value="44" {{ $students->batch == '44' ? 'selected' : ''}}>44</option>
               <option value="45" {{ $students->batch == '45' ? 'selected' : ''}}>45</option>
               <option value="46" {{ $students->batch == '46' ? 'selected' : ''}}>46</option>
               <option value="47" {{ $students->batch == '47' ? 'selected' : ''}}>47</option>
               <option value="48" {{ $students->batch == '48' ? 'selected' : ''}}>48</option>
           </select>
           <br><br>
           <input type="submit" name="submit" value="Update" class="btn btn-success">
           
       </form>
   </div>
@endsection