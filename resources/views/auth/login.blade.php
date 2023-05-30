@extends('auth.layouts.app')
  
@section('content')
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{ URL::to('/public/white/img/pepohonan.jpg') }}" alt="Login image" class="img-fluid" style="object-fit: cover; object-position: left;">
                </div>
                <div class="col-sm-6 text-black p-5">

                    <div class="px-5 ms-xl-4">
                        <img src="{{ URL::to('/public/logo.png') }}">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <span class="h1 fw-bold mb-0">KLHK</span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form style="width: 23rem;" action="{{ route('login.post') }}" method="POST">
                            @csrf

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                            <div class="form-outline mb-4">
                                <input type="text" id="email_address" class="form-control form-control-lg" name="email" required autofocus />
                                <label class="form-label" for="email_address">Email address</label>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example28" name="password" class="form-control form-control-lg" required />
                                <label class="form-label" for="form2Example28">Password</label>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection