<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\FormEngine;


class MainController extends Controller
{
    function AfriChildHub()
    {

        $data = [
            'Title'      => 'AfriChild Knowlegde Hub',
            'Desc'       => 'Main Dashboard',

        ];

        return view('scrn', $data);
    }

    public function ManageCategories()
    {

        $Form =  new FormEngine;

        $Form = new FormEngine;
        $rem = ['created_at', 'updated_at', 'id', 'CID', 'Thumbnail'];

        $Categories = DB::table('categories')->get();
        $data = [
            'Title'      => 'AfriChild Knowledge Hub: Research Categories',
            'Desc'       => 'Comprehensive management of publication categories',
            "Page" => "Categories.MgtCategories",
            'Categories' => $Categories,
            'rem' => $rem,
            'Form' => $Form->Form('categories'),

        ];

        return view('scrn', $data);
    }
}
