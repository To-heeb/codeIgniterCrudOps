<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Config\Database;

class PartyModel extends Model
{
    
    protected $table  = 'party';
    protected $allowedFields = ['partyid', 'partyname'];
    public function getParty()
    {
       return $this->findAll();
    
    }

    public function deleteParty()
    {
        
    }

    public function addParty()
    {
        
    }
   
}