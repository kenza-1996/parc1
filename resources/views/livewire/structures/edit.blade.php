<div class="row p-4 pt-5">

       <div class="col-md-6">
        <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-user-plus fa-2x"></i> Formulaire d'edition  Structure</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" wire:submit.prevent="updateStructure()">
                <div class="card-body">
                 
                    
                 
                   
                  
                  <div class="form-group ">
                    <label >Nom Structure</label>
                    <input type="text" wire:model="editStructure.nom_struct" class="form-control @error('editStructure.nom_struct') is invalide @enderror">
                        @error("editStructure.nom_struct")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                 
                
                   
                   
                   
                   
               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modifier</button>
                   <button type="button" wire:click="goToListStructure()" class="btn btn-danger">Annuler</button>
                </div>
              </form>
            </div>
        </div>
      


    
         
          
         </div>
      </div>
    </div>
  </div>  