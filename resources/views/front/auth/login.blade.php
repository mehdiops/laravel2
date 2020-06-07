

@extends('front.index')
@section('content')
<section id="intro2" class="clearfix">
</section>
<main class="container main2">

    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bgcolor">
            <li class="breadcrumb-item"><a href="#">خانه</a></li>
            <li class="breadcrumb-item active" aria-current="page">ورود</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-center">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title"/>ایمیل</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="title"/>رمز عبور</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="title"/>مرا به خاطر بسپار</label>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="title"/>ورود</label>
                <button type="submit" class="btn btn-success" >ورود</button>
            </div>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    بازیابی رمز عبور
                </a>
            @endif


        </form>



    </div>





</main>
@endsection

