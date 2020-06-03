<?php

return [
    'parameters' => [
        'branch' => env('CIRCLECI_BRANCH'),
    ],
    'project' => env('CIRCLECI_PROJECT'),
    'token' => env('CIRCLECI_TOKEN'),
    'username' => env('CIRCLECI_USERNAME'),
    'vcs' => env('CIRCLECI_VCS'),
];
