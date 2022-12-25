<x-guest-layout>

    <h1 class="text-center text-primary mb-5">Two Factor Verification</h1>
    <p>
        You have recived an email which contains two factor login code.If you haven't received it, press
        <a href="{{ route('verify.resend') }}">here</a>
    </p>


    @if (session("resend_code"))
    <p class="alert alert-success text-success text-center">
        {{ session("resend_code") }}
    </p>
    @endif

    <form action="{{ route('verify.store') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" name="two_factor_code" class="form-control" id="floatingName"
                placeholder="Enter your verification code" required />
            <label for="floatingName">Enter your verification code</label>
            @error("two_factor_code")
            <p class="text-center text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3 d-grid">
            <button type="submit" class="btn btn-primary btn-lg fw-bold">Submit</button>
        </div>
    </form>

</x-guest-layout>
