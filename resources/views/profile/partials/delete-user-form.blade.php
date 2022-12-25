<div class="tab-pane fade" id="delete-account" role="tabpanel" aria-labelledby="delete-account-tab">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Harum, consequatur sint magnam laudantium eum atque, odio
        porro similique illo id soluta sit! Magnam consectetur quis
        asperiores! Similique deserunt perspiciatis odit delectus,
        iure ipsum harum sequi enim asperiores neque reprehenderit?
        Velit eos sunt ullam iusto, quibusdam temporibus ipsa
        repudiandae perspiciatis similique!
    </p>

    <div class="mb-3">
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Delete
            Account</button>
    </div>


    <form action="{{ route('profile.destroy') }}" method="POST">
        @csrf
        @method('delete')
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">


            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Are you sure want to
                            delete?</h5>


                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    @if (auth()->user() && !auth()->user()->google_id && !auth()->user()->facebook_id
                    && !auth()->user()->github_id)
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control control-password-input1"
                                id="floatingPassword2" placeholder="Password" required />
                            <i class="fa-solid fa-eye eye-icon1"></i>
                            <label for="floatingPassword2">Password</label>

                            @if($errors->userDeletion->get('password'))

                            @foreach ($errors->userDeletion->get('password') as $message)
                            <p class="text-center text-danger">{{ $message }}</p>
                            @endforeach

                            @endif

                        </div>
                    </div>
                    @endif
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>


    </form>

</div>
