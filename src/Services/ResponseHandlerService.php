<?php

namespace Yusha\ApiResponser\Services;

use Illuminate\Http\JsonResponse;


class ResponseHandlerService
{
    /**
     * Handle error responses.
     *
     * @param int|null $statusCode
     * @param array  $data
     * @param string $message
     *
     * @return JsonResponse
     */
    public static function handle($statusCode = null, $data = [], $message = '')
    {
        if ($statusCode === null) {
            // Determine status from the response header
            $statusCode = response()->getStatusCode();
        }

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
