<?php

namespace App\Dao;

use App\Contracts\Dao\StarPhoneDaoInterface;
use App\Models\StarPhone;
use Illuminate\Support\Facades\DB;

class StarPhoneDao implements StarPhoneDaoInterface
{
    public function getStarPhone() {
        return StarPhone::getTree();
    }
}