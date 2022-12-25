<x-guest-layout>
    <h1 class="text-center fw-bold text-secondary my-3">
        Forgot Password
    </h1>

    <form action="{{ route('password.store') }}" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <input type="hidden" name="email" value="{{ $request->email }}">

        <div class="form-floating mb-3 signup-input">
            <input type="password" name="password" class="form-control control-password-input1" id="floatingPassword1"
                placeholder="Password" required/>
            <i class="fa-solid fa-eye eye-icon1"></i>
            <label for="floatingPassword">Password</label>
            @error("password")
            <p class="text-center text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control control-password-input2"
                id="floatingPassword2" placeholder="Password" required/>
            <i class="fa-solid fa-eye eye-icon2"></i>
            <label for="floatingPassword">Confirm Password</label>
            @error("password_confirmation")
            <p class="text-center text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3 d-grid">
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </div>
    </form>
</x-guest-layout>
