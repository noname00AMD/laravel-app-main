{{--
export default component$(() => {
var props = useContext(propsContext);
const time = useSignal((new Date()).toDateString());
var pin = useSignal(false)
let show = useSignal(false)
var topBarElm = useSignal();
// const headerElm = useSignal()
let show_all_btn = useSignal()
// let hide_all_btn = useSignal()
// let submenu = useSignal()
let willHide = useSignal(false)
useVisibleTask$(() => {
// console.log(pin.value);
const observer = new IntersectionObserver(
([e]) => {
if (e.isIntersecting) {
console.log("notpin");
pin.value = false
} else {
console.log("pin");
pin.value = true
}
},
{ threshold: [0] }
);
observer.observe(topBarElm.value)

})
let search = () => {
console.log("search");
}
let show_menu = $(() => {

if (show.value === true) {
willHide.value = show.value
setTimeout(() => {
willHide.value = !show.value
show.value = !show.value
}, 300);
return
}
show.value = !show.value
})
return (
<> --}}
    <div>
        <div class="top_bar container mx-auto grid grid-cols-12 gap-4">
            <div class="col-start-1 col-span-2  logo ">
                <div style="width: 168px">
                    <a href="/" title="home"
                        style="background-image: url('/images/logo.png'); background-repeat: no-repeat; background-size: 100% 100% ">
                    </a>
                </div>
            </div>
            <div class="col-span-2 ">
                <time class="time" id="time">{{ $time }}</time>
            </div>
            <div class="col-span-2 ">
                <p class="lang">eng vi</p>
            </div>
            <div class="col-span-2 ">
                <a href={{ '/' .config("app.admin_path")}}>
                    Admin
                </a>
                <a href="/signup">signup</a>
                <a href="/signin">signin</a>
            </div>
            <div class="col-span-2 ">
                <div>
                    <input placeholder="tim kiem" type="text" />
                    <ul class="search_dropdown  hidden">
                        <li>
                            asdas
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-span-2 ">
                <button type="submit" onClick={search}>Search</button>
            </div>
        </div>
        <header class="header ">
            <div class="nav">
                <div class="cont ">
                    <div class=" row">
                        <ul class="col-12 ">
                            <li class="home">
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            {{-- @foreach ($category as $categories)
                            @if ($category . taxonomy === 'CATEGORY')
                            <li key={category.term_taxonomy_id} class="category">
                                <a href={category.slug}>
                                    {category.name}
                                </a>
                            </li>
                            @endif
                            @endforeach --}}

                            <li class="show_all_btn" id="btn">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <x-Submenu showing={show.value} hide={show_menu} categories={props.categories} willHide={willHide.value} />

            <style>
                .menu_btn {
                    font-size: 20px;
                }
            </style>
            <script type="text/babel">
                const e = React.createElement;
    // class btn extends React.Component{
    //     constructor(props) {
    //     super(props);
    //     this.state = {open: true};
    //     this.handle= this.handle.bind(this)
    //   }
    //    handle (e){
    //     //   e.innerHTML ='<i class="bi bi-list-nested"></i>'
    //     this.setState({open: !this.state.open})
    //     console.log("her");
    //     }
    //     render() {
    //         return(<React.Fragment>
    //         {this.state.open?
    //         <button onClick={this.handle}> <i class="bi bi-list"></i></button> :
    //         <button onClick={this.handle}> <i class="bi bi-list-nested"></i></button> }
    //     </React.Fragment>        )     }
    // }
    function btn(){
       var [open,setOpen] = React.useState(false)
       var   handle= (e)=>{
           setOpen(!open)
       }
       return(<React.Fragment>
           {!open?
           <button onClick={handle}> <i class="bi bi-list"></i></button> :
           <button onClick={handle}> <i class="bi bi-list-nested"></i></button> }
       </React.Fragment>        )  
    }
       const domContainer = document.querySelector('#btn');
    const root = ReactDOM.createRoot(domContainer);
    root.render(e(btn));
    </script>

        </header>
    </div>
