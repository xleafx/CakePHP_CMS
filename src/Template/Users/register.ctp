<div class="users form large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Please Register') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('role', [
                'options' => [
                    'admin' => 'Admin',
                    'author' => 'Author'
                ]
            ]);
            echo $this->Form->control('birth', [
                'label' => 'Birth date (only over 16)',
                'type' => 'date',
                'required' => true,
                'maxYear' => date('Y') - 16,
                'minYear' => date('Y') - 50]
            );
        ?>
    </fieldset>
    <?= $this->Form->button(__('Register')); ?>
    <?= $this->Form->end() ?>
</div>
