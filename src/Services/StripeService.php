<?php

namespace App\Services;

use App\Entity\Campaign;
use Doctrine\Persistence\ManagerRegistry;

$stripe = new \Stripe\StripeClient(
    getenv('STRIPE_SECRET_KEY')
);

$stripe->paymentIntents->create([
    'amount' => 1099,
    'currency' => 'eur',
    'payment_method_types' => ['card'],
    'off_session' => true,
    'confirm' => true,
    'confirmation_method' => 'manual',
]);

