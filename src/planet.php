<?php
namespace Brian\Planet;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class Planet
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Planet constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public function test_rtn($msg = ''){
        $config_arr = $this->config->get('planet.options');
        return $msg.' <strong>from your custom develop package!</strong>>';
    }
}