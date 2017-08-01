<?php

namespace App\Http\Controllers;



class Pages extends Controller{

      public function getIndex() {

        return view('pages.home');

      }
      public function getGallery() {

        return view('pages.gallery');
      }


}
