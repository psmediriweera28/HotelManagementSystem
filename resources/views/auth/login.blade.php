@section('title', 'LogIn')

<x-guest-layout>

<style>

body{

    background:
    linear-gradient(rgba(0,0,0,0.75),
    rgba(0,0,0,0.75)),

    /* background-color: rgb(14, 75, 37); */

    url('{{ asset('images/home3.jpg') }}');

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

    min-height: 100vh;

    display: flex;

    justify-content: center;

    align-items: center;
}

.login-card{

    background: rgba(0,0,0,0.65);

    backdrop-filter: blur(14px);

    border-radius: 25px;

    padding: 30px;

    width: 100%;

    max-width: 420px;

    box-shadow: 0 15px 35px rgba(0,0,0,0.5);
}

.login-title{

    font-family: 'Playfair Display', serif;

    font-size: 20px;

    font-weight: bold;

    color: white;

    margin-top: 10px;
}

.login-subtitle{

    color: rgba(255,255,255,0.75);

    margin-top: 10px;

    margin-bottom: 35px;

    font-size: 10px;
}

.login-label{

    color: white;

    font-weight: 500;

    margin-bottom: 8px;

    display: block;
}

.login-input{

    width: 100%;

    border-radius: 12px;

    border: 1px solid rgba(255,255,255,0.2);

    padding: 14px;

    background: rgba(255,255,255,0.12);

    color: white;

    font-weight: 500;

    outline: none;

    transition: 0.3s ease;
}

.login-input:focus{

    border: 1px solid #22c55e;

    box-shadow: 0 0 12px rgba(34,197,94,0.6);
}

.login-input::placeholder{

    color: rgba(255,255,255,0.6);
}

.login-btn{

    background: #16a34a;

    border: none;

    border-radius: 12px;

    padding: 12px 30px;

    color: white;

    font-weight: bold;

    transition: 0.3s ease;
}

.login-btn:hover{

    background: #15803d;

    transform: translateY(-3px);
}

.login-link{

    color: #22c55e;

    text-decoration: none;

    transition: 0.3s ease;
}

.login-link:hover{

    color: white;
}

.remember-text{

    color: white;

    margin-left: 8px;
}

</style>

<div class="login-card">


<!-- Logo -->
<div class="text-center mb-4">

    <img src="{{ asset('images/logo.png')}}"
    alt="Hotel Logo"

    class="d-block mx-auto mb-3"

    style="
    width:75px;
    height:75px;
    object-fit:cover;
    border-radius:50%;
    
    ">

    <h1 class="login-title">
        DIO Green Hilltop
    </h1>

    <p class="login-subtitle">
        Luxury Hotel Management System
    </p>

</div>

<!-- Session Status -->
<x-auth-session-status
class="mb-4"
:status="session('status')" />

<!-- Login Form -->
<form method="POST"
action="{{ route('login') }}">

    @csrf

    <!-- Email -->
    <div class="mb-4">

        <label
        for="email"

        class="login-label">

            Email Address

        </label>

        <input
        id="email"

        type="email"

        name="email"

        value="{{ old('email') }}"

        placeholder="Enter your email"

        required autofocus

        class="login-input">

        @error('email')

            <div class="text-danger mt-2">

                {{ $message }}

            </div>

        @enderror

    </div>

    <!-- Password -->
    <div class="mb-4">

        <label
        for="password"

        class="login-label">

            Password

        </label>

        <input
        id="password"

        type="password"

        name="password"

        placeholder="Enter your password"

        required

        class="login-input">

        @error('password')

            <div class="text-danger mt-2">

                {{ $message }}

            </div>

        @enderror

    </div>

    <!-- Remember -->
    <div class="mb-4">

        <label>

            <input
            type="checkbox"

            name="remember">

            <span class="remember-text">
                Remember Me
            </span>

        </label>

    </div>

    <!-- Buttons -->
    <div class="d-flex justify-content-between align-items-center">

        @if (Route::has('password.request'))

            <a
            href="{{ route('password.request') }}"

            class="login-link">

                Forgot Password?

            </a>

        @endif

        <button
        type="submit"

        class="login-btn">

            LOG IN

        </button>

    </div>

</form>


</div>

</x-guest-layout>
