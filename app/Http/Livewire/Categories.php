<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Marque;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;

    protected $paginationTheme="bootstrap";

    public $isBtnAddClicked=false;
    public $isBtnEditClicked=false;
 
    public $newCat = [];
    public $editCat = [];

    public function rules(){
        if($this->isBtnEditClicked){

   return [ 

   'editCat.nom' =>'required',
  
   

  ];
 }
  return [ 

    'newCat.nom' =>'required',
    
    
 
  ];

    }





   
    public function render()
    {
        return view('livewire.categories.index',[
        
            "categories"=> Categorie::latest()->paginate(4)
        ]) 
        ->extends("layouts.master")
        ->section("contenu");
    }
  
    public function goToAddCat(){
        $this->isBtnAddClicked=true;
    }
     //renvoi la page edit 
     public function goToEditCat($id){
        $this->editCat=Categorie::find($id)->toArray();
       
          $this->isBtnEditClicked=true;
      }
    public function goToListCat(){
        $this->isBtnAddClicked=false;
        $this->isBtnEditClicked=false;
        $this->editCat = [];
    }

    public function addCat(){
       $validationAttributes= $this->validate();
       Categorie::create($validationAttributes["newCat"]);
       $this->newCat=[];
       $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Categorie cree avec succés!"]);
    }


//fct de modification lot 
public function updateCat(){
     
    // Vérifier que les informations envoyées par le formulaire sont correctes
    $validationAttributes = $this->validate();


    Categorie::find($this->editCat["id"])->update($validationAttributes["editCat"]);

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"categorie mis à jour avec succès!"]);
}





    public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
 "text" => "vous etes sur le point de supprimer la categorie $name  ! ,",
"title"=> 'Etes-vous sur de continuer ?',
"type"=>"warning",
 "data"=> [ "catid"=> $id ],
    
    
         ] ]);  
    }

public function deleteCat($id){
    Categorie::destroy($id);
    $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Categorie supprimee avec succés!"]);
}

}
