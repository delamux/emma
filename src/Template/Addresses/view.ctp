<section class="content-header">
  <h1>
    Address
    <small><?= __('View') ?></small>
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
            echo $this->Form->input('tipo_via', ['placeholder' => $address->tipo_via, 'disabled' => true]);
            echo $this->Form->input('direccion', ['placeholder' => $address->direccion, 'disabled' => true]);
            echo $this->Form->input('numero', ['placeholder' => $address->numero, 'disabled' => true]);
            echo $this->Form->input('piso', ['placeholder' => $address->piso, 'disabled' => true]);
            echo $this->Form->input('puerta', ['placeholder' => $address->puerta, 'disabled' => true]);
            echo $this->Form->input('cod_postal', ['placeholder' => $address->cod_postal, 'disabled' => true]);
            echo $this->Form->input('municipio', ['placeholder' => $address->municipio, 'disabled' => true]);
            echo $this->Form->input('localidad', ['placeholder' => $address->localidad, 'disabled' => true]);
            echo $this->Form->input('provincia', ['placeholder' => $address->provincia, 'disabled' => true]);
            echo $this->Form->input('pais', ['placeholder' => $address->pais, 'disabled' => true]);
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
