<div class="comment-box">
    <h3>Comments</h3>
    <form action="">
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <textarea class="form-control" name="" id="" rows="8"></textarea>
        </div>
        <div class="mb-3 d-grid">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>


    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h5>All Comments (20)</h5>
        </div>
        <div>
            <div class="mb-3">
                <select class="form-select" name="" id="">
                    <option selected disabled>Sory By</option>
                    <option value="">Newest</option>
                    <option value="">Oldest</option>
                    <option value="">Most Likes</option>
                </select>
            </div>
        </div>
    </div>

    {{-- Loop This --}}
    <x-single_comment />


</div>
