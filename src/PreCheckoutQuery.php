<?php
namespace Legolabs\TelegramBot;

use function Legolabs\Values\get_object;
use function Legolabs\Values\get_value;
use function Legolabs\Values\set_value;
use AllowDynamicProperties;

#[AllowDynamicProperties]
class PreCheckoutQuery
{
    private $values = [];

    private $objects = [];

    public function getId(): string
    {
        return get_value($this, 'id');
    }

    public function getFrom(): User
    {
        return get_object($this, 'from', User::class);
    }

    public function getCurrency(): string
    {
        return get_value($this, 'currency');
    }

    public function getTotalAmount(): int
    {
        return get_value($this, 'total_amount');
    }

    public function getInvoicePayload(): string
    {
        return get_value($this, 'invoice_payload');
    }

    public function getShippingOptionId(): ?string
    {
        return get_value($this, 'shipping_option_id');
    }

    public function setShippingOptionId(?string $shippingOptionId): void
    {
        set_value($this, 'shipping_option_id', $shippingOptionId);
    }

    public function getOrderInfo(): ?OrderInfo
    {
        return get_object($this, 'order_info', OrderInfo::class);
    }

    public function setOrderInfo(?OrderInfo $orderInfo): void
    {
        set_object($this, 'order_info', $orderInfo);
    }
}
