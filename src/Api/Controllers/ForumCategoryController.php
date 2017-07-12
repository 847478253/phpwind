<?php

namespace Medz\Fans\Api\Controllers;

// use Illuminate\Http\Request;
use Medz\Fans\Models\TopicCategory as TopicCategoryModel;

/**
 * @Resource("ForumCategory", uri="/forum/categories")
 */
class ForumCategoryController extends Controller
{
    /**
     * Show forum topic categories.
     *
     * Get a JSON representation of all the forum topic category.
     *
     * @param \Medz\Fans\Models\TopicCategory $model
     * @return mixed
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function index(TopicCategoryModel $model)
    {
        return $this->response->array(
            $model->all()->toArray()
        )->setStatusCode(200);
    }

    public function show()
    {
        // todo.
    }

    public function store()
    {
        // todo.
    }

    public function update()
    {
        // todo.
    }

    public function destroy()
    {
        // todo.
    }
}