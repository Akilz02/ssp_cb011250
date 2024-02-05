<?php
namespace App\Enums;

enum Role: int {
    case Admin = 1;
    case User = 2;
    case Manager = 3;
    case customer = 4;
}