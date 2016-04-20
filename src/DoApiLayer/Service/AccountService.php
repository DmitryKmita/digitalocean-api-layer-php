<?php

namespace DoApiLayer\Service;

use DoApiLayer\Model\Account;
use DoApiLayer\Model\Response;

class AccountService extends RESTService
{
    const NAME = 'app.service.account';

    /**
     * Get Account Info
     *
     * @return Response
     */
    public function getAccount()
    {
        $url = $this->host . '/account';
        $data = $this->get($url);
        $account = new Account();
        $account->fromArray($data['account']);

        $response = new Response();
        $response->setData($account);

        return $response;
    }
}