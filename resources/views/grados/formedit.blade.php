<div class="container-fluid">
                                
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="codigo">codigo</label>
                                        <input type="text" name="codigo" value="{{ $grados->codigo }}" class="form-control form-control-sm col-sm-10" id="codigo" placeholder="codigo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="grados">grados</label>
                                        <input type="text" name="grados" value="{{ $grados->grados }}" class="form-control form-control-sm col-sm-10" id="grados" placeholder="grados">
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="seccion">seccion</label>
                                        <input type="text" name="seccion" value="{{ $grados->seccion }}" class="form-control form-control-sm col-sm-10" id="seccion" placeholder="seccion">
                                    </div>
                                </div>  
                                    <div class="modal-footer">
                                <a href="{{ route('grados.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>
                          
                                  
                                    
