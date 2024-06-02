<div class="new_category grid grid-cols-12 gap-4 ">
    <div class="col-span-10">
        <h1 class="text-4xl">Add media</h1>
        <form class="mt-2" action="submit">
            <label class="form-control w-full max-w">
                <div class="label">
                    <span aria-required="true" class="label-text">Media:</span>
                </div>
                
                   {{-- *** <ImgInput
                   change={(v) => {
                       setThumbImg(v)
                   }}
                   type="thumb"
               /> --}}
            </label>    
        </form>
    </div>
    <div class="col-span-2 col-start-11">
        <div class="sticky top-1">
           
            <button class="btn done btn-outline mt-2" type="submit"><strong>Upload</strong></button>
        </div>
    </div>
</div>
