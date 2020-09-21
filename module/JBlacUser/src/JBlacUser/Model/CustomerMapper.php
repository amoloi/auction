<?php
namespace JBlacUser\Model;

use Zend\Db\Adapter\Adapter;
use JBlacUser\Model\CustomerEntity;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Select;
use Zend\Db\ResultSet\HydratingResultSet;
/**
 * Description of CustomerMapper
 *
 * @author Innocent
 */
class CustomerMapper {
    protected $tableName = 'customers';
    protected $dbAdapter;
    protected $sql;
    
    public function __construct(Adapter $dbAdapter) {
        $this->dbAdapter = $dbAdapter;
        $this->sql = new Sql($dbAdapter);
        $this->sql->setTable($this->tableName);
    }
}
