<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UpdatesController extends Controller
{

    public function updates(Request $request)
    {

        $last_update_time = $request->input('last_update_time');

        $response = [
                'items' => [
                    [
                        'title' => 'Title',
                        'description' => 'Description',
                        'href' => 'https://stellarsecurity.com'
                    ]
                ]
        ];

        $response['notification'] = [
          'send' => true,
          'title' => 'Updates',
          'message' => 'kar'
        ];

        return response()->json($response);

    }

}
