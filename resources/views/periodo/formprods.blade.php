<div class="container-fluid">
<div class="row">
                   <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="periodo">Periodo</label>
                                        <input type="text" name="periodo" class="form-control form-control-sm col-sm-4" id="periodo" placeholder="Ej: ">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="dias">dias</label>
                                        <input type="text" name="dias"  class="form-control form-control-sm col-sm-10" id="dias" placeholder="65">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="estado">Estado</label>
                                        <input type="text" name="estado"  class="form-control form-control-sm col-sm-10" id="estado" placeholder="Estado">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="año">Año</label>
                                        <input type="text" name="año"  class="form-control form-control-sm col-sm-4" id="año" placeholder="año">
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                <a href="{{ route('periodo.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>         
