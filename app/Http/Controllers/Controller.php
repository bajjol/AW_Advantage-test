<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Lorisleiva\Actions\Concerns\AsAction;

class Controller extends BaseController
{
    use AsAction;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
