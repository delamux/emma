<div class="user-panel">
    <div class="pull-left image">
        <?php echo $this->Html->image('user2-160x160.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
    </div>
    <div class="pull-left info">
        <p><?php echo //Insertamos el nombre del usuario
                $current_user['first_name'] . ' ' . $current_user['last_name']
            ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
