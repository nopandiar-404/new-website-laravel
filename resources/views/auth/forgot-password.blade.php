<x-guest-layout>
    <h1 class="text-center fw-bold text-secondary my-3">
        Forgot Password
    </h1>

    <form action="{{ route('password.email') }}" method="POST">
        @csrf

        @if (session()->has("status"))
        <div class="alert alert-success">
            <p class="text-center mb-0">{{ session("status") }}</p>
        </div>
        @endif

        <div class="form-floating mb-3">
            <input type="email" name="email" value="{{ old(" email") }}" class="form-control" id="floatingEmail"
                placeholder="name@example.com" required />
            <label for="floatingEmail">Enter Your Email</label>
            @error("email")
            <p class="text-center text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3 d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-guest-layout>
