<div class="col-3">
    <ul class="navigationBar">
        <li>
            <a href="/">
                Back to Home
            </a>
        </li>
        <li>
            <a href=<?php echo e('/' . $adminpath); ?>>
                Admin
            </a>
        </li>
        <li>
            <a href=<?php echo e('/' . $adminpath . '/article'); ?>>
                Articles
            </a>
            <ul>
                <li>
                    <a href=<?php echo e('/' . $adminpath . '/article/add'); ?>>
                        New Article
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=<?php echo e('/' . $adminpath . '/category'); ?>>
                Category
            </a>
            <ul>
                <li>
                    <a href=<?php echo e('/' . $adminpath . '/category/add'); ?>>
                        New Category
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=<?php echo e('/' . $adminpath . '/user'); ?>>
                User
            </a>
            <ul>
                <li>
                    <a href=<?php echo e('/' . $adminpath . '/user/add'); ?>>
                        New User
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=<?php echo e('/' . $adminpath . '/media'); ?>>
                Media
            </a>
            <ul>
                <li>
                    <a href=<?php echo e('/' . $adminpath . '/media/add'); ?>>
                        New Media
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href=<?php echo e('/' . $adminpath . '/tag'); ?>>
                Tag
            </a>
            <ul>
                <li>
                    <a href=<?php echo e('/' . $adminpath . '/tag/add'); ?>>
                        New Tag
                    </a>

                </li>
            </ul>
        </li>
        <li>
            <a href=<?php echo e('/' . $adminpath . '/siteinfo'); ?>>
                Site info
            </a>
        </li>
    </ul>
</div>
<?php /**PATH C:\Apache24\htdocs\laravel-app\resources\views\components\NavigationBar.blade.php ENDPATH**/ ?>