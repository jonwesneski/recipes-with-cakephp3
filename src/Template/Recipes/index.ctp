<div class="recipes index content">
    <h3><?= __('Recipes') ?></h3>
    <?php foreach ($recipes as $recipe): ?>
    <div class="recipe-col col-lg-2 col-md-3 col-sm-4 col-xs-6">
        <div class="recipe-actions">
            <?= $this->Html->iconLink('', ['controller' => 'Recipes', 'action' => 'view', $recipe->id . '.pdf'], 'file-pdf-o', ['title' => 'view pdf', 'data-toggle' => 'tooltip', 'class' => 'show-tooltip', 'isFa' => true]) ?>
            <?= $this->Html->iconLink('', ['controller' => 'Recipes', 'action' => 'edit', $recipe->id], 'pencil-square-o', ['title' => 'edit recipe', 'data-toggle' => 'tooltip', 'class' => 'show-tooltip', 'isFa' => true]) ?>
            <?= $this->Form->iconPostLink(__(''), ['controller' => 'Recipes', 'action' => 'delete', $recipe->id], 'remove', ['confirm' => __('Are you sure yo want to delete # {0}', $recipe->id), 'title' => 'delete recipe', 'data-toggle' => 'tooltip', 'class' => 'show-tooltip']); ?>
        </div>
        <div class="recipe-name">
            <div class="name"><?= h($recipe->name) ?></div>
        </div>
        <div class="recipe-image">
            <?php if($recipe->image !== ""): ?>
                        <?= $this->Html->image($recipe->image, ['alt' => $recipe->name, 'url' => ['controller' => 'Recipes', 'action' => 'view', $recipe->id], 'class' => 'recipe-image']) ?>
            <?php else: ?>
                    <?= $this->Html->link($recipe->name, ['controller' => 'Recipes', 'action' => 'view', $recipe->id]) ?>
            <?php endif; ?>
        </div>
        <div class="recipe-tags">Tags:  
                <?php foreach($this->Query->getTags($recipe->id) as $tag) {
                        echo $this->Html->link($tag, ['action' => 'tags', $tag]);
                        echo '&nbsp;';
                }?>
        </div>
    </div>
    <?php endforeach; ?>
    
    <div class="paginator col-xs-12">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
