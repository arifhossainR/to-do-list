<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    public function index(){
        $data['items'] = Todo::all();
        return view('dashboard',$data);
    }

    public function createTask(){
        return view('create');
    }
    public function editTask($todo){
        $data['item'] = Todo::find($todo);
        return view('edit',$data);
    }
    public function delete( $todo){
        Todo::find($todo)->delete();
        return redirect()->route('dashboard');
    }

    public function StoreTask(Request  $request){

        if (!empty($request->edit_id)){
            DB::table('todos')->where('id',$request->edit_id)->update($request->only(['title','description','due_date','priority_level']));
        }else{
            DB::table('todos')->insert($request->only(['title','description','due_date','priority_level']));
        }

        return redirect()->route('dashboard');
    }
}
