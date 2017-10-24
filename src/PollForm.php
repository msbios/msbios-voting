<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting;

use Zend\Config\Config;
use Zend\Form\Element\Hidden;
use Zend\Form\Element\Radio;
use Zend\Form\Element\Submit;
use Zend\Form\Form;

/**
 * Class PollForm
 * @package MSBios\Voting
 */
class PollForm extends Form
{
    /** @var Config  */
    protected $config;

    /**
     * PollForm constructor.
     * @param Config $config
     * @param null $name
     * @param array $options
     */
    public function __construct(Config $config, $name = null, array $options = [])
    {
        $this->config = $config;
        parent::__construct($name, $options);
    }

    public function init()
    {
        parent::init();
        $this->add([
            'type' => Radio::class,
            'name' => $this->config->get('default_option_key')
        ])->add([
            'type' => Hidden::class,
            'name' => $this->config->get('default_relation_key')
        ])->add([
            'type' => Submit::class,
            'name' => $this->config->get('default_handler_key')
        ]);
    }
}
