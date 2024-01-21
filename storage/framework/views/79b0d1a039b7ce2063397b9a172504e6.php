<div class="col-span-9 col-start-4 newarticle">

    

    <form action="submit" onsubmit={submit}>
        <label class="form-control w-full max-w">
            <div class="label">
                <span aria-required="true" class="label-text">Title</span>
            </div>
            <input required type="text" placeholder="Title ..." class="input input-bordered w-full max-w"
                max-length="120" wire:model="title" wire:keyup='text_to_slug' min-length="16" />
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
        <label for="excerpt">
            <span aria-required="true"> Excerpt (Brief): </span>
            <textarea required id="excerpt" class="p-2 block w-full rounded-2xl min-h-32" placeholder="Excerpt for on-page SEO..."
                max-length="500" min-length="16"></textarea>
        </label>
        <label for="">
            <span>Content</span>
            <textarea name="content" class="p-2 block w-full rounded-2xl min-h-36" id="" cols="30" rows="10"></textarea>
        </label>
        <div>
            <input type="checkbox" name="use_tts" class={use_tts} />
            <label for="use_tts">Text to speech: </label>
        </div>
        <textarea disabled name="tts" class="tts"></textarea>
        
        <label class="block" for="thumbtype">
            <span>
                Thumb type :
            </span>
            <select required name="thumbType" class="thumbType">
                

            </select>
        </label>

        <label style=" display:  block" for="lang"> 
            <span>
                Lang :
            </span>
            <select required  name="lang" class="lang">
        </label>
            
        </select>
        <label for="category" style=" margin:  5px; display: block" name="category">
            <label for="">                Category:             </label>
            <select ref={categoryRef} class="category" aria-placeholder="select category" required>
        </label>
            

        </select>
        <label style=" display: block; margin: 5px" for="tags">
            <span>
                Add tag:
            </span>
            <input style=" border:  1px solid black; padding: 5px; margin: 5px" placeholder="Enter a tag"          />
        </label>
        <input type="button" onClick={onAddBtn} value="Add tag" class={add_tag_button} />
        <div class="tagInput">
            <span>Tags :</span>
            
        </div>
        <div class="tag_box" style=" font-size:  1.8rem">
        </div>
        <label style=" margin:  5px" for="status">
        <span>            Status:            </span>    
            <select onchange={changeStatus} name="status" class={status}>
                <option value="public">Public</option>
                <option value="hidden">Hidden</option>
                <option value="schedule">schedule</option>
            </select>
         </label>
        <input style=" display:  block;padding: 5px; fontSize: 25px" ref={timeRef} disabled type="time"
            name="time" class={time} />
        <input style=" display:  block; padding: 5px; fontSize: 25px" ref={dateRef} disabled type="date"
            name="date" class={date} />
        <button class="btn done btn-outline" type="submit"><strong>Post</strong></button>
    </form>

</div>




<?php /**PATH /home/noname00/laravel/resources/views/livewire/admin/AddArticle.blade.php ENDPATH**/ ?>