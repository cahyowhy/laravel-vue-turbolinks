<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signature;
use App\Http\Resources\SignatureResource;

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

  public function show(Signature $signature) {
    $data = new SignatureResource($signature);
    $name = $data->name;
    return view('signatures.show', ['signature' => json_encode($data), 'name' => $name]);
  }
}
