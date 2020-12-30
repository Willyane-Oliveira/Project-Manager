<?php

namespace projectmanager;

class CrudCreated
{
  public function __invoke($e)
  {
    $event = $e->getName();
    $params = $e->getParams();
    echo sprintf('Triggered event "%s", with parameters: %s', $event, json_encode($params));
  }
}