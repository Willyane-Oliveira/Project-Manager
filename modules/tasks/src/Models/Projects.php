<?php

namespace projectmanager\Tasks\Models;

use projectmanager\Model;
use App\Models\Utils\UserFilterTrait;

class Projects extends Model
{
  //will call all methods from UserFilterTrait.php
  use UserFilterTrait;
}
