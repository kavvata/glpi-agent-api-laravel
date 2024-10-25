<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ativo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ativo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ativo query()
 *
 * @mixin \Eloquent
 */
class Ativo extends Model
{
    use SoftDeletes;

    //
}
