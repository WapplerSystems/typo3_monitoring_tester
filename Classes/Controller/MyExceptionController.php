<?php

namespace WapplerSystems\MonitoringTester\Controller;


use TYPO3\CMS\Extbase\Exception;

/**
 */
class MyExceptionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     *
     * @return void
     */
    public function mainAction()
    {
        $this->view->assignMultiple([
        ]);
    }

    /**
     *
     * @return void
     * @throws Exception
     */
    public function throwAction()
    {
        throw new Exception('Eine Exception!!!');
    }


}
