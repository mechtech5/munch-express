<?php

namespace App\Services;

use App\Models\Menu;

class MenuService
{
  public function getMenuWithCategory($restoIds)
  {
    $categories = Menu::whereIn('resto_id', $restoIds)
            ->get()
            ->groupBy('category.title');

    return $categories;        
  }
}