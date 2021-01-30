<?php

namespace projectmanager\Exceptions;

class HttpException extends \Exception
{
  //Display HTTP status code
  public function __construct($message, $code, \Exception $previous = null)
    {
        http_response_code($code);
        parent::__construct($message, $code, $previous);
    }
}
