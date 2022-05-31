<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    protected $guarded = [];

    public function survey()
    {
        $this->belongsTo(Survey::class);
    }
}
