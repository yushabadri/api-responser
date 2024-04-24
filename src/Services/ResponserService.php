<?php

namespace Yusha\ApiResponser\Services;

class Responser
{
    public static function handle($statusCode, $data = [], $message = '')
    {
        $status = self::getStatusFromCode($statusCode);

        return response()->json([
            'status'  => $status,
            'data'    => $data,
            'code'    => $statusCode,
            'message' => $message,
        ], $statusCode);
    }

    private static function getStatusFromCode($statusCode)
    {
        $statusMap = [
            200 => 'success',
            201 => 'created',
            204 => 'no_content',
            400 => 'bad_request',
            401 => 'unauthorized',
            403 => 'forbidden',
            404 => 'not_found',
            422 => 'unprocessable_entity',
            500 => 'internal_server_error',
        ];

        return $statusMap[$statusCode] ?? 'unknown_status';
    }
}
