<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting;

use MSBios\Stdlib\ObjectInterface;

/**
 * Interface PollManagerInterface
 * @package MSBios\Voting
 */
interface PollManagerInterface
{
    /**
     * @param $id
     * @param null $relation
     * @return ObjectInterface
     */
    public function find($id, $relation = null);

    /**
     * @return \Zend\Form\FormInterface
     */
    public function form();

    /**
     * @param ObjectInterface $option
     */
    public function vote(ObjectInterface $option);
}
