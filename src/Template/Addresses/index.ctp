<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Addresses
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Addresses</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('tipo_via') ?></th>
              <th><?= $this->Paginator->sort('direccion') ?></th>
              <th><?= $this->Paginator->sort('numero') ?></th>
              <th><?= $this->Paginator->sort('piso') ?></th>
              <th><?= $this->Paginator->sort('puerta') ?></th>
              <th><?= $this->Paginator->sort('cod_postal') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($addresses as $address): ?>
              <tr>
                <td><?= $this->Number->format($address->id) ?></td>
                <td><?= h($address->tipo_via) ?></td>
                <td><?= h($address->direccion) ?></td>
                <td><?= h($address->numero) ?></td>
                <td><?= h($address->piso) ?></td>
                <td><?= h($address->puerta) ?></td>
                <td><?= h($address->cod_postal) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $address->id], ['class'=>'btn btn-primary btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $address->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
