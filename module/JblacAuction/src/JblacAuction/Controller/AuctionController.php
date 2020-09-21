<?php
namespace JblacAuction\Controller;
use JblacAuction\Form\AuctionForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Description of AuctionController
 *
 * @author Innocent
 */
class AuctionController extends AbstractActionController{
    public function getAuctionMapper(){
        $sm = $this->getServiceLocator();
        return $sm->get('AuctionMapper');
    }
    
    public function indexAction() {
        $mapper = $this->getAuctionMapper();
        
        return new ViewModel([
            'auctions' => $mapper->fetchAll()
        ]);
    }
    
    public function  createAction(){
        //$form = new AuctionForm();
        
        return new ViewModel([
            //'form' => $form,
        ]);
    }
}