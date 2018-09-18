<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct() {        
        $this->createBreadCrumb();
    }
    
    public function createBreadCrumb() {
        $segment = Request()->segment(1);
        
        if($segment == 'admin') {
            $this->data['breadcrumb'] = 'dashboard';

            $segment = Request()->segment(2);

            if($segment != '') {
                $this->data['breadcrumb'] .= ' > '.$segment;
            }

            $segment2 = Request()->segment(3);

           if($segment2 != '') {
               $this->data['breadcrumb'] .= ' > '.$segment2;
           }
        }
    }
}
