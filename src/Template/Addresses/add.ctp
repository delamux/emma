<section class="content-header">
  <h1>
    Address
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($address, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('tipo_via');
            echo $this->Form->input('direccion');
            echo $this->Form->input('numero');
            echo $this->Form->input('piso');
            echo $this->Form->input('puerta');
            echo $this->Form->input('cod_postal');
            echo $this->Form->input('municipio');
            echo $this->Form->input('localidad');
            echo $this->Form->input('provincia');
            echo $this->Form->input('pais');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
