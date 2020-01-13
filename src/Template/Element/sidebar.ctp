<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">PRINCIPAL</li>
      <li id="cv-users">
        <?= $this->Html->link('<i class="fa fa-users"></i> <span>Usuarios</span>', ['controller' => 'users', 'action' => 'index'], ['escape' => false]) ?>
      </li>
      <li id="cv-notices">
        <?= $this->Html->link('<i class="fa fa-list-alt"></i> <span>Comunicados</span>', ['controller' => 'notices', 'action' => 'index'], ['escape' => false]) ?>
      </li>
      <li id="cv-categories">
        <?= $this->Html->link('<i class="fa fa-tags"></i> <span>Categorias</span>', ['controller' => 'categories', 'action' => 'index'], ['escape' => false]) ?>
      </li>
      <li id="cv-banners">
        <?= $this->Html->link('<i class="fa fa-file-image-o"></i> <span>Banners</span>', ['controller' => 'banners', 'action' => 'index'], ['escape' => false]) ?>
      </li>
      <li class="header">OTROS</li>
      <li id="cv-generals">
        <?= $this->Html->link('<i class="fa fa-gear"></i> <span>Generales</span>', ['controller' => 'generals', 'action' => 'index'], ['escape' => false]) ?>
      </li>
      <li>
        <?= $this->Html->link('<i class="fa fa-sign-out"></i> <span>Cerrar Sessión</span>', ['controller' => 'users', 'action' => 'logout'], ['escape' => false]) ?>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>