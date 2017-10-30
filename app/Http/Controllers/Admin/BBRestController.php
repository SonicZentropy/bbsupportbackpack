<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BBRestController extends Controller {

    public function index() {
        return view(bbrest);
    }
}