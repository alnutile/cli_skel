<?php


namespace Alnutile\Skeleton;

class Application
{

    use CreateApp;

    /**
     * @var \Silly\Edition\Pimple\Application
     */
    protected $app;

    /**
     * Application constructor.
     * @param \Silly\Edition\Pimple\Application|null $app
     */
    public function __construct($app = null)
    {
        $this->app = $app;
    }

    public function getConfigValueByKey($key)
    {
        if (isset($this->getConfig()[$key])) {
            return $this->getConfig()[$key];
        }
        return null;
    }

    /**
     * @return \Silly\Edition\Pimple\Application
     */
    public function getApp()
    {
        if (!$this->app) {
            $this->setApp();
        }
        return $this->app;
    }

    /**
     * @param \Silly\Edition\Pimple\Application|null $app
     * @return $this
     */
    public function setApp($app = null)
    {
        if (!$app) {
            $app = $this->createApplication();
        }
        $this->app = $app;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return $this->getApp()->getContainer()['config'];
    }
}
