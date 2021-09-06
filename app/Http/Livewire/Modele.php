<?php

namespace App\Http\Livewire;

use App\Models\Marque;
use App\Models\Modeles;
use Livewire\Component;
use Livewire\WithPagination;

class Modele extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $currentPage = PAGELIST;

    public $newModele = [];
    public $editModele = [];

    public function render()
    {
        return view('livewire.modeles.index',[
           
            "modeles"=> Modeles::latest()->paginate(4)
        ])
        ->extends("layouts.master")
        ->section("contenu");
    }

    public function rules(){
        if($this->currentPage == PAGEEDITFORM){

            // 'required|email|unique:users,email Rule::unique("users", "email")->ignore($this->editUser['id'])
            return [
                'editModele.nom' => 'required',
               
               
            ];
        }

        return [
            'newModele.nom' => 'required',
            
            
        ];
    }
    public function goToAddModele(){
        $this->currentPage = PAGECREATEFORM;
    }

    public function goToEditModele($id){
        $this->editModele = Modeles::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;

       
    }
    public function goToListModele(){
        $this->currentPage = PAGELIST;
        $this->editModele = [];
    }

    public function addModele(){
        //vérifier les information envoyée  ask correctes
        $validationAttributes = $this->validate();
   

        //ajouter un nouvel utilisateur
        Modeles::create($validationAttributes["newModele"]);
    
        
       $this->newModele=[];
       $this->dispatchBrowserEvent("showSuccessMessage",["message"=>"Modele cree avec succés!"]);
    }


    public function updateModele(){
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();


        Modeles::find($this->editModele["id"])->update($validationAttributes["editModele"]);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Modele mis à jour avec succès!"]);

    }
    public function confirmDelete( $id){
        $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
            "text" => "Vous êtes sur le point de supprimer $id de la liste des modeles. Voulez-vous continuer?",
            "title" => "Êtes-vous sûr de continuer?",
            "type" => "warning",
            "data" => [
                "modele_id" => $id
            ]
        ]]);
    }

    public function deleteModele($id){
        Modeles::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Modele supprimé avec succès!"]);
    }
}
