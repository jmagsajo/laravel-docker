<?php

namespace App\Http\Controllers;


use App\Jobs\SampleJob;

class SampleController extends Controller
{
    public function test() {
        echo "Welcome \n";
        $this->dispatch(new SampleJob("My Job From Controller"));
    }
}