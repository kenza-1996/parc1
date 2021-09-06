<div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              
              <div class="card-header bg-orange">
                <h3 class="card-title"><i class="fas"></i><b> Liste des materiels</b></h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent='goToAddMateriel()'><i class="fa fa-plus"></i>Nouveau Materiel</a>
                  <div class="input-group input-group-md" style="width: 300px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              <div class="card-body table-responsive p-0 table-striped" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                       <th style="width:10%;">ID</th>
                      <th style="width:50%;">N°serie</th>
                      <th style="width:50%;">Code Barre</th>
                      <th style="width:50%;">N°Lot</th>
                      <th style="width:70%;">Designation</th>
                      <th style="width:50%;">Etat</th>
                      <th style="width:50%;">Statut</th>
                       <th  class="text-center">Ajouté</th>
                      <th  class="text-center">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($materiels as $materiel)
                     
                   
                    <tr>
                    
                    <td>{{$materiel->id}}</td>
                      <td>{{$materiel->num_serie}}</td>
                      <td>{{$materiel->code_barre}}</td>
                      <td>{{$materiel->lot->num_lot}}</td>
                     
                       <td>{{$materiel->lot->categorie->nom}} {{$materiel->lot->marque->nom}} {{$materiel->lot->modele->nom}}</td>
                     <td>{{$materiel->etat}}</td>
                      <td>  @if($materiel->affectation)
                        affecté
                      @else
                        non affecté 
                      @endif</td>
                     
                      <td class="text-center"><span class="tag tag-success">{{ $materiel->created_at->diffForHumans() }}</span></td>
                      <td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click.prevent='goToEditMateriel({{$materiel->id}})'><i class="far fa-edit"></i></button> 
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$materiel->num_serie}}','{{$materiel->id}}')" ><i class="far fa-trash-alt"></i></button>
                      
                      </td>
                      
                    </tr>
                   @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class ="card-footer">
                 <div class="float-right"> 
                {{ $materiels->links() }}
                 </div>

              </div>
              <!-- /.card -fotter-->
             </div>
            <!-- /.card -->
          </div>
  


</div>

  









