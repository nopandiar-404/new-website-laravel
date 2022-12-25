<?php

class StringHelper
{
    public static function description($data)
    {
        return Illuminate\Support\Str::limit($data, 150);
    }
}
