<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Lot;
use App\Models\Marque;
use App\Models\Modeles;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;
class Lots extends Component
{
    use WithPagination;

    protected $paginationTheme="bootstrap";
    public $currentPage =PAGELIST;
    public $editLot=[];
    public $newLot=[];

    public function render()
    {
        return view('livewire.lots.index',[
            "categories"=> Categorie::all(), 
            "marques" => Marque::all(),
            "modeles" => Modeles::all(),
            "lots"=> Lot::latest()->paginate(6)
        ]) 
        ->extends("layouts.master")
        ->section("contenu");
    }


 



    public function rules(){
        if($this->currentPage == PAGEEDITFORM){

   return [ 

   'editLot.num_lot' =>'required',
   'editLot.num_ao' =>'required',
   'editLot.num_ap' =>'required',
   'editLot.fournisseur' =>'required|string',
   'editLot.cout' =>'required|numeric',
   'editLot.qte' =>'required|integer',
   'editLot.modele_id' =>'required', 
   'editLot.categorie_id' =>'required',
    'editLot.marque_id' =>'required',

  ];
 }
  return [ 

    'newLot.num_lot' =>'required',
    'newLot.num_ao' =>'required',
    'newLot.num_ap' =>'required',
    'newLot.fournisseur' =>'required|string',
    'newLot.cout' =>'required|numeric',
    'newLot.qte' =>'required|integer',
    'newLot.categorie_id' =>'required',
    'newLot.marque_id' =>'required',
    'newLot.modele_id' =>'required',
 
  ];

    }




//renvoi la liste
   
    //renvoi la page edit 
    public function goToEditLot($id){
      $this->editLot=Lot::find($id)->toArray();
     
      $this->currentPage = PAGEEDITFORM;
    }

    //renvoie la page create
    public function goToAddLot(){
        $this->currentPage = PAGECREATEFORM;

      }
  

//renvoi la page liste
    public function goToListLot(){
        $this->currentPage = PAGELIST;
        $this->editLot = [];
    }


    //fct de modification lot 
    public function updateLot(){
     
        // V??rifier que les informations envoy??es par le formulaire sont correctes
        $validationAttributes = $this->validate();


        Lot::find($this->editLot["id"])->update($validationAttributes["editLot"]);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Lot mis ?? jour avec succ??s!"]);
    }

    //fct dajout de lot 
    public function addLot(){
        $validationAttributes = $this->validate();


        Lot::create($validationAttributes["newLot"]);

          $this->newLot=[];
          $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"LOT cree avec succ??s!"]);
       }



//suppression lot 
public function confirmDelete($id){
    $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
"text" => "vous etes sur le point de supprimer le LOT $id  ! ,",
"title"=> 'Etes-vous sur de continuer ?',
"type"=>"warning",
"data"=> [ "lotid"=> $id ],


     ] ]);  
}

public function deleteLot($id){
Lot::destroy($id);
$this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Lot supprimee avec succ??s!"]);
}





}
