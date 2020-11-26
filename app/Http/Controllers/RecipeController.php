<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Tag;
use App\Models\Recipe;
use App\Models\Category;
use App\Http\Requests\RecipeRequest;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::with('category')->get();
        // dd($recipes);
        return view('recipes.list-recipes', [
            'recipes' => $recipes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $tags = Tag::get();
        return view('recipes.add-recipe', [
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecipeRequest $request)
    {
        $input = $request->all();
        $user = Auth::user();

        // image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            if ($request->file('image')->isValid()) {
                $image_name = date('YmdHis') . ".$ext";
                $upload_path = 'image_uploads';
                $request->file('image')->move($upload_path, $image_name);
                $input['image'] = $image_name;
            }
        }
        $recipe = Recipe::create([
            'name' => $input['name'],
            'description' => $input['description'],
            'category_id' => $input['category'],
            'status' => $input['status'],
            'image' => $input['image'],
            'steps' => $input['steps'],
            'user_id' => $user->id
        ]);

        return redirect('/recipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        // dd($recipe);
        return view('recipes.edit-recipe', ['recipe' => $recipe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(RecipeRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
