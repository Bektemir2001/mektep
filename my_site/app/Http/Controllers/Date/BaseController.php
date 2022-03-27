<?php
namespace App\Http\Controllers\Date;

use App\Http\Controllers\Controller;
use App\Services\Date\Service;
class BaseController extends Controller{
    public $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}