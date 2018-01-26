<?php

namespace App\Http\Controllers;
use App\User;
Use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userid = Auth::user()->user_type_id;
        if($userid == 1):  
            $categorys = Category::all();
            // dd($categorys);
            return view('categorys.categorys', ['categorys' => $categorys]);
        else:
            return redirect('/home')->with('error',"Seuls les super admins on le droit de modifier les catégories");
        endif;
    }

    public function new()
    {
        return view('categorys.categorys-create-form');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'user_id' => 'required|numeric',
          ]);

          Category::create($request->all());
        //   dd($newsitem);
       
        return redirect('/home/categorys')->with('success',"La catégorie a bien été ajouté");
  
    }

    public function show($id)
    {
        $category = Category::find($id);
                        
        return view('categorys.category', compact('category', 'id'));
    }

    public function edit($id)
    {
        $categorys = Category::find($id);
                        
        return view('categorys.edit', compact('categorys', 'id'));

    }

    public function update(Request $request, $id)
    {

        $categorys = Category::find($id);
        $this->validate(request(), [
            'name' => 'required',
          ]);

        $categorys->name = $request->get('name');
        $categorys->save();
        return redirect('/home/categorys')->with('success',"La catégorie a bien été modifié");

    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/home/categorys')->with('success',"La catégorie à bien été supprimer");
    }
}
