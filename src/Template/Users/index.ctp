<section class="content-header cv-page" data-sidebar="users">
  <h1>
    Usuarios
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-header">
            <?= $this->Html->link(__('<span class="fa fa-plus" aria-hidden="true"></span> Nuevo'), ['action' => 'add'], ['class' => 'btn btn-primary', 'title' => 'Nuevo registro', 'escape' => false]) ?>
        </div>

        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?= $this->Paginator->sort('username', 'Usuario') ?></th>
                    <th><?= $this->Paginator->sort('email', 'Email') ?></th>
                    <th><?= $this->Paginator->sort('created', 'Creado') ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $key => $user): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td class="actions">                      
                        <?= $this->Html->link(__('<span class="fa fa-eye" aria-hidden="true"></span>'), ['action' => 'view', $user->id], ['class' => 'btn btn-action btn-primary', 'title' => 'Ver', 'escape' => false]) ?>
                        <?= $this->Html->link(__('<span class="fa fa-edit" aria-hidden="true"></span>'), ['action' => 'edit', $user->id], ['class' => 'btn btn-action btn-primary', 'title' => 'Editar', 'escape' => false]) ?>

                        <?= $this->Form->postLink(__('<span class="fa fa-trash" aria-hidden="true"></span>'), ['action' => 'delete', $user->id], ['confirm' => __('¿Estas seguro que quieres eliminar el registro # {0}?', $user->username), 'class'=>'btn btn-action btn-warning', 'title' => 'Eliminar', 'escape' => false]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ') ?>
                <?= $this->Paginator->prev('< ') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(' >') ?>
                <?= $this->Paginator->last(' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Pag. {{page}} de {{pages}}, mostrando {{current}} registro(s) de un total de {{count}}')]) ?></p>
          </div>

      </div>
    </div>
  </div>
</section>