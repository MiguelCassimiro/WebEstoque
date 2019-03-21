<?php

namespace WebEstoque\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //teste para commit
    public $fillable = ['descricao', 'qtd', 'prc_venda', 'prc_compra'];
}
