<?php declare(strict_types=1);

use Ticketpark\SaferpayJson\Request\Exception\SaferpayErrorException;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Request\Transaction\AuthorizeRequest;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../credentials.php';

// A token you received after initializing a transaction (see example-initialize.php)

$token = 'xxx';

// The request ID you received after the first authorize request fails with a Behavior of RETRY or RETRY_LATER

$requestId = 'your_request_id';

// retryIndicator is set to 1 to indicate that this is a retry (see SaferpayJson/Request/RequestConfig.php)

$retryIndicator = 1;

// -----------------------------
// Step 1:
// Prepare the authorize request
// See https://saferpay.github.io/jsonapi/#Payment_v1_Transaction_Authorize
//
// Note: The RequestConfig is created with a requestId and retryIndicator to indicate that this is a retry
// (see https://docs.saferpay.com/home/integration-guide/licences-and-interfaces/error-handling#the-requestid-and-retryindicator)

$requestConfig = new RequestConfig(
    $apiKey,
    $apiSecret,
    $customerId,
    true,
    $requestId,
    $retryIndicator
);

// -----------------------------
// Step 2:
// Create the request with required data

$authorizeRequest = new AuthorizeRequest(
    $requestConfig,
    $token,
);

// Note: More data can be provided to InitializeRequest with setters,
// for example: $authorizeRequest->setCondition()
// See Saferpay documentation for available options.

// -----------------------------
// Step 3:
// Execute and check for successful response

try {
    $response = $authorizeRequest->execute();
} catch (SaferpayErrorException $e) {
    die ($e->getErrorResponse()->getErrorMessage());
}

echo 'The transaction has been successful! Transaction id: ' . $response->getTransaction()->getId() . "\n";

// -----------------------------
// Step 4:
// Capture the transaction to get the cash flowing.
// see: example-capture.php
