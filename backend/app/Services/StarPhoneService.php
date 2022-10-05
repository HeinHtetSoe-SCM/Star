<?php

namespace App\Services;

use App\Contracts\Services\StarPhoneServiceInterface;
use App\Contracts\Dao\StarPhoneDaoInterface;

class StarPhoneService implements StarPhoneServiceInterface
{
    private $starPhoneDao;

    public function __construct(StarPhoneDaoInterface $starPhoneDao)
    {
        $this->starPhoneDao = $starPhoneDao;
    }
    public function getStarPhone() {
        return $this->starPhoneDao->getStarPhone();
    }
}