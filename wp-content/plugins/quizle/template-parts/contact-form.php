<?php

defined( 'WPINC' ) || die;

use Wpshop\Quizle\Admin\Settings;
use Wpshop\Quizle\Social;
use function Wpshop\Quizle\build_attributes;
use function Wpshop\Quizle\container;

/**
 * @version 1.5
 */

/**
 * @var array $args
 */

$quizle_id = $args['quizle_id'];

$contact_enabled = get_post_meta( $quizle_id, 'contact-enabled', true );

if ( ! $contact_enabled ) {
    return;
}

$social   = container()->get( Social::class );
$settings = container()->get( Settings::class );

$contact_with_name   = get_post_meta( $quizle_id, 'contact-with-name', true );
$contact_with_name   = get_post_meta( $quizle_id, 'contact-with-name', true );
$contact_with_email  = get_post_meta( $quizle_id, 'contact-with-email', true );
$contact_with_phone  = get_post_meta( $quizle_id, 'contact-with-phone', true );
$contact_title       = get_post_meta( $quizle_id, 'contact-title', true );
$contact_description = get_post_meta( $quizle_id, 'contact-description', true );
/**
 * @since 1.0
 */
$contact_description  = apply_filters( 'quizle/contacts/description', $contact_description, $quizle_id );
$contact_btn_text     = get_post_meta( $quizle_id, 'contact-btn-text', true );
$contact_privacy_text = get_post_meta( $quizle_id, 'contact-privacy-text', true ) ?: $settings->get_value( 'privacy_policy' );
$contact_privacy_text = $contact_privacy_text ?: __( 'Accept privacy policy', 'quizle' );

$messengers = $social->get_quizle_messengers( $quizle_id );

if ( empty( $contact_btn_text ) ) {
    // todo из настроек плагина
    $contact_btn_text = __( 'Submit', 'quizle' );
}

$user       = wp_get_current_user();
$user_name  = apply_filters( 'quizle/contacts/user_name', $user->display_name, $user );
$user_email = $user->user_email;

?>

<div class="quizle-contacts js-quizle-contacts">

    <?php if ( empty( $contact_title ) || ! empty( $contact_description ) ): ?>
        <div class="quizle-contacts__body">
            <?php if ( ! empty( $contact_title ) ): ?>
                <div class="quizle-contacts__title"><?php echo $contact_title ?></div>
            <?php endif ?>
            <?php if ( ! empty( $contact_description ) ): ?>
                <div class="quizle-contacts__description"><?php echo $contact_description ?></div>
            <?php endif ?>
        </div>
    <?php endif ?>


    <div class="quizle-contacts__fields js-quizle-contact-data">
        <form>
            <fieldset>
                <?php if ( $contact_with_name ): ?>
                    <div class="quizle-contacts__field">
                        <input type="text" name="data[contacts][name]" value="<?php echo esc_attr( $user_name ) ?>" required placeholder="<?php echo esc_attr__( 'Name', 'quizle' ) ?>" class="quizle-text">
                    </div>
                <?php endif ?>
                <?php if ( $contact_with_email ): ?>
                    <div class="quizle-contacts__field">
                        <input type="email" name="data[contacts][email]" value="<?php echo esc_attr( $user_email ) ?>" required placeholder="<?php echo esc_attr__( 'E-mail', 'quizle' ) ?>" class="quizle-text">
                    </div>
                <?php endif ?>
                <?php if ( $contact_with_phone ): ?>
                    <?php if ( $settings->get_value( 'enable_phone_mask' ) ): ?>
                        <div class="quizle-contacts__field js-quizle-contacts-phone">
                            <input type="tel" name="" required placeholder="" class="quizle-text">
                            <input type="hidden" name="data[contacts][phone]">
                        </div>
                    <?php else: ?>
                        <div class="quizle-contacts__field">
                            <input type="text" name="data[contacts][phone]" required placeholder="<?php echo esc_attr__( 'Phone', 'quizle' ) ?>" class="quizle-text">
                        </div>
                    <?php endif ?>
                <?php endif ?>

                <?php foreach ( $messengers as $messenger_key => $messenger ):
                    $required = apply_filters( 'quizle/contacts/messenger_required', false, $messenger_key );
                    $required = $required ? ' required' : '';
                    $style = '';
                    if ( $settings->get_value( 'user_messengers_brand_colors' ) ) {
                        $style = ' style="color: ' . $messenger['color'] . '"';
                    }
                    ?>

                    <div class="quizle-contacts__field">
                        <div class="quizle-contact-messengers">
                            <svg xmlns="http://www.w3.org/2000/svg" class="quizle-contact-messengers__icon" viewBox="0 0 32 32">
                                <path d="<?php echo $messenger['path'] ?>" fill="currentColor"<?php echo $style ?>></path>
                            </svg>
                            <input type="text" name="data[messengers][<?php echo esc_attr( $messenger_key ) ?>]" placeholder="<?php echo esc_attr( $messenger['title'] ) ?>" class="quizle-text quizle-contact-messengers__input"<?php echo $required ?>>
                        </div>
                    </div>
                <?php endforeach ?>

                <?php
                $btn_attributes = [
                    'class'           => 'quizle-button',
                    'type'            => 'submit',
                    'data-toggle_txt' => __( 'Submitting data...', QUIZLE_TEXTDOMAIN ),
                ];
                if ( $settings->get_value( 'grecaptcha.enabled' ) ) {
                    $btn_attributes['class'] .= ' g-recaptcha';
                }
                ?>
                <label class="quizle-contacts__agreement"><input type="checkbox" class="js-quizle-contacts-agreement"><span><?php echo $contact_privacy_text ?></span></label>
                <div class="quizle-contacts__buttons">
                    <button disabled <?php echo build_attributes( $btn_attributes ) ?>><?php echo $contact_btn_text ?></button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
