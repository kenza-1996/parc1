<div class="row p-5 pt-6">
            <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Ajouter materiel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='addMateriel()''>
                <div class="card-body">

                


                  

                  <div class="form-group">
                       <label >N° serie</label>
                       <input type="text" class="form-control @error('newMateriel.num_serie') is-invalid @enderror" wire:model="newMateriel.num_serie">
                       @error("newMateriel.num_serie")
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                 
                 <div class="form-group">
                    <label >Code barre</label>
                    <input type="text" class="form-control @error('newMateriel.code_barre') is-invalid @enderror" wire:model="newMateriel.code_barre">
                    @error("newMateriel.code_barre")
                        <span class="text-danger">{{ $message }}</span>
                       @enderror
                  </div>
                 <div class="form-group">
                     <label for="exampleSelectRounded0">N° lot</label>
                      <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newMateriel.lot_id'>
                         <option ></option>   
                         @foreach ($lots as $lot)
                             
                            <option value="{{$lot->id}}">{{$lot->num_lot}}</option>  
                          @endforeach
                      </select>
                   </div>
               
                      
                  <div class="form-group">
                      <label for="exampleSelectRounded0">Categorie</label>
                      <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newMateriel.lot_id'>
                        <option ></option>   
                        @foreach ($lots as $lot)
                             
                         <option value="{{$lot->id}}">{{$lot->categorie->nom}}</option>  
                        @endforeach
                     </select>
                    </div>


              
                   <div class="form-group">
                      <label for="exampleSelectRounded0">Marque</label>
                      <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newMateriel.lot_id'>
                        <option ></option>   
                        @foreach ($lots as $lot)
                             
                         <option value="{{$lot->id}}">{{$lot->marque->nom}}</option>  
                       @endforeach
                  </div>
                <div class="form-group">
                     <label for="exampleSelectRounded0"></label>
                     <select  class="custom-select rounded-0"  id="exampleSelectRounded0" >
                       <option value=""></option>   
                       
                    </select>
                  </div> 
            
                <div class="form-group">
                     <label for="exampleSelectRounded0">Modele</label>
                     <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newMateriel.lot_id'>
                       <option value=""></option>   
                        @foreach ($lots as $lot)
                             
                          <option value="{{$lot->id}}">{{$lot->modele->nom }}</option>  
                        @endforeach
                    </select>
                  </div> 
                 
               <div class="form-group">
                   <label for="exampleSelectRounded0">Etat</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newMateriel.etat'>
                      <option ></option>          
                    <option value="neuf">NEUF</option>  
                   
                  </select>
                </div>
                 <div class="form-group">
                   <label for="exampleSelectRounded0">Affectation</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newMateriel.affectation'>
                      <option ></option>          
                    <option value="non affecte">Non affecté</option>  
                   
                  </select>
                </div>

              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="button" wire:click="goToListMateriel()" class="btn btn-danger">Annuler</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

  </div>
</div>


