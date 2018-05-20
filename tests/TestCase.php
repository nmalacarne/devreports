<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\TestResponse;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @param TestResponse $response
     * @param null|String $key
     * @return mixed
     */
    public function getResponseData(TestResponse $response, ?String $key = null)
    {
        $data = $response->getOriginalContent()->getData();

        if ($key) {
            return array_get($data, $key);
        }

        return $data;
    }
}
