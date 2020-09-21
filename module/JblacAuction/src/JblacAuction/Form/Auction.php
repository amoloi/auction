<?php
namespace JblacAuction\Form;
/**
 * Description of Auction
 *
 * @author Innocent
 */
use Zend\Form\Form;

class AuctionForm extends Form {
    protected $capture;
    public function __construct() {
        parent::__construct('auctionForm');
        $this->setAttribute('action' , '/auction/create');
        $this->setAttribute('method','post');
        
        $this->add([
            'name' => 'auctionCode',
            'attributes' => [
                'type' => 'text',
                'id' => 'auctionCode',
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Auction Code',
            ]
        ]);
    }
}