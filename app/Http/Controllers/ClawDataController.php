<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Crawl;

class ClawDataController extends Controller {

    public function clawCategory() {
        $result = Crawl::getDataCategory("https://getcoupon.vn");
        dd($result);
    }

    public function clawContent() {
        $result = Crawl::getDataContent("https://getcoupon.vn/store/adayroi/");
        dd($result);
    }

}
