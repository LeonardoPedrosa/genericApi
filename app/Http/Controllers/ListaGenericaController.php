<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ListaGenericaController extends Controller
{
    //
      // Listando pessoas
    public function produtos(){
		return DB::select('select * from listagenerica');
	}
 
	// Cadastrando pessoas
	public function novoProduto(Request $request){
		$data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true); // Pega o post ou o raw
 
		$res = DB::insert('insert into listagenerica (id, nome , descricao,  quantidade , valor , status , imagem ) values (?, ? , ? , ? , ? , ?, ?)', [$data['id'], $data['nome'] , $data['descricao'] , $data['quantidade'], $data['valor'] ,
			 $data['status'], $data['imagem']]); // Insert
 
		return ["status" => ($res)?'ok':'erro'];
	}
 
	// Editando pessoas
	public function editar($id, Request $request){
		$data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true); // Pega o post ou o raw
 
		$res = DB::update("update listagenerica set id = ?, nome = ?, descricao = ?, quantidade = ? , valor = ? , status = ? , imagem = ? WHERE id = ?",[$data['id'], $data['nome'], $data['descricao'] , $data['quantidade'], $data['valor'], $data['status'], $data['imagem'], $id]); //Update
 
		return ["status" => ($res)?'ok':'erro'];
	}
 
	// Excluindo pessoas
	public function excluir($id){
		$res = DB::delete("delete from listagenerica WHERE id = ?", [$id]); //Excluir
 
		return ["status" => ($res)?'ok':'erro'];
	}
}
