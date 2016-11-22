<section class="content-header">
  <h1>
    Persona
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
        <?= $this->Form->create($persona, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('fechareg', ['placeholder' => $persona->fechareg, 'disabled' => true]);
            echo $this->Form->input('nombre', ['placeholder' => $persona->nombre, 'disabled' => true]);
            echo $this->Form->input('apellido1', ['placeholder' => $persona->apellido1, 'disabled' => true]);
            echo $this->Form->input('apellido2', ['placeholder' => $persona->apellido2, 'disabled' => true]);
            echo $this->Form->input('sexo', ['placeholder' => $persona->sexo, 'disabled' => true]);
            echo $this->Form->input('nacimiento', ['empty' => true, 'default' => '']);
            echo $this->Form->input('correo', ['placeholder' => $persona->correo, 'disabled' => true]);
            echo $this->Form->input('nacionalidad', ['placeholder' => $persona->nacionalidad, 'disabled' => true]);
            echo $this->Form->input('foto', ['placeholder' => $persona->foto, 'disabled' => true]);
            echo $this->Form->input('Address_id', ['options' => $addresses, $persona->Address_id, 'disabled' => true]);
            echo $this->Form->input('identify_document_id', ['placeholder' => $persona->identify_document_id, 'disabled' => true]);
            echo $this->Form->input('observaciones', ['placeholder' => $persona->observaciones, 'disabled' => true]);
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
