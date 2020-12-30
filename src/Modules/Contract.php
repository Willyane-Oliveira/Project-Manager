<?php

namespace projectmanager\Modules;

//Ensures the existence of these methods in Module class
interface Contract
{
  public function getNamespaces() :array;
  public function getContainerConfig() :string;
  public function getEventConfig() :string;
  public function getMiddlewareConfig() :string;
  public function getRouteConfig() :string;
}