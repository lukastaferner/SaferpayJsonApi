<?php

namespace Ticketpark\SaferpayJson\Transaction;

use Ticketpark\SaferpayJson\PaymentPage\AssertRequest;

class AuthorizationRequest extends AssertRequest
{
    const API_PATH = '/Payment/v1/Transaction/Authorize';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\AuthorizationResponse';
}