<?php

namespace App\Http\Controllers;

use App\Swagger\OpenApi;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController implements OpenApi
{
    use AuthorizesRequests, ValidatesRequests;
}
