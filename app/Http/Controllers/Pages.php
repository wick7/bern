<?php

namespace App\Http\Controllers;



class Pages extends Controller{

      public function getIndex() {

        return view('pages.home');

      }
      public function getGallery() {

        return view('pages.gallery');
      }

      public function getPrivacy_Terms() {

        return view('pages.privacy_terms');
      }

      public function getAttribution() {

        return view('pages.attribution');
      }

}
