@extends('admin.auth.master')

@section('title')
    Register
@endsection

@section('body')
    <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
            <div class="card-body">
                @foreach($errors->all() as $error)
                    <span class="text-danger">{{$error}}</span><br>
                @endforeach
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputFullName" type="text" name="name" placeholder="Enter your full name" />
                                <label for="inputFullName">Full name</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                        <label for="inputEmail">Email address</label>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" />
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPasswordConfirm" type="password" name="password_confirmation" placeholder="Confirm password" />
                                <label for="inputPasswordConfirm">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" value="Create Account"></div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{route('login')}}">Have an account? Go to login</a></div>
            </div>
        </div>
    </div>
@endsection
