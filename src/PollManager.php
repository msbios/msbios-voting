<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting;

use MSBios\Form\FormElementAwareInterface;
use MSBios\Form\FormElementAwareTrait;
use MSBios\Stdlib\ObjectInterface;
use Zend\Config\Config;

/**
 * Class PollManager
 * @package MSBios\Voting
 * @link https://www.codexworld.com/online-poll-voting-system-php-mysql/
 */
class PollManager implements PollManagerInterface
{
    use FormElementAwareTrait;

    /** @var Config */
    protected $polls;

    /** @var ObjectInterface */
    protected $current;

    /** @var array */
    protected $forms = [];

    /**
     * @param $id
     * @param null $relation
     * @return mixed
     */
    public function find($id, $relation = null)
    {
    }

    /**
     * @return \Zend\Form\FormInterface
     */
    public function form()
    {
        return $this->getFormElement();
    }

    /**
     * @param ObjectInterface $option
     */
    public function vote(ObjectInterface $option)
    {
        // TODO: Implement vote() method.
    }
}
