<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListItemController extends Controller
{
   function tampilkan($id, $nama){
        return view('list_item', ['id' => $id, 'nama' => $nama]);
    }
}
