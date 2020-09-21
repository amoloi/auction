<?php
namespace JBlacAuction;

use JBlacAuction\Model\AuctionMapper;
use JBlacAuction\Model\BuyerMapper;
use JBlacAuction\Model\CityMapper;
use JBlacAuction\Model\CountryMapper;
use JBlacAuction\Model\ItemMapper;
use JBlacAuction\Model\LotMapper;

class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    
    public function getServiceConfig(){
        return [
            'factories' => [
                        'AuctionMapper' => function ($sm){
                            $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter') ;
                            $mapper = new AuctionMapper($dbAdapter);
                            return $mapper;
                        },
                        'BuyerMapper' => function ($sm){
                            $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter') ;
                            $mapper = new BuyerMapper($dbAdapter);
                            return $mapper;
                        },
                        'CityMapper' => function ($sm){
                            $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter') ;
                            $mapper = new CityMapper($dbAdapter);
                            return $mapper;
                        },
                        'CountryMapper' => function ($sm){
                            $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter') ;
                            $mapper = new CountryMapper($dbAdapter);
                            return $mapper;
                        },
                        'ItemMapper' => function ($sm){
                            $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter') ;
                            $mapper = new ItemMapper($dbAdapter);
                            return $mapper;
                        },
                        'LotMapper' => function ($sm){
                            $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter') ;
                            $mapper = new LotMapper($dbAdapter);
                            return $mapper;
                        },                                
                ]
        ];
    }
}