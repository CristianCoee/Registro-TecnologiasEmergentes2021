<div class="container-fluid">
                                
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="dias">dias</label>
                                        <input type="text" name="dias" value="{{ $periodo->dias }}" class="form-control form-control-sm col-sm-10" id="dias" placeholder="dias">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="estado">estado</label>
                                        <input type="text" name="estado" value="{{ $periodo->estado }}" class="form-control form-control-sm col-sm-10" id="estado" placeholder="estado">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="año">Año</label>
                                        <input type="text" name="año" value="{{ $periodo->año }}" class="form-control form-control-sm col-sm-4" id="año" placeholder="2021">
                                    </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                <a href="{{ route('periodo.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>
                          
                                  
                                    
