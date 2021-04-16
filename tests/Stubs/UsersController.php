<?php

namespace Jobins\APIGenerator\Tests\Stubs;

use Illuminate\Http\JsonResponse;

/**
 * Class UsersController
 *
 * @package Jobins\APIGenerator\Tests\Stubs
 */
class UsersController
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(
            [
                "message" => "List of Users",
                "data"    => [
                    ["id" => 1, "name" => "Vedas Bomjon", "email" => "bedram@jobins.jp"],
                    ["id" => 2, "name" => "Puncoz", "email" => "puncoz@jobins.jp"],
                ],
            ]
        );
    }

    public function show(): JsonResponse
    {
        return response()->json(
            [
                "message" => "Detail of a User.",
                "data"    => [
                    "id"      => 1,
                    "name"    => "Vedas Bomjon",
                    "email"   => "bedram@jobins.jp",
                    "company" => [
                        "name"    => "Jobins Inc.",
                        "country" => "Japan",
                    ],
                ],
            ]
        );
    }
}