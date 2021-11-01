<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Category;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Film::all()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return Film::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function getFilmsByCategory($categoryId)
    {
        return Category::find($categoryId)->films()->get();
    }

    public function getCategory($id)
    {
        return Film::find($id)->categories()->get();
    }

    public function getFilmLanguage($id)
    {
        return Film::find($id)->language()->get();
    }

    public function getFilmActors($id)
    {
        return Film::find($id)->actors()->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getActorFilms($id)
    {
        // retrieves all related Models
        return Actor::find($id)->films()->get()->fresh('language', 'categories', 'actors');
    }
}
