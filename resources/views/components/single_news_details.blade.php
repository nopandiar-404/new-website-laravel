@props(["post"])

<div>
    <h2 class="text-center my-3">{{ $post->title }}</h2>
</div>
<div>
    <div class="text-secondary" style="font-size: .8rem;">
        By Author, CNN
    </div>
    <div class="text-secondary" style="font-size: .8rem;">
        Updated 2:50 PM EST, Sat December 10, 2022
    </div>

</div>


<div class="my-3 w-100">
    <img src="{{ $post->photo }}" alt="" style="width: 100%; height: 500px; object-fit: cover;">
</div>



<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-between my-3">
    <div class="w-25 d-flex align-items-center justify-content-around">
        <span><i class="fa-solid fa-heart me-2"></i>2K</span>
        <span><i class="fa-solid fa-eye me-2"></i>10</span>
    </div>
    <div>
        <span>
            <i class="fa-solid fa-user me-1"></i>
            <a href="#" class="text-dark">Aung Thu Zaw</a>
        </span>
    </div>
    <div class="w-25 d-flex align-items-center justify-content-around">
        <span><i class="fa-solid fa-link"></i></span>
        <span><i class="fa-brands fa-facebook"></i></span>
        <span><i class="fa-brands fa-twitter"></i></span>
    </div>
</div>



<div>
    <span>
        {{ $post->body }}
    </span>
</div>
