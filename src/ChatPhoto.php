<?php

namespace Legolabs\TelegramBot;

use function Legolabs\Values\get_value;
use AllowDynamicProperties;

#[AllowDynamicProperties]
class ChatPhoto
{
    private $values = [];

    public function getSmallFileId(): string
    {
        return get_value($this, 'small_file_id');
    }

    public function getBigFileId(): string
    {
        return get_value($this, 'big_file_id');
    }
}
