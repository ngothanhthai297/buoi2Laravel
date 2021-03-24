<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function demo($id)
    {
       return $id;
    }
    public function batbuoc($id="Thanh-Thai")
    {
      return $id."asdasd";
    }
}
