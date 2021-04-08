<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class UserController extends Controller{

    public function showAdminName(){
        return 'HAMZA IBRAHIM';
    }

    public function deleteAdminName(){
        return 'HAMZA IBRAHIM Deleted';
    }
}
