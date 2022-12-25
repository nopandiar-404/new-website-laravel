@props(["ad"])

@if ($ad->top_advertisement_status==="show")
<div class="border mb-4" style="height: 300px;">
    @if ($ad->top_advertisement_url)
    <a href="{{ $ad->top_advertisement_url }}" target="_blank">
        <img src="{{ asset('storage/advertisements/'.$ad->top_advertisement_photo) }}"
            style="width: 100%; height:100%;  object-fit:cover;">
    </a>
    @else
    <img src="{{ asset('storage/advertisements/'.$ad->top_advertisement_photo) }}"
        style="width: 100%; height:100%;  object-fit:cover;">
    @endif
</div>
@endif
