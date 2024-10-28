<?php

namespace App\Utility;

use App\Models\Url;
//use Hashids\Hashids;
use Sqids\Sqids;

class HashIdGenerator
{
    public function __construct(protected Sqids $sqids) {}

    public function generate()
    {
        $id = Url::latest()->select('id')->first()?->id ?? 0;

        do {
            $id++;
            $sqids = (new Sqids())->encode([$id]);
        } while (Url::where('hashid', $sqids)->exists());

        return $sqids;
    }
}