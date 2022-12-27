<?php declare(strict_types=1);

namespace Legolabs\TelegramBot;

use function Legolabs\Values\get_value;
use function Legolabs\Values\set_value;

class DeleteMessage
{
    private $values = [];

    public function __construct($chatId, int $messageId)
    {
        set_value($this, 'chat_id', $chatId);
        set_value($this, 'message_id', $messageId);
    }

    public function getChatId()
    {
        return get_value($this, 'chat_id');
    }

    public function getMessageId(): string
    {
        return get_value($this, 'message_id');
    }
}