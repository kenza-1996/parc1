<div class="row p-4 pt-5">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-orange">
            <div class="card-header">
            <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Modifier un materiel</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" wire:submit.prevent="updateMateriel()" method="POST">
            <div class="card-body">

                <div class="form-group">
                    <label >N° serie</label>
                    <input type="text" class="form-control @error('editMateriel.num_serie') is-invalid @enderror" wire:model="editMateriel.num_serie">
                    @error("editMateriel.num_serie")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>

                <div class="form-group">
                    <label >Code barre</label>
                    <input type="text" class="form-control @error('editMateriel.code_barre') is-invalid @enderror" wire:model="editMateriel.code_barre">
                    @error("editMateriel.code_barre")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>

               <div class="form-group">
                            <label for="exampleSelectRounded0">N° lot</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editMateriel.lot_id'>
                           <option value=""></option>   
                              @foreach ($lots as $lot)
                             
                    <option value="{{$lot->id}}">{{$lot->num_lot}}</option>  
                    @endforeach
                  </select>
                        </div>

                
                  <div class="form-group">
                            <label for="exampleSelectRounded0">Categorie</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editMateriel.lot_id'>
                           <option value=""></option>   
                              @foreach ($lots as $lot)
                             
                    <option value="{{$lot->id}}">{{$lot->categorie->nom}}</option>  
                    @endforeach
                  </select>
                  </div>
                   <div class="form-group">
                   <label for="exampleSelectRounded0">Marque</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editMateriel.lot_id'>
                           <option value="neuf"></option>   
                              @foreach ($lots as $lot)
                             
                    <option value="{{$lot->id}}">{{$lot->marque->nom}}</option>  
                    @endforeach
                  </div>
                

              <div class="form-group">
                   <label for="exampleSelectRounded0">Modele</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editMateriel.lot_id'>
                           <option value=""></option>   
                              @foreach ($lots as $lot)
                             
                    <option value="{{$lot->id}}">{{$lot->modele->nom}}</option>  
                    @endforeach
                  </select>
               </div>

                <div class="form-group">
                   <label for="exampleSelectRounded0">Etat</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editMateriel.etat'>
                      <option value=""></option>          
                    <option value="neuf">NEUF</option>  
                    <option value="en panne">En panne</option>  
                    <option value="en cour de reparation">En cours de reparation</option>  
                     <option value="repare">Reparé</option>  
                   
                  </select>
                </div>
                <div class="form-group">
                   <label for="exampleSelectRounded0">Affectation</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editMateriel.affectation'>
                      <option value=""></option>          
                    <option value="nom affecte">Non affecté</option>  
                    <option value=" affecte">Non affecté</option> 
                   
                  </select>
                </div>
                



            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <button type="button" wire:click="goToListMateriel()" class="btn btn-danger">Annuler</button>
            </div>
            </form>
        </div>
        <!-- /.card -->

    </div>

  
</div>



