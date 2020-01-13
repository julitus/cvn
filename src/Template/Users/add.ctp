<section class="content-header cv-page" data-sidebar="users">
  <h1>
    Usuarios
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-offset-3 col-md-6 col-xs-12">
      <div class="box">

        <div class="box-header">
            Agregar Nuevo Usuario
        </div>

        <?= $this->Form->create($user) ?>

            <div class="box-body">
                <div class="form-group">
                    <?= $this->Form->input('username', ['class' => 'form-control', 'label' => 'Usuario <span>*</span>', "autofocus" => "autofocus", 'escape' => false]) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('email', ['class' => 'form-control', 'type' => 'email', 'label' => 'Email <span>*</span>', "autofocus" => "autofocus", 'escape' => false]) ?>
                </div>
            </div>

            <div class="box-footer">
                <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-warning']) ?>
            </div>

        <?= $this->Form->end() ?>

      </div>
    </div>
  </div>
</section>