<x-guest-layout>
    <h1 class="text-center text-primary mb-5">Register Here</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="floatingName"
                placeholder="Usename" required />
            <label for="floatingName">Username</label>
            @error("name")
            <p class="text-center text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="floatingEmail"
                placeholder="name@example.com" required />
            <label for="floatingEmail">Email address</label>
            @error("email")
            <p class="text-center text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-floating mb-3 signup-input">
            <input type="password" name="password" class="form-control control-password-input1" id="floatingPassword1"
                placeholder="Password" required />
            <i class="fa-solid fa-eye eye-icon1"></i>
            <label for="floatingPassword">Password</label>
            @error("password")
            <p class="text-center text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control control-password-input2"
                id="floatingPassword2" placeholder="Password" required />
            <i class="fa-solid fa-eye eye-icon2"></i>
            <label for="floatingPassword">Confirm Password</label>
            @error("password_confirmation")
            <p class="text-center text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3 d-grid">
            <button type="submit" class="btn btn-primary btn-lg fw-bold">Sign Up</button>
        </div>

        <div class="mb-3">
            <p class="text-center">
                Already have an account! Please
                <a href="{{ route('login') }}">Login</a>
            </p>
        </div>

        <div class="text-center p-1 border border-0 border-top border-bottom">
            <span class="text-secondary rounded-circle"> Or: </span>
        </div>
        <div class="text-center p-2 d-flex flex-column align-items-center">
            <p class="">Sign up with</p>
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
