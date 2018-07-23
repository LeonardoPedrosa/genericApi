<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaGenericaModel extends Model
{
    protected $fillable = ['nome','descricao','quantidade','valor', 'status', 'imagem'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'listagenerica';
}
