

<div class="top_bar">
    <div class="cont-fluid">
        <div class="row">
            <div class="col-2   logo col-2">
                <div style="width: 168px">
                    <a href="/" title="home"
                        style="background-image: url('/images/logo.png'); backgroundRepeat: no-repeat; backgroundSize: 100% 100% ">

                    </a>
                </div>
            </div>
            <div class="col-2 ">
                <time class="time" id="time"><?php echo e($time); ?></time>
            </div>
            <div class="col-2 ">
                <p class="lang">eng vi</p>
            </div>
            <div class="col-2 ">
                <a href=<?php echo e('/' . $adminpath); ?>>
                    Admin
                </a>
                <a href="/signup">signup</a>
                <a href="/signin">signin</a>
            </div>
            <div class="col-2 ">
                <div>
                    <input placeholder="tim kiem" type="text" />
                    <ul class="search_dropdown  hidden">
                        <li>
                            asdas
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-2 ">
                <button type="submit" onClick={search}>Search</button>
            </div>
        </div>
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
                    

                    <li class="show_all_btn" ref={show_all_btn} onclick={show_menu}>
                        <button>&#10006; &#8759;</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    
</header>
<?php /**PATH C:\Apache24\htdocs\laravel-app\resources\views/components/Header.blade.php ENDPATH**/ ?>