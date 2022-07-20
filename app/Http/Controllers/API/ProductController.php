<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProductController extends Controller
{
    public function index(){
        return User::find(1)->products()->get();
    }
}
