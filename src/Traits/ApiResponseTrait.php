<?php

namespace App\Http\Traits;

use Yusha\ApiResponder\Services\ResponseHandlerService;

trait ApiResponseTrait
{
    public function responseHandler()
    {
        return new ResponseHandlerService();
    }
}
