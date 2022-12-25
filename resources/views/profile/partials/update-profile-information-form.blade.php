<div class="tab-pane fade show active" id="change-information" role="tabpanel" aria-labelledby="change-information-tab">
    <div class="row">
        <div class="col-lg-4 d-flex align-items-center justify-content-center">
            @if (!auth()->user()->avatar)
            <img src="https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg" alt=""
                style="width: 350px; height: 350px; object-fit: cover;object-position: center" class="border border-5"
                id="previewPhoto" />
            @elseif (auth()->user()->avatar && auth()->user()->google_id &&
            str_starts_with(auth()->user()->avatar, "http"))
            <img src="{{ auth()->user()->avatar }}" alt="" id="previewPhoto"
                style="width: 350px; height: 350px; object-fit: cover" class="border border-5" />
            @elseif (auth()->user()->avatar && auth()->user()->facebook_id &&
            str_starts_with(auth()->user()->avatar, "http"))
            <img src="{{ auth()->user()->avatar }}" alt="" id="previewPhoto"
                style="width: 350px; height: 350px; object-fit: cover" class="border border-5" />
            @elseif (auth()->user()->avatar && auth()->user()->github_id &&
            str_starts_with(auth()->user()->avatar, "http"))
            <img src="{{ auth()->user()->avatar }}" alt="" id="previewPhoto"
                style="width: 350px; height: 350px; object-fit: cover" class="border border-5" />
            @elseif (auth()->user()->avatar && !str_starts_with(auth()->user()->avatar, "http"))
            <img src="{{ asset('/storage/avatars/'.auth()->user()->avatar) }}" alt="" id="previewPhoto"
                style="width: 350px; height: 350px; object-fit: cover" class="border border-5" />
            @endif
        </div>
        <div class="col-lg-8">
            <form id="send-verification" method="POST" action="{{ route('verification.send') }}"
                enctype="multipart/form-data">
                @csrf
            </form>
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-floating mb-3">
                    <input type="text" name="name" value="{{ old('name',$user->name) }}" class="form-control"
                        id="floatingName" placeholder="Username" />
                    <label for="floatingName">Username</label>
                    @error("name")
                    <p class="text-center text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" value="{{ old('email',$user->email) }}" class="form-control"
                        id="floatingEmail" placeholder="name@example.com" />
                    <label for="floatingEmail">Email address</label>
                    @error("email")
                    <p class="text-center text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="file" name="avatar" id="file" class="form-control" id="floatingEmail" />
                </div>
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !
                $user->hasVerifiedEmail())
                <div class="my-3">
                    <p class="text-secondary">
                        Your email address is unverified.

                        <button form="send-verification" class="btn btn-outline-primary">
                            Click here to re-send the verification email
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 text-success">
                        'A new verification link has been sent to your email
                        address.
                    </p>
                    @endif
                </div>
                @endif
            </form>
        </div>
    </div>
</div>
