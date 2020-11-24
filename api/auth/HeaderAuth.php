<?php

namespace api\auth;

use yii\filters\auth\HttpHeaderAuth;
use yii\web\ForbiddenHttpException;

class HeaderAuth extends HttpHeaderAuth
{
    public $header = 'Secret';

    public function authenticate($user, $request, $response)
    {
        $authHeader = $request->getHeaders()->get($this->header);

        if ($authHeader !== env('API_SECRET')) {
            $this->handleFailure($response);
        }

        return true;
    }

    public function handleFailure($response)
    {
        throw new ForbiddenHttpException('Invalid Secret');
    }
}