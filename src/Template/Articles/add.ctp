<h1>Add Article</h1>
<div class="articles form large-10 columns">
    <?php
        echo $this->Form->create($article);
        echo $this->Form->control('title');
        echo $this->Form->control('image', ['type' => 'file']);
        echo $this->Ck->input('body', ['rows' => '3']);
        echo $this->Form->control('tags._ids', ['options' => $tags]);
        echo $this->Form->control('tag_string', ['type' => 'text']);
        echo $this->Form->button(__('Save Article'));
        echo $this->Form->end();
    ?>
</div>