@extends('layout.baseview')
@section('title','Login')
@section('style')
<style>
</style>
@endsection
@section('content')
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="card" style="width: 25rem;">
            <div class="mt-4 mb-2">
                <img class="mx-auto d-block" src="{{asset('assets\images\logo.jpg')}}" alt="logo" width="60px">
            </div>
            <div class="mt-2 mb-2">
                <h5 class="card-title text-center">Signup</h5>
            </div>
            <div class="mt-2 mb-2">
                <p class="card-title text-center">Kindly Provide Your Information for Registration</p>
            </div>
            <div class="card-body">
                <form action="{{route('signup.create')}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <label for="phone_no" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone_no" name="phone_no"
                            placeholder="Phone Number">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div>
                    <div class="mb-4">
                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"
                            placeholder="Password">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary mb-3">Login</button>
                    </div>
                    <div class="mb-4">
                        <p class="card-title text-center">Already Have an Account? <a href="{{route('login')}}"
                                style="text-decoration:none ;">Click to Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('customjs')
<script>
</script>
@endsection
