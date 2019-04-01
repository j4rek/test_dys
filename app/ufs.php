<?php


namespace App;

use Maatwebsite\Excel\Concerns\FromArray;

class Ufs implements FromArray
{

    public function __construct(array $ufs)
    {
        $this->ufs = $ufs;
    }

    public function array(): array
    {
        return $this->ufs;
    }
}
