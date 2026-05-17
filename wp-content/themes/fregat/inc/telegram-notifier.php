<?php
/**
 * Telegram notifier for form submissions.
 *
 * Configure in wp-config.php:
 *   define( 'FRIGAT_TG_BOT_TOKEN', 'your-bot-token' );
 *   define( 'FRIGAT_TG_CHAT_ID',   '-your-chat-id' );
 */

add_action( 'quizle/result_handler/updated', function ( $result, $actions ) {

    $token   = defined( 'FRIGAT_TG_BOT_TOKEN' ) ? FRIGAT_TG_BOT_TOKEN : '';
    $chat_id = defined( 'FRIGAT_TG_CHAT_ID' )  ? FRIGAT_TG_CHAT_ID  : '';

    if ( ! $token || ! $chat_id ) {
        return;
    }

    $url = 'https://api.telegram.org/bot' . $token . '/sendMessage';

    $name  = $result->name  ?? '';
    $email = $result->email ?? '';
    $phone = $result->phone ?? '';

    $text = "<b>Новая заявка из квиза (tender-frigate.ru)</b>\n\n";
    if ( $name )  $text .= "Имя: " . htmlspecialchars( $name ) . "\n";
    if ( $email ) $text .= "Email: " . htmlspecialchars( $email ) . "\n";
    if ( $phone ) $text .= "Телефон: " . htmlspecialchars( $phone ) . "\n";

    $rd = json_decode( $result->result_data ?? '{}', true );
    $qs = $rd['questions'] ?? [];

    if ( ! empty( $qs ) ) {
        $text .= "\n<b>Ответы:</b>\n";
        foreach ( $qs as $q ) {
            $text .= "\n<i>" . htmlspecialchars( $q['title'] ) . "</i>\n";
            foreach ( $q['answers'] ?? [] as $a ) {
                if ( ! empty( $a['_checked'] ) ) {
                    $text .= "  " . htmlspecialchars( $a['name'] ) . "\n";
                }
            }
        }
    }

    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_POST, 1 );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( [
        'chat_id'                  => $chat_id,
        'text'                     => $text,
        'parse_mode'               => 'html',
        'disable_web_page_preview' => true,
    ] ) );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json' ] );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    curl_exec( $ch );
    curl_close( $ch );
}, 10, 2 );
