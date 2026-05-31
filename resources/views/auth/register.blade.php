@section('title', 'Sign Up')

<x-guest-layout>

<style>

body{

    background:
    linear-gradient(rgba(0,0,0,0.75),
    rgba(0,0,0,0.75)),

    url('{{ asset('images/home3.jpg') }}');

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

    min-height: 100vh;

    display: flex;

    justify-content: center;

    align-items: center;
}

.register-card{

    background: rgba(0,0,0,0.65);

    backdrop-filter: blur(14px);

    border-radius: 25px;

    padding: 30px;

    width: 100%;

    max-width: 430px;

    box-shadow: 0 15px 35px rgba(0,0,0,0.5);
}

.register-title{

    font-family: 'Playfair Display', serif;

    font-size: 20px;

    font-weight: bold;

    color: white;

    margin-top: 10px;
}

.register-subtitle{

    color: rgba(255,255,255,0.75);

    margin-top: 8px;

    margin-bottom: 30px;

    font-size: 10px;
}

.register-label{

    color: white;

    font-weight: 500;

    margin-bottom: 8px;

    display: block;
}

.register-input{

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

.register-input:focus{

    border: 1px solid #22c55e;

    box-shadow: 0 0 12px rgba(34,197,94,0.6);
}

.register-input::placeholder{

    color: rgba(255,255,255,0.6);
}

.register-btn{

    background: #16a34a;

    border: none;

    border-radius: 12px;

    padding: 12px 28px;

    color: white;

    font-weight: bold;

    transition: 0.3s ease;
}

.register-btn:hover{

    background: #15803d;

    transform: translateY(-3px);
}

.register-link{

    color: #22c55e;

    text-decoration: none;

    transition: 0.3s ease;
}

.register-link:hover{

    color: white;
}

</style>

<div class="register-card">


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

    <h1 class="register-title">
        DIO Green Hilltop
    </h1>

    <p class="register-subtitle">
        Create Your Account
    </p>

</div>

<!-- Register Form -->
<form method="POST"
action="{{ route('register') }}">

    @csrf

    <!-- Name -->
    <div class="mb-4">

        <label
        for="name"

        class="register-label">

            Full Name

        </label>

        <input
        id="name"

        type="text"

        name="name"

        value="{{ old('name') }}"

        placeholder="Enter your name"

        required autofocus

        class="register-input">

        @error('name')

            <div class="text-danger mt-2">

                {{ $message }}

            </div>

        @enderror

    </div>

    <!-- Email -->
    <div class="mb-4">

        <label
        for="email"

        class="register-label">

            Email Address

        </label>

        <input
        id="email"

        type="email"

        name="email"

        value="{{ old('email') }}"

        placeholder="Enter your email"

        required

        class="register-input">

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

        class="register-label">

            Password

        </label>

        <input
        id="password"

        type="password"

        name="password"

        placeholder="Enter your password"

        required

        class="register-input">

        @error('password')

            <div class="text-danger mt-2">

                {{ $message }}

            </div>

        @enderror

    </div>

    <!-- Confirm Password -->
    <div class="mb-4">

        <label
        for="password_confirmation"

        class="register-label">

            Confirm Password

        </label>

        <input
        id="password_confirmation"

        type="password"

        name="password_confirmation"

        placeholder="Confirm your password"

        required

        class="register-input">

        @error('password_confirmation')

            <div class="text-danger mt-2">

                {{ $message }}

            </div>

        @enderror

    </div>

    <!-- Bottom -->
    <div class="d-flex justify-content-between align-items-center">

        <a
        href="{{ route('login') }}"

        class="register-link">

            Already registered?

        </a>

        <button
        type="submit"

        class="btn register-btn">

            SIGN UP

        </button>

    </div>

</form>


</div>

</x-guest-layout>
