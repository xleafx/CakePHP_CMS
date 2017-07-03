<div class="articles form large-10 columns">
    <h1><?= h($article->title) ?></h1>
    <p><?= ($article->image) ?></p>
    <p><?= ($article->body) ?></p>
    <p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
    <p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></p>
    <p>
        <?= $this->Form->postLink(
            'Delete',
            ['action' => 'delete', $article->slug],
            ['confirm' => 'Are you sure?'])
        ?>
    </p>
</div>
