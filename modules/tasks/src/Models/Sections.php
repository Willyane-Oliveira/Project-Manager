<?php

namespace projectmanager\Tasks\Models;

use projectmanager\Model;
use App\Models\Utils\UserFilterTrait;

class Sections extends Model
{
  //will call all methods from UserFilterTrait
  use UserFilterTrait;
}