<?php

namespace App\Http\Controllers;
use \Milon\Barcode\DNS1D;

class PagesController extends Controller {
  public function getIndex() {
    return view('barcode');
  }
}
