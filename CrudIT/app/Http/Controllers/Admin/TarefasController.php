<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Tarefa;
use App\Models\User;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $tarefas = Tarefa::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tarefas = Tarefa::latest()->paginate($perPage);
        }

        return view('admin.tarefas.index', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $users = User::all();
        $options_user = [null => "Selecione"];
        foreach($users as $user){
            $options_user[$user->id] = $user->name;
        }
        return view('admin.tarefas.create', compact('options_user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required|max:10',
			'description' => 'required',
            'category' => 'required',
            'user_id' => 'required'
		]);
        $requestData = $request->all();
        
        Tarefa::create($requestData);

        return redirect('admin/tarefas')->with('flash_message', 'Tarefa added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tarefa = Tarefa::findOrFail($id);

        return view('admin.tarefas.show', compact('tarefa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $users = User::all();
        $options_user = [null => "Selecione"];
        foreach($users as $user){
            $options_user[$user->id] = $user->name;
        }


        return view('admin.tarefas.edit', compact('tarefa','options_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required|max:10',
			'description' => 'required',
            'category' => 'required',
            'user_id' => 'required'
		]);
        $requestData = $request->all();
        
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update($requestData);

        return redirect('admin/tarefas')->with('flash_message', 'Tarefa updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Tarefa::destroy($id);

        return redirect('admin/tarefas')->with('flash_message', 'Tarefa deleted!');
    }
}
