@props(["ad"])

@if ($ad->top_advertisement_status==="show")
<div class="container home-advertisement">
    @if ($ad->top_advertisement_url)
    <a href="{{ $ad->top_advertisement_url }}" target="_blank">
        <img src="{{ asset('storage/advertisements/'.$ad->top_advertisement_photo) }}" alt=""
            class="home-advertisement-img">
    </a>
    @else
    <img src="{{ asset('storage/advertisements/'.$ad->top_advertisement_photo) }}" alt=""
        class="home-advertisement-img">
    @endif
</div>
@endif
