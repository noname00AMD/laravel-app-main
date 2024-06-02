
<div class="new_category grid grid-cols-12 gap-4 ">
    <div class="col-span-10">
        <h1 class="text-4xl">Add tag</h1>
        <form action="submit" onSubmit={submit}>

            <label aria-required="true" class="form-control w-full max-w" for="username">
                <span>
                    Tagname: 

                </span>
                <input id="tag" required class="input label-text input-bordered"  max-length="120"  min-length="2"/>

            </label>
            <label class="form-control w-full max-w">
                <div class="label">
                    <span aria-required="true" class="label-text">Slug</span>
                </div>
                <input required type="text" placeholder="Slug ..." class="input input-bordered w-full max-w"
                    max-length="120" wire:model="slug" min-length="16" />
            </label>
            <label for="description">
                <span aria-required="true"> Description: </span>
                <textarea required id="description" class="p-2 block w-full rounded-2xl min-h-36" placeholder="Description ..."
                    max-length="500" min-length="16"></textarea>
            </label>
        </form>
    </div>
    <div class="col-span-2 col-start-11">
        <div class="sticky top-1">
           
            <button class="btn done btn-outline mt-2" type="submit"><strong>Create</strong></button>
        </div>
    </div>
</div>


