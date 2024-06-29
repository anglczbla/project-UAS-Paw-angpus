<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\menu;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['nama','no_telp','menu_id','jumblah','harga','waktu','tanggal'];
    
    public function menu() {
        return $this->belongsTo(menu::class, 'menu_id');
    }
}
