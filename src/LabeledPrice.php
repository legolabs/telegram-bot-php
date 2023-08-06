<?php

namespace Legolabs\TelegramBot;

use function Legolabs\Values\get_value;
use function Legolabs\Values\get_values;
use function Legolabs\Values\set_object;
use function Legolabs\Values\set_value;
use AllowDynamicProperties;

#[AllowDynamicProperties]
class LabeledPrice
{
    private $values = [];

    public function __construct(string $label, int $amount)
    {
        set_value($this, 'label', $label);
        set_value($this, 'amount', $amount);
    }

    public function getLabel(): string
    {
        return get_value($this, 'label');
    }

    public function getAmount(): int
    {
        return get_value($this, 'amount');
    }
}