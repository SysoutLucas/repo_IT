<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tarefa;

class UserController extends Controller
{
    public function getUsers(){
        $users = User::where('id','<>',auth('api')->user()->id)->get();
        return response()->json($users);
    }

    public function minhasTarefas(){
        $tarefas = auth('api')->user()->tarefas()->get();
        return response()->json($tarefas);
    }

    public function tarefasUser(Request $request) {
        $tarefas = Tarefa::where('user_id',$request->input('user_id'))->get();
        return response()->json($tarefas);

    }
}
