<?php

defined( 'WPINC' ) || die;

use Wpshop\Quizle\Admin\MetaBoxes;

/**
 * @version 1.5
 */

/**
 * @var array{'metaboxes': MetaBoxes} $args
 */
?>

<script type="text/html" id="tmpl-quizle-question-hint">
    <# // console.log('tmpl-quizle-question-hint', data) #>
    <div class="quizle-form-cols quizle-question-hint js-question-hint">
        <div class="quizle-form-col quizle-question-hint__text" style="flex:4 0 0;">
            <label for="" class="quizle-form-label"><?php echo __( 'Hint', QUIZLE_TEXTDOMAIN ) ?>
                <?php echo __( '(for tests only)', 'quizle' ) ?>
            </label>
            <?php
            $args['metaboxes']->wrap_for_editor( 'quizle-hint-{{data.hint_id}}', function () {
                ?>
                <textarea id="quizle-hint-{{data.hint_id}}" rows="3" class="quizle-text" data-name="text">{{data.text}}</textarea>
                <?php
            } );
            ?>
        </div>
        <div class="quizle-form-col quizle-question-hint__penalty" style="flex:1 0 0;">
            <label for="" class="quizle-form-label"><?php echo __( 'Hint Penalty', QUIZLE_TEXTDOMAIN ) ?></label>
            <input type="number" class="quizle-text" data-name="penalty" value="{{data.penalty}}" placeholder="0">
        </div>
        <div class="quizle-form-col quizle-question-hint__actions" style="flex: .25 0 0;">
            <div class="quizle-question-hint-action quizle-question-hint-action--delete" title="<?php echo __( 'Remove Hint', QUIZLE_TEXTDOMAIN ) ?>" data-confirm="<?php echo __( 'Are you sure you want to remove the hint?', QUIZLE_TEXTDOMAIN ) ?>"></div>
        </div>

        <input type="hidden" data-name="hint_id" value="{{data.hint_id}}">
    </div>
</script>
