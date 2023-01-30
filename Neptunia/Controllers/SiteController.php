<?php

namespace Neptunia\Controllers;

use Neptunia\App\Controller;
use Neptunia\App\Application;

class SiteController extends Controller
{
    public function contact()
    {
        $params = [];
        return $this->Render("contact", $params);
    }
}
