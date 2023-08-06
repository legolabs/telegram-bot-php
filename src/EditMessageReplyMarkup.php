<?php

namespace Legolabs\TelegramBot;

use function Legolabs\Values\get_value;
use function Legolabs\Values\get_values;
use function Legolabs\Values\set_value;
use AllowDynamicProperties;

#[AllowDynamicProperties]
class EditMessageReplyMarkup
{
    private $values = [];

    private $objects = [];

    public function __construct(int $chatId, int $messageId)
    {
        set_value($this, 'chat_id', $chatId);
        set_value($this, 'message_id', $messageId);
    }

    public function getChatId(): int
    {
        return get_value($this, 'chat_id');
    }

    public function getMessageId(): int
    {
        return get_value($this, 'messageId');
    }

    public function setInlineMessageId(string $inlineMessageId): void
    {
    	set_value($this, 'inline_message_id', $inlineMessageId);
    }

    public function setReplyMarkup(ReplyMarkup $replyMarkup): void
    {
        set_value($this, 'reply_markup', json_encode(get_values($replyMarkup)));
    }
}
