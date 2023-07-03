<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        /* этот способ не рекомендуется
        foreach ($tags as $tag){
            PostTag::firstOrCreate([
                'tag_id' => $tag,
                'post_id' => $post->id,
            ]);
        }*/

        return redirect()->route('index.main') ;
    }
}
