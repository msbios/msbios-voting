<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting;

use MSBios\Stdlib\ObjectInterface;
use Zend\Config\Config;

/**
 * Class PollManager
 * @package MSBios\Voting
 * @link https://www.codexworld.com/online-poll-voting-system-php-mysql/
 */
class PollManager implements PollManagerInterface
{
    /** @var Config */
    protected $polls;

    /**
     * PollManager constructor.
     * @param Config $polls
     */
    public function __construct(Config $polls)
    {
        $this->polls = $polls;
    }

    /**
     * @param $id
     * @param null $relation
     * @return mixed
     */
    public function find($id, $relation = null)
    {
        return $this->polls->get($id);
    }

    /**
     * @param ObjectInterface $option
     */
    public function vote(ObjectInterface $option)
    {
        // TODO: Implement vote() method.
    }
}
