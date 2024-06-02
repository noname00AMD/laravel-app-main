<div class="grid grid-cols-12 gap-4  newarticle">
<div class="col-span-10 pb-10">
    <form action="submit" >
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
            <textarea name="content" placeholder="Content ..." class="p-2 block w-full rounded-2xl min-h-36" id="" cols="30" rows="10"></textarea>
        </label>
        <div>
            <input type="checkbox" name="use_tts" class={use_tts} />
            <label for="use_tts">Text to speech: </label>
        </div>
        <textarea disabled name="tts" class="tts"></textarea>
        {{-- <ImgInput change={(v)=> {
            setThumbImg(v)
            }}
            type="thumb"
            >
        </ImgInput> --}}
   

   
      
        <label style=" display: block; margin: 5px" for="tags">
            <span>
                Add tag:
            </span>
            <input style=" border:  1px solid black; padding: 5px; margin: 5px" placeholder="Fill in a tag ..."          />
        </label>
        <input type="button"  value="Add tag" class="input input-bordered" />
        <div class="tagInput">
            <span>Tags :</span>
            {{-- {tags.map((tag, ind) =>
            <div key={ind} class="tag" style=" display: inline-block; margin: 0 10px">
                {tag}
                <button style=" padding:  5px 10px; marginLeft: 10px" onClick={()=>
                    deleteTag(ind)}>&#10006;</button>
            </div>
            )} --}}
        </div>
        <div class="tag_box" style=" font-size:  1.8rem">
        </div>
    </form>
</div>
<div class="col-span-2 col-start-11 ">
    <div class="top-1 sticky">
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
             <label style=" display:  block" for="lang"> 
                <span>
                    Lang :
                </span>
                <select required  name="lang" class="lang">
                    {{-- {
                    props.siteInfo.langSupport.map((lang, index) => {
                    return (
        
                    <option key={index} value={lang}>
                        {lang}
                    </option>
        
                    )
                    })
                    } --}}
                </select>
            </label>
            <label class="block" for="thumbtype">
                <span>
                    Thumb type :
                </span>
                <select required name="thumbType" class="thumbType">
                    {{-- {
    
                props.siteInfo.thumbTypes.map((item, index) => {
                return (
                <option value={item} key={index}>
                    {item}
                </option>
                )
                })} --}}
    {{-- @foreach(){
    
    } --}}
                </select>
            </label>
            <label for="category" style=" margin:  5px; display: block" name="category">
                <label for="">                Category:             </label>
                <select ref={categoryRef} class="category" aria-placeholder="select category" required>
                {{-- {props.categories.map((category, index) => {
                if (category.type == "category") {
                var sub = props.categories.filter(cate => {
                return ((cate.parent === category.id) && (cate.type === "subcategory"))
                })
                if (sub.length > 0) {
                return (<Fragment key={index}>
                    <option style=" fontWeight: " bold" value={category.id}>
                        {category.cate_name}
                    </option>
                    <optgroup label={">> " + category.cate_name}>
                        {sub.map((subcate, index1) => {
                        return (
                        <option key={subcate.id} value={subcate.id}>
                            {subcate.cate_name}
                        </option>
                        )
                        })
                        }
                    </optgroup>
                </Fragment>)
                } else {
                return (
                <option key={index} style=" fontWeight: " bold" value={category.id}>
                    {category.cate_name}
                </option>
                )
                }
                }
                })
                } --}}
    
            </select>
        </label>
        <button class="btn done btn-outline mt-2" type="submit"><strong>Post</strong></button>
        
    </div>
