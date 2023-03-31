<?php

declare(strict_types = 1);

namespace Service\Billing;

use Service\Billing\BankTransfer;

class Card extends BankTransfer implements IBilling
{
    /**
     * @inheritdoc
     */
    public function pay(float $totalPrice): void
    {
        // Оплата кредитной или дебетовой картой
    }
}
