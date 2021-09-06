<?php

namespace App\Http\Livewire;


use App\Models\Lot;
use App\Models\Materiel;

use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Materiels extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $isBtnAddMaterielClicked=false;
    public $isBtnEditMaterielClicked=false;

   public $editMateriel=[];
   public $newMateriel=[];

   public function render()
   {

       Carbon::setLocale("fr");

       return view('livewire.materiels.index', [
        "lots"=> Lot::all(), 
        
        "materiels" => Materiel::latest()->paginate(5)
       ])
       ->extends("layouts.master")
       ->section("contenu");
   }


   public function rules(){
    if($this->isBtnEditMaterielClicked){
         return [ 

           'editMateriel.num_serie' =>['required', Rule::unique("materiels", "num_serie")->ignore($this->editMateriel['id'])],
           'editMateriel.code_barre' =>['required', Rule::unique("materiels", "code_barre")->ignore($this->editMateriel['id'])],

            'editMateriel.etat' =>'required',
            'editMateriel.affectation' =>'required',

             'editMateriel.lot_id' =>'required',
          ];
        }
         return [ 

            'newMateriel.num_serie' =>'required|string|unique:materiels,num_serie',
            'newMateriel.code_barre' =>'required|string|unique:materiels,code_barre',
   
             'newMateriel.etat' =>'required',
             'newMateriel.affectation' =>'required',
    
            'newMateriel.lot_id' =>'required',
   
                                              ];}








   
    


     //renvoie la page create
     public function goToAddMateriel(){
        $this->isBtnAddMaterielClicked=true;

    }

    public function goToEditMateriel($id){
        $this->editMateriel=Materiel::find($id)->toArray();
        $this->isBtnEditMaterielClicked=true;

    }
//renvoi la page liste
  public function goToListMateriel(){
    $this->isBtnAddMaterielClicked=false;
    $this->isBtnEditMaterielClicked=false;
    
  }


   //fct dajout de lot 
   public function addMateriel(){
   
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();


        Materiel::create($validationAttributes["newMateriel"]);
   
           $this->newMateriel=[];
            $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Materiel cree avec succés!"]);
   }



    //fct de modification lot 
    public function updateMateriel(){
     
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();


        Materiel::find($this->editMateriel["id"])->update($validationAttributes["editMateriel"]);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Materiel mis à jour avec succès!"]);
    }





//suppression lot 
public function confirmDelete($name, $id){
    $this->dispatchBrowserEvent("showConfirmMessage",[ "message"=> [
"text" => "vous etes sur le point de supprimer le Materiel $name  ! ,",
"title"=> 'Etes-vous sur de continuer ?',
"type"=>"warning",
"data"=> [ "materielid"=> $id ],


     ] ]);  
}

public function deleteMateriel($id){
Materiel::destroy($id);
$this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Materiel supprimee avec succés!"]);
}





}