<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB; // para usar a classe DB

class PessoaController extends Controller
{
    // Listando pessoas
    public function lista(){
		return DB::select('select * from pessoa');
	}

	// Cadastrando pessoas
	public function novo(Request $request){
		$data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true); // Pega o post ou o raw

		$res = DB::insert('insert into pessoa (nome, email) values (?, ?)', [$data['nome'], $data['email']]); // Insert

		return ["status" => ($res)?'ok':'erro'];
	}

	// Editando pessoas
	public function editar($id, Request $request){
		$data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true); // Pega o post ou o raw

		$res = DB::update("update pessoa set nome = ?, email = ? WHERE id = ?",[$data['nome'], $data['email'], $id]); //Update

		return ["status" => ($res)?'ok':'erro'];
	}

	// Excluindo pessoas
	public function excluir($id){
		$res = DB::delete("delete from pessoa WHERE id = ?", [$id]); //Excluir

		return ["status" => ($res)?'ok':'erro'];
	}
}
