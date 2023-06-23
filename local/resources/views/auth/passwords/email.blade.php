@extends('layouts.app')

@section('content')


<div class="pagetitle" align="center">
        
           
                <h1 class="h1 white text-center">Forgot Password?</h1>
           
       
    </div>

<div class="height30"></div>
<div class="container">
    <div class="">
     <div class="col-md-2"></div> 
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label para black">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control radiusoff" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn avg_very_small_button radiusoff">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <div class="col-md-2"></div> 
    </div>
</div>
@include('style')
@include('footer')
@endsection
