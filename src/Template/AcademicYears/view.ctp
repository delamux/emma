<section class="content-header">
  <h1>
    <?php echo __('Academic Year'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Nombre') ?></dt>
                                        <dd>
                                            <?= h($academicYear->Nombre) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Fecha Ini') ?></dt>
                                <dd>
                                    <?= h($academicYear->fecha_ini) ?>
                                </dd>
                                                                                                                    <dt><?= __('Fecha Fin') ?></dt>
                                <dd>
                                    <?= h($academicYear->fecha_fin) ?>
                                </dd>
                                                                                                                                                                                                            
                                                                        <dt><?= __('Active') ?></dt>
                            <dd>
                            <?= $academicYear->active ? __('Yes') : __('No'); ?>
                            </dd>
                                                                    
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Courses']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($academicYear->courses)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nombre
                                    </th>
                                        
                                                                    
                                    <th>
                                    Especialidad
                                    </th>
                                        
                                                                    
                                    <th>
                                    Academic Year Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Level Id
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($academicYear->courses as $courses): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($courses->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($courses->nombre) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($courses->especialidad) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($courses->academic_year_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($courses->Level_id) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $courses->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $courses->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
