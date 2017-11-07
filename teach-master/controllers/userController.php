<?php

class userController extends Controller {

	public function index(){
		$examples=$this->model->load();		
		$this->setResponce($examples);		
	}
		
    public function view($data){
		$example=$this->model->load($data['id']); 
		$this->setResponce($example);
	}

	public function add(){
		if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['score'])){
			$dataToSave=array('id'=>$_POST['id'], 'name'=>$_POST['name'], 'score'=>$_POST['score']);
			$addedItem=$this->model->create($dataToSave);
			$this->setResponce($addedItem);
		}
	}
    
    public function edit($id){
		if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['score'])){
			$dataToEdit=array('id'=>$_POST['id'], 'name'=>$_POST['name'], 'score'=>$_POST['score']);
			$editItem=$this->model->save($dataToEdit, $data['id']);
			$this->setResponce($editItem);
	   }	 
    }
    public function delete($data){
        $examples=$this->model->delete($data['id']);
        $this->setResponce($examples);
    }
}