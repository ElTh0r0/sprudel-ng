<?php
/**
 * PREFERendum (https://github.com/ElTh0r0/preferendum)
 * Copyright (c) github.com/ElTh0r0
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright 2020 github.com/ElTh0r0
 * @license   MIT License (https://opensource.org/licenses/mit-license.php)
 * @link      https://github.com/ElTh0r0/preferendum
 * @version   0.4.0
 */
?>

<div class="center-box">
    <?php
        echo $this->Form->create(
            $comment, [
            'type' => 'post',
            'url' => ['controller' => 'Comments','action' => 'new']
            ]
        );
        echo $this->Form->hidden(
            'pollid', [
            'value' => $poll->pollid,
            ]
        );
        echo $this->Form->control(
            'name', [
            'class' => 'field-long',
            'required' => 'true',
            'minlength' => '1',
            'maxlength' => '32',
            'type' => 'text',
            'label' => __('Your name') . ' *',
            ]
        );
        echo $this->Form->control(
            'text', [
            'rows' => '5',
            'class' => 'field-long field-textarea',
            'required' => 'true',
            'minlength' => '3',
            'maxlength' => '512',
            'label' => __('Your comment') . ' *',
            ]
        );
        echo '<div class="content-right">';
        echo $this->Form->button(__('Save'));
        echo '</div>';
        echo $this->Form->end();
        ?>
</div>
