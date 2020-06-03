<?php

namespace Davidsneal\StatamicCircleCi\Http\Controllers;

use Statamic\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DeployController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function __invoke()
    {
        $response = Http::post('https://circleci.com/api/v2/project/'.config('statamic.circleci.vcs').'/'.config('statamic.circleci.username').'/'.config('statamic.circleci.project').'/pipeline?circle-token='.config('statamic.circleci.token'), config('statamic.circleci.parameters'));

        return response()->json($response->json());
    }
}
