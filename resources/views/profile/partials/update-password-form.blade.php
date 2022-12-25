<div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-8">
            <form action="{{ route('password.update') }}" method="POST">
                <input type="hidden" name="active" value="current">
                @csrf
                @method("put")
                <div class="form-floating mb-3">
                    <input type="password" name="current_password" class="form-control control-password-input1"
                        id="floatingPassword1" placeholder="Password" required />
                    <i class="fa-solid fa-eye eye-icon1"></i>
                    <label for="floatingPassword">Current Password</label>
                    @if($errors->updatePassword->get('current_password'))

                    @foreach ($errors->updatePassword->get('current_password') as $message)
                    <p class="text-center text-danger">{{ $message }}</p>
                    @endforeach

                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control control-password-input2"
                        id="floatingPassword2" placeholder="Password" required />
                    <i class="fa-solid fa-eye eye-icon2"></i>
                    <label for="floatingPassword2">Password</label>
                    @if($errors->updatePassword->get('password'))

                    @foreach ($errors->updatePassword->get('password') as $message)
                    <p class="text-center text-danger">{{ $message }}</p>
                    @endforeach

                    @endif
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="password_confirmation" class="form-control control-password-input3"
                        id="floatingPassword3" placeholder="Password" required />
                    <i class="fa-solid fa-eye eye-icon3"></i>
                    <label for="floatingPassword3">Confirm Password</label>
                    @if($errors->updatePassword->get('password_confirmation'))

                    @foreach ($errors->updatePassword->get('password') as $message)
                    <p class="text-center text-danger">{{ $message }}</p>
                    @endforeach

                    @endif
                </div>
                <div class="mb-3 d-grid">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
