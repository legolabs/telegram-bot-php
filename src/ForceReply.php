<?php

namespace Legolabs\TelegramBot;

use function Legolabs\Values\get_value;
use function Legolabs\Values\get_values;
use function Legolabs\Values\set_value;

class ForceReply implements ReplyMarkup
{
    private $values = [];

    private $objects = [];

    public function __construct(bool $selective)
    {
        set_value($this, 'force_reply', true);
        set_value($this, 'selective', $selective);
    }
}