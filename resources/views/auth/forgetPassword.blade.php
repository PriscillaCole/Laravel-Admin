@extends('layout')

@section('content')
    <div class="container">
  
        <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @elseif(session()->has('error'))
            <div class="alert alert-success">
                {{ session()->get('error') }}
            </div>
              @endif
            <p class="text-center">Please enter your email</p>
            
            <form action="{{ route('forget.password.post') }}" method="post">
            @csrf
        
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                 </div>
                <input name="email" class="form-control" placeholder="Email address" type="email">
            </div> <!-- form-group// -->                                     
            <div class="form-group">
             <button type="submit" class="btn btn-primary btn-block"> Send  </button>
            </div> <!-- form-group// -->      
                                                                         
        </form>
        <div class="form-group text-end">
            <a href="{{ url('admin/auth/login') }}" class="nav-link"> Back to Login</a>
        </div>
        </article>
        </div> <!-- card.// -->
        
        </div> 
        <!--container end.//-->
@endsection
