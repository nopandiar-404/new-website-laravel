<x-guest-layout>
    <h1 class="text-center text-primary mb-5">Login Here</h1>
    @if (session("expire"))
    <p class="text-danger text-center">
        {{ session("expire") }}
    </p>
    @endif
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        @if (session()->has("status"))
        <div class="alert alert-success">
            <p class="text-center mb-0">{{ session("status") }}</p>
        </div>
        @endif
        <div class="form-floating mb-3">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="floatingEmail"
                placeholder="name@example.com" required />
            <label for="floatingEmail">Email address</label>

            @error("email")
            <p class="text-center text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control control-password-input1" id="floatingPassword"
                placeholder="Password" required />
            <i class="fa-solid fa-eye eye-icon1"></i>
            <label for="floatingPassword">Password</label>

            @error("email")
            <p class="text-center text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <input type="checkbox" name="remember" class="form-check-input me-2" />
            <label for="remember">Remember me</label>
        </div>
        <div class="mb-3 d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Login</button>
        </div>
        <div class="mb-3">
            <a href="{{ route('password.request') }}" class="text-primary">Forgot Password?</a>
        </div>
        <div class="mb-3">
            <p class="text-center">
                You don't have an account! Please
                <a href="{{ route('register') }}">Register Here</a>
            </p>
        </div>
        <div class="text-center p-1 border border-0 border-top border-bottom">
            <span class="text-secondary rounded-circle"> Or: </span>
        </div>
        <div class="text-center p-2 d-flex flex-column align-items-center">
            <p class="">Sign in with</p>
            <div class="w-50 d-flex align-items center justify-content-around">
                <div>
                    <a href="{{ route('redirect.facebook') }}" class="icon facebook text-decoration-none">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
                <div>
                    <a href="{{ route('redirect.google') }}" class="icon google text-decoration-none">
                        <i class="fa-brands fa-google"></i>
                    </a>
                </div>
                <div>
                    <a href="{{ route('redirect.github') }}" class="icon github text-decoration-none">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
