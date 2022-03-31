<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable= [
        'idCliente','idProduto','city','amount','value',"create_at"

    ];

    public function cliente(){
        return $this->hasOne(Cliente::class, 'id', 'idCliente');
    }

    public function produto(){
        return $this->hasOne(Produto::class, 'id', 'idProduto');
    }

}
