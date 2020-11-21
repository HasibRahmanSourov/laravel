@extends('master')
@section('content')
   <div class="container">
       <h2>Students Information</h2>
        <form action="{{url('student')}}" method="post">
           {{ csrf_field() }}
           <label for="name">Name</label>
           <input type="text" name="name" placeholder="Enter your name" class="form-control">
           <br><br>
           <label for="gender">Gender</label>
           <input type="radio" name="gender"  value="male">Male
           <input type="radio" name="gender"  value="female">Female
           <br><br>
           <label for="address">Address</label>
           <textarea name="address" id="address"  class="form-control"></textarea>
           <br><br>
           <label for="batch">Batch</label>
           <select name="batch" id="batch">
               <option value="44">44</option>
               <option value="45">45</option>
               <option value="46">46</option>
               <option value="47">47</option>
               <option value="48">48</option>
           </select>
           <br><br>
           <input type="submit" name="submit" value="Submit" class="btn btn-success">
           
       </form>
   </div>
@endsection