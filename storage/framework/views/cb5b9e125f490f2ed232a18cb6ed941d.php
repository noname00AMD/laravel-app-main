<div class="col-3">
    <ul class="navigationBar">
        <li style="margin-bottom: 22px">
            <a href="/">
                Back to Home
            </a>
        </li>
        <li>
            <a href=<?php echo e('/' . env("ADMIN_PATH", "admin")); ?>>
                Admin Dashboard
            </a>
        </li>
        <li>
            <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/article'); ?>>
                Articles
            </a>
            <ul>
                <li>
                    <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/article/add'); ?>>
                        New Article
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/category'); ?>>
                Category
            </a>
            <ul>
                <li>
                    <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/category/add'); ?>>
                        New Category
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/user'); ?>>
                User
            </a>
            <ul>
                <li>
                    <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/user/add'); ?>>
                        New User
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/media'); ?>>
                Media
            </a>
            <ul>
                <li>
                    <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/media/add'); ?>>
                        New Media
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/tag'); ?>>
                Tag
            </a>
            <ul>
                <li>
                    <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/tag/add'); ?>>
                        New Tag
                    </a>

                </li>
            </ul>
        </li>
        <li>
            <a href=<?php echo e('/' . env("ADMIN_PATH", "admin") . '/siteinfo'); ?>>
                Site info
            </a>
        </li>
    </ul>
</div>
<?php /**PATH C:\Users\noname\Desktop\laravel-app1\resources\views/components/NavigationBar.blade.php ENDPATH**/ ?>