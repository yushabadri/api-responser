<?php

namespace App\Http\Traits;

use Yusha\ApiResponser\Services\ResponseHandlerService;

trait ApiResponseTrait
{
    public function responseHandler()
    {
        return new ResponseHandlerService();
    }
}
