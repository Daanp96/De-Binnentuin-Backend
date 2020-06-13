<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from Cn.
     *
     * @var array
     */
    protected $except = [
        '/admin/change',
        '/admin/timeslots/update',
        '/admin/menuitem/update',
    ];
}
