<?php

namespace App\Utils;

use Illuminate\Http\Response;

class ResponseHandler {

    public static function success($statusCode = Response::HTTP_OK, $mensaje, $data = null)
    {
        return response()->json([
            'Codigo' => $statusCode,
            'Mensaje' => $mensaje,
            'Data' => $data
        ], $statusCode);
    }

    public static function error($statusCode = 0, $mensaje)
    {
        $statusCode = $statusCode == 0 ? Response::HTTP_INTERNAL_SERVER_ERROR : $statusCode;

        return response()->json([
            'Codigo' => $statusCode,
            'Mensaje' => $mensaje,
        ], $statusCode);
    }
}
