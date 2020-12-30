<?php

namespace projectmanager\Modules;

use projectmanager\App;

class ModuleRegistry
{
  private $app;
  private $composer;
  private $modules = [];

  public function setApp(App $app)
  {
    $this->app = $app;
  }

  //will register the application
  public function setComposer($composer)
  {
    $this->composer = $composer;
  }

  //Adds a class that will implement the Contract
  public function add(Contract $module)
  {
    $this->modules[] = $module;
  }

  public function run()
  {
    foreach($this->modules as $module){
      $this->registry($module);//create a registry file that will registry the module
    }
  }

  //Register namespaces and include the configuration files
  private function registry($module)
  {
    $app = $this->app;
    $router = $app->getRouter();//bring the route via container
    $container = $app->getContainer();

    $namespaces = $module-> getNamespaces();

    foreach ($namespaces as $prefix => $path){
      $this->composer->setPsr4($prefix, $path);
    }

    require $module-> getContainerConfig();
    require $module-> getEventConfig();
    require $module-> getMiddlewareConfig();
    require $module-> getRouteConfig();
  }
}