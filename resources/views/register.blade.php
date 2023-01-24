@extends('layout')

@section('content')
    <div class="container">
  
        <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <p class="text-center">Get started with your free account</p>
            <p>
                <a href="#" class="btn btn-block btn-twitter"> <i class="fab fa-google"></i>   Login via Google</a>
            </p>
            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p>
        
            <form action="{{ route('register') }}" method="post">
        
            @csrf
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input name="name" class="form-control" placeholder="Full name" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                 </div>
                <input name="email" class="form-control" placeholder="Email address" type="email">
            </div> <!-- form-group// -->
            {{-- <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <select class="custom-select" style="max-width: 80px;">
                    <option selected="">+256</option>
                    <option value="1">+255</option>
                    <option value="2">+259</option>
                    <option value="3">+257</option>
                </select>
                <input name="phone_number" class="form-control" placeholder="Phone number" type="tel">
            </div> <!-- form-group// --> --}}
            {{-- <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                </div>
                <select name="role" class="form-control">
                    <option selected=""> Select Usage</option>
                    <option value="customer">Customer</option>
                    <option value="vendor">Vendor</option>
                </select>
            </div> <!-- form-group end.// --> --}}
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="password"class="form-control" placeholder="Create password" type="password">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="password_1" class="form-control" placeholder="Re-type password" type="password">
            </div> <!-- form-group// -->                                      
            <div class="form-group">
                {{-- <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('Submit') }}</button> --}}
             <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
            </div> <!-- form-group// -->      
            <p class="text-center">Have an account? <a href="#">Log In</a> </p>                                                                 
        </form>
        </article>
        </div> <!-- card.// -->
        
        </div> 
        <!--container end.//-->
@endsection