</div>
</div>
{{-- <script>
    function textToTag(tag) {
        if (typeof tag !== "string") {
            return false
        }
        tag = tag.toLowerCase();
        tag = tag.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        tag = tag.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        tag = tag.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        tag = tag.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        tag = tag.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        tag = tag.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        tag = tag.replace(/đ/gi, 'd');
        tag = tag.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        tag = tag.replace(/ /gi, "");
        tag = tag.replace(/\-\-\-\-\-/gi, '');
        tag = tag.replace(/\-\-\-\-/gi, '');
        tag = tag.replace(/\-\-\-/gi, '');
        tag = tag.replace(/\-\-/gi, '');
        tag = tag.replace(/-/gi, '');
        tag = '@' + tag + '@';
        tag = tag.replace(/\@\-|\-\@|\@/gi, '');
        return tag;
    }

    function textToSlug(slug) {
        if (typeof slug !== "string") {
            return null
        }

        var str = slug
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();
        var from = "ậẫẩầấặẵẳằắăãạảàáäâèéëêẻẽẹếềểễệìíïîỉĩịòóöôỏõọốồổỗộơớờởỡợùúüûủũụưứừửữựýỳỷỹỵđñç·/_,:;";
        var to = "aaaaaaaaaaaaaaaaaaeeeeeeeeeeeeiiiiiiioooooooooooooooooouuuuuuuuuuuuuyyyyydnc------";
        // remove accents, swap ñ for n, etc
        ;
        for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
    }


    var props = {
        siteInfo: {
            thumbType: ["a", "b"],
            langSupport: ["a", "b"]
        },
        categories: []
    } --}}
{{-- // var timeRef = React.useRef()
    // var dateRef = React.useRef()
    // var ttsRef = React.useRef()
    // var thumbImgRef = React.useRef()
    // var [useTts, setUseTts] = React.useState(false)
    // var categoryRef = React.useRef()
    // var thumbTypeRef = React.useRef()
    // var langRef = React.useRef()
    // var [title, setTitle] = React.useState("")
    // var [slug, setSlug] = React.useState("")
    // var [description, setDescription] = React.useState("")
    // var [excerpt, setExcerpt] = React.useState("")
    // var [status, setStatus] = React.useState("public")
    // const [input, setInput] = React.useState('');
    // const [tags, setTags] = React.useState([]);
    // const [tts, setTts] = React.useState("");
    // const [isKeyReleased, setIsKeyReleased] = React.useState(false);
    // var [thumbImg, setThumbImg] = React.useState()

    var submit = (e) => {
        e.preventDefault()
        var time = timeRef.current.value || null
        var date = dateRef.current.value || null
        var tts = null
        if (useTts) {
            tts = ttsRef.current.value
        }
        var thumbType = thumbTypeRef.current.value || null
        var lang = langRef.current.value || null
        var category = categoryRef.current.value || null
        if (thumbImg.size > 1024 * 300) {
            alert("thumb img < 300kb")
            return
        }
        var reader = new FileReader();
        reader.readAsDataURL(thumbImg);
        reader.onloadend = function() {
            console.log("fetch");
            fetch("/api/addarticle", {
                method: "post",
                cache: "no-cache",
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                },
                referrerPolicy: "no-referrer",
                body: JSON.stringify({
                    title,
                    description,
                    excerpt,
                    status,
                    thumbType,
                    category,
                    lang,
                    tags,
                    status,
                    time,
                    date,
                    tts,
                    "thumbImg": reader.result
                })
            })
        }
    }
    var changeStatus = (e) => {
        if (e.target.value === "public") {
            timeRef.current.setAttribute("disabled", true)
            dateRef.current.setAttribute("disabled", true)
        }
        if (e.target.value === "hidden") {
            timeRef.current.setAttribute("disabled", true)
            dateRef.current.setAttribute("disabled", true)
        }
        if (e.target.value === "schedule") {
            timeRef.current.removeAttribute("disabled")
            dateRef.current.removeAttribute("disabled")
            dateRef.current.value = today
            timeRef.current.value = displayTime

        }
        // timeRef.current.setAttribute()
        setStatus(e.target.value)
    }
    var handleTitle = (e) => {
        setTitle(e.target.value)
        setSlug(textToSlug(e.target.value))
    }
    var handleSlug = (e) => {
        setSlug(textToSlug(e.target.value))
    }

    var handleDescription = (e) => {
        setDescription(e.target.value)
    }
    var handleExcerpt = (e) => {
        setExcerpt(e.target.value)
    }
    const handleTag = (e) => {
        setInput(e.target.value);
    };
    const deleteTag = (index) => {
        setTags(prevState => prevState.filter((tag, i) => i !== index))
    }
    const onKeyDown = (e) => {
        const {
            key
        } = e;
        const trimmedInput = textToTag(input);

        if ((key === ',' || key === 'Enter') && trimmedInput.length && !tags.includes(trimmedInput)) {
            e.preventDefault();
            setTags(prevState => [...prevState, trimmedInput]);
            setInput('');
        }

        if (key === "Backspace" && !input.length && tags.length && isKeyReleased) {
            const tagsCopy = [...tags];
            const poppedTag = tagsCopy.pop();
            e.preventDefault();
            setTags(tagsCopy);
            setInput(poppedTag);
        };
    }
    const onKeyUp = () => {
        setIsKeyReleased(true);
    }
    const onAddBtn = (e) => {
        const trimmedInput = textToTag(input);
        if (trimmedInput.length && !tags.includes(trimmedInput)) {
            setTags(prevState => [...prevState, trimmedInput]);
            setInput('');
        }
    }
    var date = new Date();

    var day = date.getDate(),
        month = date.getMonth() + 1,
        year = date.getFullYear(),
        hour = date.getHours(),
        min = date.getMinutes();

    month = (month < 10 ? "0" : "") + month;
    day = (day < 10 ? "0" : "") + day;
    hour = (hour < 10 ? "0" : "") + hour;
    min = (min < 10 ? "0" : "") + min;

    var today = year + "-" + month + "-" + day,
        displayTime = hour + ":" + min;
</script> --}}
{{-- <form action=" submit" onSubmit={submit}>
    <label aria-required="true" for="title">Title: </label>
    <input tabindex="1" required class="title" onchange={handleTitle} max-length="120" value={title} min-length="16"
        type="text" />
    <label aria-required="true" for="slug">Slug: </label>
    <div class="slug">
        <input tabindex="2" required class="slug1" onchange={handleSlug} value={slug} max-length=" 120" min-length="16"
            type="text" />
        <svg class="slugGenerate" width="1.4em" height="1.4em" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fillRule="evenodd" clipRule="evenodd"
                d="M15.681 2.804A9.64 9.64 0 0011.818 2C6.398 2 2 6.48 2 12c0 5.521 4.397 10 9.818 10 2.03 0 4.011-.641 5.67-1.835a9.987 9.987 0 003.589-4.831 1.117 1.117 0 00-.664-1.418 1.086 1.086 0 00-1.393.676 7.769 7.769 0 01-2.792 3.758 7.546 7.546 0 01-4.41 1.428V4.222h.002a7.492 7.492 0 013.003.625 7.61 7.61 0 012.5 1.762l.464.551-2.986 3.042a.186.186 0 00.129.316H22V3.317a.188.188 0 00-.112-.172.179.179 0 00-.199.04l-2.355 2.4-.394-.468-.02-.02a9.791 9.791 0 00-3.239-2.293zm-3.863 1.418V2v2.222zm0 0v15.556c-4.216 0-7.636-3.484-7.636-7.778s3.42-7.777 7.636-7.778z"
                fill="#212134"></path>
        </svg>
    </div>
    <label aria-required="true" for="description">Description: </label>
    <textarea tabindex="3" required class="description" value={description} onchange={handleDescription} max-length=" 500"
        min-length="16"></textarea>
    <label aria-required="true" for="excerpt ">Excerpt (Brief): </label>
    <textarea tabindex="4" required class="excerpt" value={excerpt} onchange={handleExcerpt} max-length=" 500"
        min-length="16"></textarea>


    <label for="thumbtype"> Thumb type :</label>
    <select required name="thumbType" ref={thumbTypeRef} class="thumbType">

    </select>
    <label class="langlabel" for=" lang"> Lang :</label>
    <select required ref={langRef} name="lang" class="lang">

    </select>
    <label class="categorylabel" for=" category"name="category">Category: </label>
    <select ref={categoryRef} class="category" aria-placeholder=" select category" required>

    </select>
    <label class="taglabel" for="tags">Add tag: </label>

    <input class="taginput" value={input} placeholder="Enter a tag" onKeyDown={onKeyDown} onchange={handleTag}
        onKeyUp={onKeyUp} />
    <input type="button" onClick={onAddBtn} value="Add tag" class="add_tag_button" />
    <div class="tagInput">
        <span>Tags :</span>

    </div>
    <div class="tag_box">
    </div>
    <label class="statuslabel" for=" status">Status: </label>
    <select onchange={changeStatus} name="status" class="status">
        <option value=" public">Public</option>
        <option value="hidden">Hidden</option>
        <option value="schedule">schedule</option>
    </select>
    <input ref={timeRef} disabled type="time" name="time" class="time" />
    <input ref={dateRef} disabled type=" date" name="date" class="date" />
    <button class=" done" type="submit"><strong>Done</strong></button>
</form>  --}}
{{-- @endsection  --}}
