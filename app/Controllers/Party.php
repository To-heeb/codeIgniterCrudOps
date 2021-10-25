<?php

namespace App\Controllers;
use App\Models\PartyModel;


class Party extends BaseController
{   

    public function index()
    {   

        $model = new PartyModel();

        $data = [
            'party'  => $model->getParty(),
            'title' => 'Political parties',
        ];
        
        echo view('template/header', $data);
        echo view('parties/allparties', $data);
        echo view('template/footer');
    }


    public function add()
    {   

        $model = new PartyModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'partyTitle' => 'required|min_length[3]|max_length[5]',
        ]))
    {
        $model->insert([
            'partyid' => $this->request->getPost('partyTitle'),
            'partyname' => $this->request->getPost('partyTitle'),   
        ]);

        $data = ['msg' => 'Party Successfully created',];
    }
       $data = [
            'title' => 'Political parties',
        ];
        
        echo view('template/header', $data);
        echo view('parties/addparty', $data);
        echo view('template/footer');
    }
    
    public function delete($id)
    {   

        $model = new PartyModel();
       
        
        if (!empty($id)) {
            $model->delete(['id' => $id]);
            $data['title'] = 'Political parties';
        }
        
        echo view('template/header', $data);
        echo view('parties/delete');
        echo view('template/footer');
    }



    public function update($id, $party = false)
    {   

        $model = new PartyModel();

        $data = [
            'title' => 'Political parties',
            'id'   =>   $id,
            'party' => $party,
        ];

       if ($party === false) {
        if ($this->request->getMethod() === 'post' && $this->validate([
            'partyTitle' => 'required|min_length[3]|max_length[5]',
        ]))
    {
        $model->update($id, 
            ['partyname' => $this->request->getPost('partyTitle'),
            'partyid' => $this->request->getPost('partyTitle'),
    ]);


    }
       }
      
        
        echo view('template/header', $data);
        echo view('parties/update', $data);
        echo view('template/footer');
    }
}