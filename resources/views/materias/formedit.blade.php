<div class="container-fluid">
                                
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="codigo">codigo</label>
                                        <input type="text" name="codigo" value="{{ $materias->codigo }}" class="form-control form-control-sm col-sm-10" id="codigo" placeholder="codigo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="estado">materias</label>
                                        <input type="text" name="materias" value="{{ $materias->materias }}" class="form-control form-control-sm col-sm-10" id="materias" placeholder="materias">
                                    </div>
                                </div>
                               
                                    
                                    <div class="modal-footer">
                                <a href="{{ route('materias.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>
                          
                                  
                                    
