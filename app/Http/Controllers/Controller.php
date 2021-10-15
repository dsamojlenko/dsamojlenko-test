<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public array $items = [
        [
            'id' => 1,
            'name' => 'one'
        ],
        [
            'id' => 2,
            'name' => 'two'
        ],
        [
            'id' => 3,
            'name' => 'three'
        ],
        [
            'id' => 4,
            'name' => 'four'
        ]
    ];

    public function index()
    {
        return view('welcome', [
            'items' => $this->items
        ]);
    }
}