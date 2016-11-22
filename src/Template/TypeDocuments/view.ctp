<section class="content-header">
  <h1>
    <?php echo __('Type Document'); ?>
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
                                                                                                                <dt><?= __('Tipo Documento') ?></dt>
                                        <dd>
                                            <?= h($typeDocument->tipo_documento) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Personas']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($typeDocument->personas)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Fechareg
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nombre
                                    </th>
                                        
                                                                    
                                    <th>
                                    Apellido1
                                    </th>
                                        
                                                                    
                                    <th>
                                    Apellido2
                                    </th>
                                        
                                                                    
                                    <th>
                                    Sexo
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nacimiento
                                    </th>
                                        
                                                                    
                                    <th>
                                    Correo
                                    </th>
                                        
                                                                    
                                    <th>
                                    Nacionalidad
                                    </th>
                                        
                                                                    
                                    <th>
                                    Foto
                                    </th>
                                        
                                                                    
                                    <th>
                                    Address Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Observaciones
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Documento
                                    </th>
                                        
                                                                    
                                    <th>
                                    Type Document Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($typeDocument->personas as $personas): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($personas->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->fechareg) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->nombre) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->apellido1) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->apellido2) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->sexo) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->nacimiento) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->correo) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->nacionalidad) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->foto) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->Address_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->observaciones) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($personas->documento) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($personas->type_document_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Personas', 'action' => 'view', $personas->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Personas', 'action' => 'edit', $personas->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Personas', 'action' => 'delete', $personas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personas->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
