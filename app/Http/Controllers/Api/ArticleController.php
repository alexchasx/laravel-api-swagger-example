<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @OA\Get(
     *     path="/articles",
     *     operationId="articlesAll",
     *     tags={"Pages"},
     *     summary="Display a listing of the resource",
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="The page number",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *     ),
     * )
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $model = Article::query()->paginate(2, ['id', 'title']);

        return response()->json($model);
    }

    /**
     * @OA\Post(
     *     path="/articles",
     *     operationId="articleCreate",
     *     tags={"Post"},
     *     summary="Create yet another article record",
     *     security={
     *       {"app_id": {}},
     *     },
     *     @OA\Response(
     *         response="201",
     *         description="Everything is fine",
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/ArticleStoreRequest")
     *     )
     * )
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ArticleStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ArticleStoreRequest $request)
    {
        $model = new Article();
        $model->fill($request->all());
        $model->save();

        return response('', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
