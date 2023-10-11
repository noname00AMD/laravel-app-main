
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
                <time class="time" id="time"><?php echo e($time); ?></time>
            </div>
            <div class="col-span-2 ">
                <p class="lang">eng vi</p>
            </div>
            <div class="col-span-2 ">
                <a href=<?php echo e('/' .env("ADMIN_PATH")); ?>>
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
                            

                            <li class="show_all_btn" id="btn">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('submenu', []);

$__html = app('livewire')->mount($__name, $__params, 'TeyQgD0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            
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
<?php /**PATH C:\Users\noname\Desktop\laravel-app-main\resources\views/livewire/header.blade.php ENDPATH**/ ?>