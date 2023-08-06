<?php

namespace Legolabs\TelegramBot;

use function Legolabs\Values\get_value;
use function Legolabs\Values\get_values;
use function Legolabs\Values\set_value;
use AllowDynamicProperties;

/**
 * @see https://core.telegram.org/bots/api#getfile
 */
#[AllowDynamicProperties]
class GetFile
{
    private $values = [];

    public function __construct(string $fileId)
    {
        set_value($this, 'file_id', $fileId);
    }
}