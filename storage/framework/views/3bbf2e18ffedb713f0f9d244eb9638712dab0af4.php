<?php if($breadcrumbs): ?>
    <ul class="breadcrumb">
        <?php foreach($breadcrumbs as $breadcrumb): ?>
            <?php if(!$breadcrumb->last): ?>
                <li><a href="<?php echo e($breadcrumb->url); ?>">
					<?php if(isset($breadcrumb->icon)): ?>
						<i class="fa <?php echo e($breadcrumb->icon); ?>"></i>
					<?php endif; ?>
                 	<?php echo e($breadcrumb->title); ?></a>
                 </li>
            <?php else: ?>
                <li class="active"><?php echo e($breadcrumb->title); ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>