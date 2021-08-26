<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    const URL = "http://localhost";
    private $body;
    private $response;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->client = new Client([
            "base_uri" => self::URL
        ]);
    }

    /**
     * @Given the body:
     */
    public function theBody(PyStringNode $body)
    {
        $this->body = $body;
    }

    /**
     * @When using the url :uri with post method
     */
    public function usingTheUrlWithPostMethod($uri)
    {
        $this->response = $this->client->post($uri,[
           RequestOptions::JSON => json_decode($this->body, true)
        ]);
    }

    /**
     * @Then should response with code :code
     */
    public function shouldResponseWithCode($code)
    {
        return $this->response->getStatusCode() == $code;
    }
}
