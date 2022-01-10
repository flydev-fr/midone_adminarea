<?php namespace App\library {

    use WBoyz\LaravelEnum\BaseEnum;

    class CheckValueType extends BaseEnum
    {
        const cvtInteger = 1;
        const cvtFloat = 2;
        const cvtDate = 3;
        const cvtDateTime = 4;
        const cvtString = 5;
        const cvtBool = 6;
    }

}
