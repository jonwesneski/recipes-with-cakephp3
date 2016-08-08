<div class="header">
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <?= $this->Html->link(__('My Recipes'), ['controller' => 'Recipes', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><?= $this->Html->link('Add Recipe', ['controller' => 'Recipes', 'action' => 'add'], ['class' => 'nav-item nav-link active']) ?></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recipe Tags <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><?= $this->Html->link('Add a tag', ['controller' => 'Tags', 'action' => 'add'], ['class' => 'nav-item nav-link active']) ?></li>
          <li><?= $this->Html->link('Edit tags', ['controller' => 'Tags', 'action' => 'edit'], ['class' => 'nav-item nav-link active']) ?></li>
<!--          <li class="divider"></li>-->
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>
          <?= $this->Form->create(null, ['type' => 'GET', 'url' => ['controller' => 'Recipes', 'action' => 'search'], ['class' => 'navbar-form', 'role' => 'search']]) ?>
            <div class="input-group">
                <?= $this->Form->input('q', ['label' => false, 'placeholder' => 'Search', 'id' => 'search_keywords', 'class' => 'form-control']) ?>
                <div class="input-group-btn">
                    <?= $this->Form->button("<span class='glyphicon glyphicon-search'></span>", ['class' => 'btn btn-default btn-search', 'type' => 'submit']) ?>
                </div>
            </div>
        <?= $this->Form->end() ?>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</div>