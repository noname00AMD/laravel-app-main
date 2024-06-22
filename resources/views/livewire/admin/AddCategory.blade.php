<div class="new_category grid grid-cols-12 gap-4 ">
    <div class="col-span-10">
        <h1 class="text-4xl">add category</h1>
        <form class="mt-2" action="submit">
            <label class="form-control w-full max-w">
                <div class="label">
                    <span aria-required="true" class="label-text">Category:<span class="text-red-600"> *</span></span>
                </div>
                <input required type="text" placeholder="Category ..." class="input input-bordered w-full max-w"
                    max-length="120" wire:model="category" wire:keyup='text_to_slug' min-length="16" />
            </label>
            <label class="form-control w-full max-w">
                <div class="label">
                    <span aria-required="true" class="label-text">Slug:<span class="text-red-600"> *</span></span>
                </div>
                <input required type="text" placeholder="Slug ..." class="input input-bordered w-full max-w"
                    max-length="120" wire:model="slug" min-length="16" />
            </label>

            <label for="description">
                <span aria-required="true"> Description:<span class="text-red-600"> *</span> </span>
                <textarea required id="description" class="p-2 block w-full rounded-2xl min-h-36" placeholder="Description ..."
                    max-length="500" min-length="16"></textarea>
            </label>
            <label htmlFor="parent" style="margin: 5px; display: block"name="category">
                <span>
                    Parent Category:
                </span>
                <select class="select select-bordered w-full max-w-xs"aria-placeholder="select category" required>
                    {{-- {props.categories.map((category, index) => {
                    if (category.type == "category") {
                        return (
                            <option key={index} style={{ fontWeight: "bold" }} value={category.id}>
                                {category.cate_name}
                            </option>
                        )
                    }
                })
                } --}}

                </select>
            </label>

            {{-- *** <ImgInput
            change={(v) => {
                setThumbImg(v)
            }}
            type="thumb"
        /> --}}



        </form>
    </div>
    <div class="col-span-2 col-start-11">
        <div class="sticky top-1">
            <label style=" margin:  5px" for="status">
                <span> Status: </span>
                <select name="status" class="select select-bordered w-full max-w">
                    <option class="text-lg" value="public">Public</option>
                    <option class="text-lg" value="hidden">Hidden</option>
                </select>
            </label>
            <button class="btn done btn-outline mt-2" type="submit"><strong>Post</strong></button>
        </div>
    </div>
</div>
