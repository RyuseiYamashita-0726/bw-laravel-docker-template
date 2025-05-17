<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    private $todo;
    
    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }


    public function index()
    {
        $todos = $this->todo->all();

        return view ('todo.index', ['todos' => $todos]);
    }

    public function create()
    {
        return view('todo.create'); 
    }

    public function store(Request $request)
    {
        $inputs = $request->all();

        //$todo->user_id = Auth::id();
        $this->todo->fill($inputs);
        //ここでattributesにcontentが代入される。
        $this->todo->save();

        return redirect()->route('todo.index');
        //route('test.index')にすると未定義エラーが発生する。name()で定義しなければ使えない。

    }

    public function show($id)
    {
        $todo = $this->todo->find($id);
        
        return view('todo.show', ['todo'=>$todo]);    
    }

    // TODO: ルートパラメータを引数に受け取る
    public function edit($id)
    {
        // TODO: 編集対象のレコードの情報を持つTodoモデルのインスタンスを取得
        $todo = $this->todo->find($id);
        
        return view('todo.edit', ['todo'=>$todo]);
    }

    public function update(Request $request, $id)
    {
        $inputs = $request->all();
        $todo = $this->todo->fill($inputs);
        $todo->save();

        return redirect()->route('todo.show', $todo->id);
    }
}


