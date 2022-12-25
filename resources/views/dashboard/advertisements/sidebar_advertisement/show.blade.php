<x-dashboard-layout>
    @section("title", "Sidebar Advertisement")

    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-8 p-5">
            <form action="{{ route('admin.sidebar-advertisement.update') }}" method="POST" enctype="multipart/form-data"
                class="border p-3 shadow-sm">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-12 p-3 my-3">
                        <div class="">
                            <h3 class="text-center mb-3">Top Advertisement</h3>
                            <div class="mb-3">
                                <span class="mb-2">Advertisement Photo</span>
                                <img src='{{ asset("storage/advertisements/$sidebarAdvertisement->top_advertisement_photo") }}'
                                    alt="" style="height:400px; width:100%; object-fit:cover" id="previewPhoto">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Choose Ad Photo</label>
                                <input type="file" class="form-control" name="top_advertisement_photo" id="file"
                                    aria-describedby="helpId">
                                @error("top_advertisement_photo")
                                <p class="text-center text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Url</label>
                                <input type="text" class="form-control" name="top_advertisement_url"
                                    value="{{ $sidebarAdvertisement->top_advertisement_url }}"
                                    aria-describedby="helpId">
                                @error("top_advertisement_url")
                                <p class="text-center text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <select class="form-select" name="top_advertisement_status" id="">
                                    <option value="" selected disabled>Select one</option>
                                    <option value="show" {{ $sidebarAdvertisement->top_advertisement_status==="show"?
                                        "selected":null}}>
                                        Show
                                    </option>
                                    <option value="hide" {{ $sidebarAdvertisement->top_advertisement_status==="hide"?
                                        "selected":null}}>
                                        Hide
                                    </option>
                                </select>
                                @error("top_advertisement_status")
                                <p class="text-center text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12 p-3 my-3">
                        <div class="">
                            <h3 class="text-center mb-3">Bottom Advertisement</h3>
                            <div class="mb-3">
                                <span class="mb-2">Advertisement Photo</span>
                                <img src="{{ asset('storage/advertisements/'.$sidebarAdvertisement->bottom_advertisement_photo) }}"
                                    alt="" style="height: 400px; width:100%; object-fit: cover" id="previewPhoto3">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Choose Ad Photo</label>
                                <input type="file" class="form-control" name="bottom_advertisement_photo" id="file3"
                                    aria-describedby="helpId">
                                @error("bottom_advertisement_photo")
                                <p class="text-center text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Url</label>
                                <input type="text" class="form-control" name="bottom_advertisement_url"
                                    value="{{ $sidebarAdvertisement->bottom_advertisement_url }}"
                                    aria-describedby="helpId">
                                @error("bottom_advertisement_url")
                                <p class="text-center text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <select class="form-select" name="bottom_advertisement_status" id="">
                                    <option value="" selected disabled>Select one</option>
                                    <option value="show" {{ $sidebarAdvertisement->bottom_advertisement_status==="show"?
                                        "selected":null}}>
                                        Show
                                    </option>
                                    <option value="hide" {{ $sidebarAdvertisement->bottom_advertisement_status==="hide"?
                                        "selected":null}}>
                                        Hide
                                    </option>
                                </select>
                                @error("bottom_advertisement_status")
                                <p class="text-center text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
