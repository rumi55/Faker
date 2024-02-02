<?php

namespace Faker\Provider\bs_BA;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{firstName}}',
    ];

    protected static $companySuffix = [
        'd.o.o.', 'Security',
    ];

    protected static $companyPrefix = [
        'Autoškola', 'Cjećara', 'Informatički obrt', 'Frizerski salon', 'Kladionice', 'Market', 'Mesnica', 'Samostalni prevoznik', 'Suvenirnica', 'Turistička agencija', 'Voćara',
    ];

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}
