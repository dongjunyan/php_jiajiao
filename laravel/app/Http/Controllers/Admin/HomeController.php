<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2018/5/24
 * Time: 14:43
 */

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        return view('Admin.index');
    }
}
