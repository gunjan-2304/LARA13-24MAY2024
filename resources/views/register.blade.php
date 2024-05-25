@extends('layouts.app')
@section('content')
    <h1 class="text-center mt-5">registration form <a href="{{route('loginroute')}}">go to login page</a></h1>
    <form method="POST" action="/user">
            @csrf
        <div class="mb-5">
            <label for="full name" class="form-label">full name</label>
            <input nmae="full name" type="text" class="form-control" id="full name" placeholder="">
         </div>
        
        <div class="mb-5">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-5">
            <label for="inputPassword5" class="form-label">Password</label>
            <input  name ="password" type="password" id="inputPassword5" class="form-control pass" aria-describedby="passwordHelpBlock">
        </div>
        <div class="mb-5">
         <label for="cpassword" class="form-label"> confirm Password</label>
         <input name="cpassword" type="password" id="cpassword" class="form-control cpass" aria-describedby="passwordHelpBlock">
        </div>
        <input type="submit" onclick=" return gunjan()" class= "btn btn-primary">
    </form>
    <script>
            function gunjan(){

                 // This is javascript code / client side

            //Get the password value
            var p = document.querySelector('.pass').value;

            console.log('p>>',p);

            //Get the password value
            var cp = document.querySelector('.cpass').value;

            console.log('cp>>',cp);

            if(p == cp){
                return true
            }else{
                alert("Password and Confirm password does not match")
            }

            //Get the cpassword value

            //Check both value and

            //If equal return true

            //else return false
            return false;
        
            }
    </script>
@endsection