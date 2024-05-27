@extends('layout.AdminLayout')
@section('content')



<link rel="stylesheet" href="/css/NewArticle.css">

<div class="col-span-9 col-start-4 newarticle">
    <form action="submit" onSubmit={submit}>
        <label aria-required="true" htmlFor="title">Title: </label>
        <input required class="title" onChange={handleTitle} maxLength="120" value={title} minLength="16" type="text" />
        <label aria-required="true" htmlFor="slug">Slug: </label>
        <div class={slug}>
            <input required class={slug1} onChange={handleSlug} value={slug} maxLength="120" minLength="16"
                type="text" />
            <svg class={slugGenerate} style=" position:  absolute ; cursor: pointer;right: 8px;top: 8px;
                width=1.4em; height=1.4em; viewBox=0 0 24 24; fill=none; xmlns=http://www.w3.org/2000/svg">
                <path fillRule="evenodd" clipRule="evenodd"
                    d="M15.681 2.804A9.64 9.64 0 0011.818 2C6.398 2 2 6.48 2 12c0 5.521 4.397 10 9.818 10 2.03 0 4.011-.641 5.67-1.835a9.987 9.987 0 003.589-4.831 1.117 1.117 0 00-.664-1.418 1.086 1.086 0 00-1.393.676 7.769 7.769 0 01-2.792 3.758 7.546 7.546 0 01-4.41 1.428V4.222h.002a7.492 7.492 0 013.003.625 7.61 7.61 0 012.5 1.762l.464.551-2.986 3.042a.186.186 0 00.129.316H22V3.317a.188.188 0 00-.112-.172.179.179 0 00-.199.04l-2.355 2.4-.394-.468-.02-.02a9.791 9.791 0 00-3.239-2.293zm-3.863 1.418V2v2.222zm0 0v15.556c-4.216 0-7.636-3.484-7.636-7.778s3.42-7.777 7.636-7.778z"
                    fill="#212134"></path>
            </svg>
        </div>
        <label aria-required="true" htmlFor="description">Description: </label>
        <textarea required class={description} value={description} onChange={handleDescription} maxLength="500"
            minLength="16"></textarea>
        <label aria-required="true" htmlFor="excerpt ">Excerpt (Brief): </label>
        <textarea required class={excerpt} value={excerpt} onChange={handleExcerpt} maxLength="500"
            minLength="16"></textarea>

        <div>
            <input type="checkbox" name="use_tts" class={use_tts} />
            <label htmlFor="use_tts">Text to speech: </label>
        </div>
        <textarea ref={ttsRef} name="tts" class={tts}></textarea>
        <ImgInput change={(v)=> {
            setThumbImg(v)
            }}
            type="thumb"
            >
        </ImgInput>
        <label htmlFor="thumbtype"> Thumb type :</label>
        <select required name="thumbType" ref={thumbTypeRef} class={thumbType}>
            {

            props.siteInfo.thumbTypes.map((item, index) => {
            return (
            <option value={item} key={index}>
                {item}
            </option>
            )
            })}
        </select>
        <label style=" display: " block" htmlFor="lang"> Lang :</label>
        <select required ref={langRef} name="lang" class={lang}>
            {
            props.siteInfo.langSupport.map((lang, index) => {
            return (

            <option key={index} value={lang}>
                {lang}
            </option>

            )
            })
            }
        </select>
        <label htmlFor="category" style=" margin: " 5px" , display: "block" name="category">Category: </label>
        <select ref={categoryRef} class={category} aria-placeholder="select category" required>
            {props.categories.map((category, index) => {
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
            }

        </select>
        <label style=" display: " block" , margin: "5px" htmlFor="tags">Add tag: </label>

        <input style=" border: " 1px solid black" , padding: "5px" , margin: "5px" value={input}
            placeholder="Enter a tag" onKeyDown={onKeyDown} onChange={handleTag} onKeyUp={onKeyUp} />
        <input type="button" onClick={onAddBtn} value="Add tag" class={add_tag_button} />
        <div class={tagInput}>
            <span>Tags :</span>
            {tags.map((tag, ind) =>
            <div key={ind} class="tag" style=" display: " inline-block" , margin: "0 10px">
                {tag}
                <button style=" padding: " 5px 10px" , marginLeft: "10px" onClick={()=>
                    deleteTag(ind)}>&#10006;</button>
            </div>
            )}
        </div>
        <div class={tag_box} style=" fontSize: " 1.8rem">
        </div>
        <label style=" margin: " 5px" htmlFor="status">Status: </label>
        <select onChange={changeStatus} name="status" class={status}>
            <option value="public">Public</option>
            <option value="hidden">Hidden</option>
            <option value="schedule">schedule</option>
        </select>
        <input style=" display: " block" , padding: "5px" , fontSize: "25px" ref={timeRef} disabled type="time"
            name="time" class={time} />
        <input style=" display: " block" , padding: "5px" , fontSize: "25px" ref={dateRef} disabled type="date"
            name="date" class={date} />
        <button class={done} type="submit"><strong>Done</strong></button>
    </form>
</div>

<script type="text/babel">
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

const reducer = (state = []) => {
  return state;
};
const store = Redux.createStore(reducer);

store.subscribe(() => {
  console.log('subscribe', store.getState());
});







    const e = React.createElement;
function form(){
  var props={
    siteInfo:{
        thumbType:["a","b"],
        langSupport:["a","b"]
    },
    categories:[]
  }
    var timeRef = React.useRef()
    var dateRef = React.useRef()
    var ttsRef = React.useRef()
    var thumbImgRef = React.useRef()
    var [useTts, setUseTts] = React.useState(false)
    var categoryRef = React.useRef()
    var thumbTypeRef = React.useRef()
    var langRef = React.useRef()
    var [title, setTitle] = React.useState("")
    var [slug, setSlug] = React.useState("")
    var [description, setDescription] = React.useState("")
    var [excerpt, setExcerpt] = React.useState("")
    var [status, setStatus] = React.useState("public")
    const [input, setInput] = React.useState('');
    const [tags, setTags] = React.useState([]);
    const [tts, setTts] = React.useState("");
    const [isKeyReleased, setIsKeyReleased] = React.useState(false);
    var [thumbImg, setThumbImg] = React.useState()

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
        reader.onloadend = function () {
            console.log("fetch");
            fetch( "/api/addarticle", {
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
        const { key } = e;
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
    return(<React.Fragment>
    <form action=" submit" onSubmit={submit}>
        <label aria-required="true" htmlFor="title">Title: </label>
        <input tabindex="1" required class="title" onChange={handleTitle} maxLength="120" value={title} minLength="16" type="text" />
        <label aria-required="true" htmlFor="slug">Slug: </label>
        <div class="slug">
            <input tabindex="2" required class="slug1" onChange={handleSlug} value={slug} maxLength=" 120" minLength="16" type="text" />
            <svg class="slugGenerate"   width="1.4em" height="1.4em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fillRule="evenodd" clipRule="evenodd" d="M15.681 2.804A9.64 9.64 0 0011.818 2C6.398 2 2 6.48 2 12c0 5.521 4.397 10 9.818 10 2.03 0 4.011-.641 5.67-1.835a9.987 9.987 0 003.589-4.831 1.117 1.117 0 00-.664-1.418 1.086 1.086 0 00-1.393.676 7.769 7.769 0 01-2.792 3.758 7.546 7.546 0 01-4.41 1.428V4.222h.002a7.492 7.492 0 013.003.625 7.61 7.61 0 012.5 1.762l.464.551-2.986 3.042a.186.186 0 00.129.316H22V3.317a.188.188 0 00-.112-.172.179.179 0 00-.199.04l-2.355 2.4-.394-.468-.02-.02a9.791 9.791 0 00-3.239-2.293zm-3.863 1.418V2v2.222zm0 0v15.556c-4.216 0-7.636-3.484-7.636-7.778s3.42-7.777 7.636-7.778z" fill="#212134"></path>
            </svg>
        </div>
        <label aria-required="true" htmlFor="description">Description: </label>
        <textarea tabindex="3" required class="description" value={description} onChange={handleDescription} maxLength=" 500" minLength="16"></textarea>
        <label aria-required="true" htmlFor="excerpt ">Excerpt (Brief): </label>
        <textarea tabindex="4" required class="excerpt" value={excerpt} onChange={handleExcerpt} max-length=" 500" minLength="16"></textarea>

     
     <ImgInput change={(v)=>   setThumbImg(v)   }                     type= "thumb"   > </    ImgInput >
        <label htmlFor="thumbtype"> Thumb type :</label>
        <select required name="thumbType" ref={thumbTypeRef} class="thumbType">         
         
        </select>
        <label class="langlabel" htmlFor=" lang"> Lang :</label>
        <select required ref={langRef} name="lang" class="lang">
         
        </select>
        <label  class="categorylabel" htmlFor=" category"name="category">Category: </label>
        <select ref={categoryRef} class="category" aria-placeholder=" select category" required>
          
        </select>
        <label class="taglabel"  htmlFor="tags">Add tag: </label>

        <input class="taginput"  value={input} placeholder="Enter a tag" onKeyDown={onKeyDown} onChange={handleTag} onKeyUp={onKeyUp} />
        <input type="button" onClick={onAddBtn} value="Add tag" class="add_tag_button" />
        <div class="tagInput">
            <span>Tags :</span>
           
        </div>
        <div class="tag_box" >
        </div>
        <label class="statuslabel"  htmlFor=" status">Status: </label>
        <select onChange={changeStatus} name="status" class="status">
            <option value=" public">Public</option>
            <option value="hidden">Hidden</option>
            <option value="schedule">schedule</option>
        </select>
        <input ref={timeRef} disabled type="time" name="time" class="time" />
        <input  ref={dateRef} disabled type=" date" name="date" class="date" />
        <button class=" done" type="submit"><strong>Done</strong></button>
    </form>
    </React.Fragment>        )  
}
    const domContainer = document.querySelector('#newarticle');
const root = ReactDOM.createRoot(domContainer);
root.render(e(form));




function ImgInput(props) {
    // console.log(props);
    var imgRef = React.useRef()
    var reviewRef = React.useRef()
    var dropboxRef = React.useRef()
    var dragover = (e) => {

        // e.stopPropagation();
        e.preventDefault();
    }
    var drop = (e) => {
        // e.stopPropagation();
        e.preventDefault();
        console.log(e.dataTransfer);
        imgRef.current.files = e.dataTransfer.files
        changeImg()
    }

    var changeImg = (e) => {

        var stop = false
        var Imgs = imgRef.current.files
        if (Imgs.length === 0) {
            props.change(null)
            stop = true
        }
        if (props.type === "thumb" && Imgs[0].size > 1024 * 300) {
            alert("thumb img < 300kb")
            stop = true
            Imgs = Array.of(Imgs[0])
        }
        if (props.type === "media") {
            for (var i = 0; i < Imgs.length; i++) {
                var element = Imgs[i]
                if (element.size > 1024 * 1024) {
                    stop = true
                    alert("media < 1Mb")
                }
            }
        }
        while (reviewRef.current.firstChild) {
            reviewRef.current.removeChild(reviewRef.current.firstChild);
        }
        if (stop === true) {
            return
        }
        props.change(Array.from(Imgs))
        for (var i = 0; i < Imgs.length; i++) {
            var Img = Imgs[i]
            const para = document.createElement('p');
            para.textContent = `File: ${Img.name} || Filesize: ${(Img.size / (1024)).toFixed(1)}kb.`;
            const image = document.createElement('img');
            image.src = URL.createObjectURL(Img);
            image.height = 122
            image.display = "block"
            image.margin = "0 auto"
            reviewRef.current.appendChild(image);
            reviewRef.current.appendChild(para);
        }


    }
    return (<React.Fragment>

        <label aria-required="true" htmlFor="Img">Img :</label>
        <div class="dropbox" ref={dropboxRef} onDrop={drop} onDragOver={dragover} onDragEnter={dragover} >
            {
                props.type === "media" ?
                    <input ref={imgRef} multiple onChange={changeImg} required accept="image/*" type="file" name="Img" class="Img" />
                    :
                    <input ref={imgRef} onChange={changeImg} required accept="image/*" type="file" name="Img" class="Img" />
            }

            <p >Drop image here ...</p>
            <div ref={reviewRef} class="preview"></div>
        </div>

    </React.Fragment>)
}
</script>
@endsection
