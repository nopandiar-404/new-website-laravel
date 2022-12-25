@props(["ad"])

@if ($ad->middle_advertisement_status==="show")
<div class="container home-advertisement">
    @if ($ad->middle_advertisement_url)
    <a href="{{ $ad->middle_advertisement_url }}" target="_blank">
        <img src="{{ asset('storage/advertisements/'.$ad->middle_advertisement_photo) }}" alt=""
            class="home-advertisement-img">
    </a>
    @else
    <img src="{{ asset('storage/advertisements/'.$ad->middle_advertisement_photo) }}" alt=""
        class="home-advertisement-img">
    @endif
</div>
@endif
