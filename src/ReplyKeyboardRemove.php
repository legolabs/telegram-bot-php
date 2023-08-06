<?php

namespace Legolabs\TelegramBot;

use function Legolabs\Values\get_value;
use function Legolabs\Values\set_value;
use AllowDynamicProperties;

#[AllowDynamicProperties]
class ReplyKeyboardRemove implements ReplyMarkup
{
    private $values = [];

    private $objects = [];

    public function __construct(bool $selective = false)
    {
        set_value($this, 'remove_keyboard', true);
        set_value($this, 'selective', $selective);
    }

    public function isSelective(): bool
    {
        return get_value($this, 'selective', false);
    }
}
