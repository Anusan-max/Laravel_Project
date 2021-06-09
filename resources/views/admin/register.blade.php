@extends('layouts.auth')

@section('content')
<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
            <div class="d-flex align-items-center h-100-vh">
                <div class="register p-5">
                    <h1 class="mb-2">Admin Register</h1>
                    <p>Welcome, Please create your account.</p>
                    <form action="{{ route('admin.register') }}" method="POST" class="mt-2 mt-sm-5">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" />

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" />

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Confirm Password</label>
                                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" />
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary text-uppercase">Sign up</button>
                            </div>
                            <div class="col-12  mt-3">
                                <p>Already have an account ?<a href="{{ route('admin.login')}}"> Sign In</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
               <img src="https://images.unsplash.com/photo-1491451231005-ec20221dd520?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" height=100% width=100%>
            </div>
        </div>
    </div>
</div>
@endsection