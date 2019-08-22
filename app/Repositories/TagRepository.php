<?php

namespace App\Repositories;

use App\Tag;
use Maras0830\LaravelSRT\Repository\Repository;

class TagRepository extends Repository
{
    public static function getTag()
    {
        return Tag::all();
    }
}
