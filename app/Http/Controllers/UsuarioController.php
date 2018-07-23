<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsuarioController extends Controller
{
   

 	// Listando usuario por ID
 	public function dadosUsuario($id){
		return DB::select("select * from usuario WHERE id = ?", [$id]); 
 	}

	// Cadastrando novo usuario
	public function novoUsuario(Request $request){
		$data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true); // Pega o post ou o raw
 
		$res = DB::insert('insert into usuario (id, nome , email,  senha , sexo , cpf , nascimento, telefone, cep, endereco, bairro, cidade, estado ) values (?, ? , ? , ? , ? , ?, ?, ?, ?, ?, ?, ?, ?)', [$data['id'], $data['nome'] ,$data['email'] ,$data['senha'] ,$data['sexo'] ,$data['cpf'] ,$data['nascimento'] , $data['telefone'] , $data['cep'], $data['endereco'] ,
			 $data['bairro'], $data['cidae'],$data['estado'] ]); // Insert
 
		return ["status" => ($res)?'ok':'erro'];
	}
 
	// Editando usuario
	public function editar($id, Request $request){
		$data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true); // Pega o post ou o raw
 
		$res = DB::update("update usuario set id = ?, nome = ?, email = ?,  senha = ?, sexo = ?, cpf = ? , nascimento = ?, telefone = ?, cep = ?, endereco = ?, bairro = ?, cidade = ?, estado = ?  WHERE id = ?",[$data['id'], $data['nome'] ,$data['email'] ,$data['senha'] ,$data['sexo'] ,$data['cpf'] ,$data['nascimento'] , $data['telefone'] , $data['cep'], $data['endereco'] ,$data['bairro'], $data['cidae'],$data['estado'] , $id]); //Update
 
		return ["status" => ($res)?'ok':'erro'];
	}
 
	// Excluindo usuario
	public function excluir($id){
		$res = DB::delete("delete from usuario WHERE id = ?", [$id]); //Excluir
 
		return ["status" => ($res)?'ok':'erro'];
	}
}
