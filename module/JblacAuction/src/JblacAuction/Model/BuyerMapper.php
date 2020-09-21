<?php
namespace JblacAuction\Model;

use Zend\Db\Adapter\Adapter;
use JBlacAuction\Model\BuyerEntity;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Select;
use Zend\Db\ResultSet\HydratingResultSet;

/**
 * Description of BuyerMapper
 *
 * @author Innocent
 */
class BuyerMapper {
    protected $tableName = 'auction_buyer';
    protected $dbAdapter;
    protected $sql;
    
    public function __construct($dbAdapter) {
        $this->dbAdapter = $dbAdapter;
        $this->sql = new Sql($dbAdapter);
        $this->sql->setTable($this->tableName);
    }
    
    public function fetchAll(){
        $select = $this->sql->select();
        $select->order(['createDate DESC']);
        
        $stmt = $this->sql->prepareStatementForSqlObject($select);
        $results = $stmt->execute();
        
        $entityPrototype = new BuyerEntity();
        $hydrator = new ClassMethods();
        $resultset =  new HydratingResultSet($hydrator , $entityPrototype);
        $resultset->initialize($results);
        
        return $resultset;
    }
    
}