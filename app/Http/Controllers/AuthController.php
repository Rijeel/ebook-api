<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {
    
    public function me() {
        return [
            "nis" => 3103118137,
            "name" => "Wahyudi",
            "gender" => "Laki-laki",
            "phone" => 6281575404482,
            "class" => "XII RPL 4"
        ];
    }
}