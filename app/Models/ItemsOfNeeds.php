<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsOfNeeds extends Model
{
    use HasFactory;

    const TABLE = 'items_of_needs';

    protected $table = self::TABLE;

    protected $fillable = [
        'need_id',
        'qtd', 
        'description',
        'obs',
    ];

    public function need(){

        // Get The Need That Owns The Item -> Relationship
        return $this->belongsTo(Need::class, 'need_id');

    }

   public static function FindNeed($need){

        $item = ItemsOfNeeds::find($need);
        return $item->need->project_id;
   }
}
