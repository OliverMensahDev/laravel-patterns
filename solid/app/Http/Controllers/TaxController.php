<?php

namespace App\Http\Controllers;

use App\Services\TaxRepository;

class TaxController extends Controller
{
  private $taxRepository;
  public function __construct(TaxRepository $taxRepository)
  {
    $this->taxRepository = $taxRepository;
  }
  public function getTaxes()
  {
    return $this->taxRepository->calculate();
  }
}
