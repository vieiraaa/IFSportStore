<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
    use HasFactory;
    protected $table = "itensped";

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
    public function pedido(){
        return $this->hasMany(Pedido::class);
    }
}
