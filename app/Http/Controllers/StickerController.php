<?php

namespace App\Http\Controllers;

use App\Sticker;
use App\Category;
use Illuminate\Http\Request;

class StickerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('stickers.index')->with('stickers', Sticker::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stickers.create')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $reglas = [
            'album_name' => 'required',
            'sticker_number' => 'required',
            'category_id' => 'required',
            'description' => 'required|min:20',
        ];

        $mensaje = [
            'album_name.required' => 'Faltó ingresar el nombre del álbum.',
            'sticker_number.required' => 'Faltó agregar el número de tu sticker.',
            'category_id.required' => 'Faltó seleccionar la categoría de tu sticker.',
            'description.required' => 'Faltó ingresar una descripción del producto.',
            'description.min' => 'La descripción no puede ser menor que 20 caracteres.',
            
        ];

        $this->validate($request, $reglas, $mensaje);

        $sticker = new Sticker($request->all());

        $sticker->user_id = 1;

        $sticker->save();

        return redirect('/stickers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sticker  $sticker
     * @return \Illuminate\Http\Response
     */
    public function show($sticker)
    {
        return view('stickers.show')->with('sticker', Sticker::where('album_name', $sticker)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sticker  $sticker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sticker = Sticker::find($id);
        $categories = Category::all();

        return view('stickers.edit')
            ->with('sticker', $sticker)
            ->with('category', $sticker->category)
            ->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sticker  $sticker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sticker = Sticker::find($id);

        // Luego  vamos campo por campo asignando el nuevo dato o el que haya quedado en el value
        $sticker->album_name = $request->input("album_name");
        $sticker->sticker_number = $request->input("sticker_number");
        $sticker->category_id = $request->input("category_id");
        $sticker->description = $request->input("description");
        // Y aca, tambien usamos save(), porque es la misma operacion pero sobre algo que ya existe
        $sticker->save();

        //en este caso, redirigimos al perfil de la pelicula que editamos para observar los cambios
        return redirect("/stickers/$sticker->album_name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sticker  $sticker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sticker = Sticker::find($id);
        $sticker->delete();
        return redirect('/stickers');
    }
}
