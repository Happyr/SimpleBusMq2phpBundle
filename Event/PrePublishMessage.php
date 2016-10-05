<?php

namespace Happyr\Mq2phpBundle\Event;

use SimpleBus\Serialization\Envelope\Envelope;
use Symfony\Component\EventDispatcher\Event;

/**
 * Dispatch a message before we publish it. Event listeners may modify the message.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class PrePublishMessage extends Event
{
    const NAME = 'happyr.mq2php.pre_publish_message';

    /**
     * @var array
     */
    private $message;

    /**
     * @param array $message
     */
    public function __construct(array $message)
    {
        $this->message = $message;
    }

    /**
     * @return array
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param array $message
     *
     * @return PrePublishMessage
     */
    public function setMessage(array $message)
    {
        $this->message = $message;

        return $this;
    }
}
