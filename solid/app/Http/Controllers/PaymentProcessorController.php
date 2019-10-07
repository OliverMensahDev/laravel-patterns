<?php

namespace App\Http\Controllers;

use App\Domains\Payment\PaymentProcessor;

class PaymentProcessorController extends Controller
{
  private $paymentProcessor;

  public function __construct(PaymentProcessor $paymentProcessor)
  {
    $this->paymentProcessor = $paymentProcessor;
  }

  public function sendPayments()
  {
    return $this->paymentProcessor->sendPayments();
  }
}