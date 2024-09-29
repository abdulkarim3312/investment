<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgreementProcedure extends Model
{
    use HasFactory;
    protected $table = 'agreement_procedures';
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(AgreementType::class, 'type_id');
    }
}
