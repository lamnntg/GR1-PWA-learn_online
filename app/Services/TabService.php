<?php

namespace App\Services;

use App\Models\Course;
use App\Services\TabServiceInterface;

class TabService implements TabServiceInterface
{
    public function courseGetAll()
    {
      return Course::all();
    }
}
