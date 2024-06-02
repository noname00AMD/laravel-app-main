<div class="new_category grid grid-cols-12 gap-4 ">
    <div class="col-span-10">
        <h1 class="text-4xl">Add user</h1>
        <form class="mt-2" action="submit">
            <label class="form-control w-full max-w">
                <div class="label">
                    <span aria-required="true" class="label-text">Email:</span>
                </div>
                <input required type="text" placeholder="Category ..." class="input input-bordered w-full max-w"
                    max-length="120" wire:model="category" wire:keyup='text_to_slug' min-length="16" />
            </label>
            <label class="form-control w-full max-w">
                <div class="label">
                    <span aria-required="true" class="label-text">User name</span>
                </div>
                <input required type="text" placeholder="user name ..." class="input input-bordered w-full max-w"
                    max-length="120" wire:model="slug" min-length="16" />
            </label>

       
            <label class="form-control w-full max-w">
                <div class="label">
                    <span aria-required="true" class="label-text">Password</span>
                </div>
                <input required type="password" placeholder="password ..." class="input input-bordered w-full max-w"
                    max-length="120" wire:model="slug" min-length="16" />
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
                <span> Role: </span>
                <select name="status" class="select select-bordered w-full max-w">
                    <option class="text-lg" value="user">User</option>
                    <option class="text-lg" value="mod">Mod</option>
                </select>
            </label>
            <button class="btn done btn-outline mt-2" type="submit"><strong>Create</strong></button>
        </div>
    </div>
</div>
