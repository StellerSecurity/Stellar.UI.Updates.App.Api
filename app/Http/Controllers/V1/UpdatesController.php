<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UpdatesController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updates(Request $request): \Illuminate\Http\JsonResponse
    {

        $last_update_time = $request->input('last_update_time');

        $api_url = "https://blog.stellarsecurity.com/wp-json/wp/v2/posts";

        $responsew = Http::get($api_url);


        $data = [];



        foreach($responsew->object() as $post) {

            $response['items'][] = [
                'title' => $post->title->rendered,
                'description' =>$post->title->rendered,
                'date' => $post->date,
                'href' => $post->link,
                'read' => false
            ];

        }



        $response['notification'] = [
          'send' => false,
          'title' => 'Updates',
          'message' => 'kar'
        ];

        $response['last_update'] = [
            'time' => time(),
            'date' => date("Y-m-d H:i:s")
        ];

        return response()->json($response);

    }

}
