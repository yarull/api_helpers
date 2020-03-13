<?php

namespace Yarull\ApiHelpers\Facades;

use Illuminate\Database\Eloquent\Model;

class JSONResponse extends Model
{

  public static function ok($data){
    return response()->json([
      'status' => 'ok',
      'data' => $data
    ],200);
  }

  public static function err($err,$message)
  {
    abort(response()->json([
      'status' => 'error',
      'message' => $message,
    ], $err));
  }

  public static function exist($obj,$response,$name=null,$message=null){
    if(!$obj){
      if(!$name){
        $message = 'La búsqueda no arrojó resultados';
      }
      elseif (!$message) {
        $message = 'La búsqueda de ' . $name . ' no arrojó resultados';
      }
      self::err(404,$message);
    }
  }

}
