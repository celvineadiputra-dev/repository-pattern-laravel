<?php

namespace App\Utils;

trait ResponseTrait
{
    public function infoResponse($code, $data, $message)
    {
        $meta = [
            "meta" => [
                "code" => $code,
                "message" => $message
            ],
            "data" => $data,
        ];
        return response()->json($meta, 200);
    }

    public function errorResponse($code, $data, $message)
    {
        $meta = [
            "meta" => [
                "code" => $code,
                "message" => $message
            ],
            "data" => $data,
            "message" => $message
        ];
        return response()->json($meta, 500);
    }
}
