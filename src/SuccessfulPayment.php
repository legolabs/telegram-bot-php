<?php

namespace Legolabs\TelegramBot;

use function Legolabs\Values\get_value;
use AllowDynamicProperties;

#[AllowDynamicProperties]
class SuccessfulPayment
{
    private $values = [];

    private $objects = [];

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

    public function getTelegramPaymentChargeId(): string
    {
        return get_value($this, 'telegram_payment_charge_id');
    }

    public function getProviderPaymentChargeId(): string
    {
        return get_value($this, 'provider_payment_charge_id');
    }
}
