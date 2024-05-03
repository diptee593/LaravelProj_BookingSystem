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
                <h5 class="card-title text-center">Login</h5>
            </div>
            <div class="mt-2 mb-2">
                <p class="card-title text-center">Kindly Provide Your login Credentials</p>
            </div>
            <div class="card-body">
                <form action="{{route('login.authenticate')}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary mb-3">Login</button>
                    </div>
                    <div class="mb-4">
                        <p class="card-title text-center">Dont Have an Account? <a href="{{route('signup')}}"
                                style="text-decoration:none ;">Click to Signup</a></p>
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
