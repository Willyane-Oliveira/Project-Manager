<?php

namespace projectmanager;

use App\Models\Users;

//this class does not be instanced
abstract class CrudController
{
  abstract protected function getModel(): string;

  public function index($c, $request)
  {
    return $c[$this->getModel()]->all();
  }

  //will show information requested by user
  public function show($c, $request)
  {
    $id = $request->attributes->get(1);
    return $c[$this->getModel()]->get(['id' => $id]);
  }

  //will create a data
  public function create($c, $request)
  {
    return $c[$this->getModel()]->create($request->request->all());
  }

  //will update a data
  public function update($c, $request)
  {
    $id = $request->attributes->get(1);
    return $c[$this->getModel()]->update(['id' => $id], $request->request->all());
  }

  //will remove a register
  public function delete($c, $request)
  {
    $id = $request->attributes->get(1);
    return $c[$this->getModel()]->delete(['id' => $id]);
  }
}
