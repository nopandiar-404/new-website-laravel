<div class="tab-pane fade" id="account-security" role="tabpanel" aria-labelledby="account-security-tab">
    <form action="{{ route('security.update') }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-check mb-3">
            <input class="form-check-input" name="enable_two_factor" type="checkbox" value="enable"
                {{auth()->user()->enable_two_factor==="enable"? "checked":"" }}>
            <label class="form-check-label" for="">
                Enable Two Factor Authentication
            </label>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
