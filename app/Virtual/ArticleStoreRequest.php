<?php

namespace App\Virtual;

/**
 * @OA\Schema(
 *     type="object",
 *     title="Example storring request",
 *     description="Some simple request createa as example",
 * )
 */
class ArticleStoreRequest
{
    /**
     * @OA\Property(
     *     title="Title",
     *     description="Title of key for storring",
     *     example="random",
     * )
     *
     * @var string
     */
    public $title;

    /**
     * @OA\Property(
     *     title="Content",
     *     description="Title of key for storring",
     *     example="random",
     * )
     *
     * @var string
     */
    public $content_raw;
}
