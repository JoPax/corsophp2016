<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Announce;

class AnnounceController extends Controller
{
	public function index() {
		$announces = Announce::get();
		return view('announce.list', ['announces' => $announces]);
	}
}
