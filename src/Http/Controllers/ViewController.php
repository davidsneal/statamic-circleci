<?php

namespace Davidsneal\StatamicCircleCi\Http\Controllers;

use Statamic\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function __invoke()
    {
        return view('circleci::cp.deploy', [
            'route' => route('statamic.cp.davidsneal.circleci.deploy'),
        ]);
    }
}
