<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UpdatesController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updates(Request $request): \Illuminate\Http\JsonResponse
    {

        $last_update_time = $request->input('last_update_time');

        $response = [
                'items' => [
                    [
                        'title' => 'Title',
                        'description' => 'Description',
                        'href' => 'https://stellarsecurity.com'
                    ],
                    [
                        'title' => 'Title2',
                        'description' => 'Description2',
                        'href' => 'https://stellarsecurity.com'
                    ],
                    [
                        'title' => 'Title3',
                        'description' => 'Description3',
                        'href' => 'https://stellarsecurity.com'
                    ],
                    [
                        'title' => 'Title4',
                        'description' => 'Description4',
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
