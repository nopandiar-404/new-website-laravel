<x-profile-layout>
    <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="change-information-tab" data-bs-toggle="tab"
                data-bs-target="#change-information" type="button" role="tab" aria-controls="change-information"
                aria-selected="true">
                Change Account Information
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="change-password-tab" data-bs-toggle="tab" data-bs-target="#change-password"
                type="button" role="tab" aria-controls="change-password" aria-selected="false">
                Change Password
            </button>
        </li>

        @if (!auth()->user()->facebook_id && !auth()->user()->google_id && !auth()->user()->github_id)
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="account-security-tab" data-bs-toggle="tab" data-bs-target="#account-security"
                type="button" role="tab" aria-controls="account-security" aria-selected="false">
                Account Security
            </button>
        </li>
        @endif
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="delete-account-tab" data-bs-toggle="tab" data-bs-target="#delete-account"
                type="button" role="tab" aria-controls="delete-account" aria-selected="false">
                Delete Account
            </button>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">

        @include('profile.partials.update-profile-information-form')

        @include('profile.partials.update-password-form')

        @if (!auth()->user()->facebook_id && !auth()->user()->google_id && !auth()->user()->github_id)
        @include("profile.partials.user-account-two-factor")
        @endif

        @include('profile.partials.delete-user-form')

    </div>
</x-profile-layout>



























{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
