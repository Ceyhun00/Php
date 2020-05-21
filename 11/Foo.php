<?php

use Psr\Log\LoggerInterface;

class Foo
{
    /**
     * User _logger
     */
    private $_logger;
    /**
     * Defining logger.
     *
     * @param LoggerInterface $_logger Describe
     */
    public function __construct(LoggerInterface $_logger = null)
    {
        $this->logger = $_logger;
    }
    /**
     * Logging action
     *
     * @return void
     */
    public function doSomething()
    {
        if ($this->logger) {
            $this->logger->info('Doing work');
            $this->logger->notice('Notice work');
        }
    }
}
