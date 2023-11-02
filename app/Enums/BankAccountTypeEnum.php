<?php

namespace App\Enums;

enum BankAccountTypeEnum: int
{
  case CHECKING = 1;
  case INVESTMENT = 2;
  case CASH = 3;

  public function getName(): string
  {
    return match ($this) {
      self::CHECKING => 'Conta Corrente',
      self::INVESTMENT => 'Investimento',
      self::CASH => 'Dinheiro Físico',
      default => 'Tipo de conta não encontrado'
    };
  }
}
