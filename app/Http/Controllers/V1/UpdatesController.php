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
                        'title' => 'Stellar Security',
                        'description' => 'Stellar Phone - Pixel 5a is out. Check it out here.',
                        'href' => 'https://stellarsecurity.com',
                        'date' => '2023-12-12',
                        'read' => true,
                    ],
                    [
                        'title' => 'Stellar Security',
                        'description' => 'Stellar Phone - Pixel 9 is out',
                        'href' => 'https://stellarsecurity.com/stellar-phone',
                        'date' => '2024-11-11',
                        'read' => true,
                    ]
                ]
        ];

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
