<?php

namespace baibai\baibai\Entities;

use Illuminate\Database\Eloquent\Model;

class Observador extends Model
{
    /**
     * Get the comments for the blog post.
     */

    protected $table='observador';

    protected $fillabel=['user_id','observacion','compromete'];


}