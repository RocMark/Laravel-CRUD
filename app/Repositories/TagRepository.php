<?php
namespace App\Repositories;

use Maras0830\LaravelSRT\Repository\Repository;
use App\Tag;

class TagRepository extends Repository
{
    public static function getTag(){
        return Tag::all();
    }
}
