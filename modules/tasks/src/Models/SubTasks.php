<?php

namespace projectmanager\Tasks\Models;

use projectmanager\Model;
use App\Models\Utils\UserFilterTrait;

class SubTasks extends Model
{
  //will call all methods from UserFilterTrait.php
  use UserFilterTrait;
}