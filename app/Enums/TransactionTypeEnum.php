<?php

namespace App\Enums;

enum TransactionTypeEnum: int
{
  case INCOME = 1;
  case EXPENSE = 2;

  public function getName(): string
  {
    return match ($this) {
      self::INCOME => 'Receita',
      self::EXPENSE => 'Despesa',
      default => 'Tipo de transação não encontrado'
    };
  }
}
