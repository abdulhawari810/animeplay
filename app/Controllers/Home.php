<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
      $data = ["title" => "Animeplay"];
        return view('Home/views/home', $data);
    }
    public function explore(): string
    {
      $data = ["title" => "Animeplay"];
        return view('Home/views/explore', $data);
    }
    public function mylist(): string
    {
      $data = ["title" => "Animeplay"];
        return view('Home/views/list', $data);
    }
    public function download(): string
    {
      $data = ["title" => "Animeplay"];
        return view('Home/views/download', $data);
    }
    public function settings(): string
    {
      $data = ["title" => "Animeplay"];
        return view('Home/views/settings', $data);
    }
}
