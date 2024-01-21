<?php
 $link_list = [

[
    "href"=> "/" . config("app.admin_path"),
    "className"=> "",
    "textLink"=> "Dashboard"
],
[
    "href" =>"/" . config("app.admin_path") . "/article",
    "className"=> "",
    "textLink"=> "Articles",
    "child"=> [
        [
            "href"=> "/" . config("app.admin_path") . "/article/add",
            "className"=> "",
            "textLink"=> "New Articles",
        ]
    ]
    ],
[
    "href"=> "/" . config("app.admin_path") . "/question",
    "className"=> "",
    "textLink"=> "Question",
],
[
    "href"=> "/" . config("app.admin_path") . "/order",
    "className"=> "",
    "textLink"=> "Order",
],
[
    "href"=> "/" . config("app.admin_path") . "/comment",
    "className"=> "",
    "textLink"=> "Comment",
],
[
    "href"=> "/" . config("app.admin_path") . "/category",
    "className"=> "",
    "textLink"=> "Category",
    "child"=> [
        [
            "href"=> "/" . config("app.admin_path") . "/category/add",
            "className"=> "",
            "textLink"=> "   New Category",
        ]
    ]
],
[
    "href"=> "/" . config("app.admin_path") . "/user",
    "className"=> "",
    "textLink"=> "User",
    "child"=> [
        [
            "href"=> "/" . config("app.admin_path") . "/user/add",
            "className"=> "",
            "textLink"=> "   New User",
        ]
    ]
],
[
    "href"=> "/" . config("app.admin_path") . "/media",
    "className"=> "",
    'textLink'=> "Media",
    "child"=> [
        [
            "href"=> "/" . config("app.admin_path") . "/media/add",
            "className"=> "",
            "textLink"=> "   New Media",
        ]
    ]
],
[
    "href"=> "/" . config("app.admin_path") . "/tag",
    'className'=> "",
    "textLink"=> "Tags",
    "child"=> [
        [
            "href"=> "/" . config("app.admin_path") . "/tag/add",
            "className"=> "",
            "textLink"=> "   New Tag",
        ]
    ]
],
[
    "href"=> "/" . config("app.admin_path") . "/siteinfo",
    "className"=> "",
    "textLink"=> "Site Info"
],


]
?>
<div class="col-span-3">
    <ul class="navigationBar">
        <li style="margin-bottom=> 22px">
            <a href="/">
                Back to Home
            </a>
        </li>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $link_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href=<?php echo e($link["href"]); ?>>
                <?php echo e($link["textLink"]); ?>

                <!--[if BLOCK]><![endif]--><?php if(isset($link["child"])): ?>
                <ul>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $link["child"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href= <?php echo e($child["href"]); ?>>
                            <?php echo e($child["textLink"]); ?>

                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </ul>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        
    </ul>
</div>
<?php /**PATH /home/noname00/laravel/resources/views/components/NavigationBar.blade.php ENDPATH**/ ?>