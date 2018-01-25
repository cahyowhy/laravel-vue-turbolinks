<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignatureWebController extends Controller {

  /**
   * display the GuestBook homepage
   *
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function index() {
    return view('signatures.index');
  }

  /**
   * Display the Guestbook form page
   *
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function create() {
    return view('signatures.sign');
  }
}
