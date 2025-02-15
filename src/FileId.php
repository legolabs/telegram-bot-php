<?php
namespace Legolabs\TelegramBot;

use AllowDynamicProperties;

/**
 * @see https://core.telegram.org/bots/api#sending-files
 */
#[AllowDynamicProperties]
class FileId
{
    private $fileId;

    public function __construct(string $fileId)
    {
        $this->fileId = $fileId;
    }

    public function getFileId(): string
    {
        return $this->fileId;
    }

    public function __toString()
    {
        return $this->fileId;
    }
}