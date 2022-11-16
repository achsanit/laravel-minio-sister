<?php

namespace App\Helpers;

class ResponseFormatter
{
  protected static $response = [
    'code' => 200,
    'status' => 'success',
    'data' => null
  ];

  public static function success($data = null, $message = null)
  {
    self::$response['status'] = $message;
    self::$response['data'] = $data;

    return response()->json(self::$response, self::$response['code']);
  }

  public static function error($data = null, $message = null, $code = 400)
  {
    self::$response['status'] = $message;
    self::$response['code'] = $code;
    self::$response['data'] = $data;

    return response()->json(self::$response, self::$response['code']);
  } 
}