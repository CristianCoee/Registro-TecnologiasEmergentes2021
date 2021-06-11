<div class="container-fluid">
                                
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="codigo">ALUMNO</label>
                                        <input type="text" name="alumno" value="{{ $notas->alumno }}" class="form-control form-control-sm col-sm-10" id="alumno" placeholder="alumno">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="materias">materias</label>
                                        <input type="text" name="materias" value="{{ $notas->materias }}" class="form-control form-control-sm col-sm-10" id="materias" placeholder="materias">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="materias">seccion</label>
                                        <input type="text" name="seccion" value="{{ $notas->seccion }}" class="form-control form-control-sm col-sm-10" id="seccion" placeholder="seccion">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="materias">profesor</label>
                                        <input type="text" name="profesor" value="{{ $notas->profesor }}" class="form-control form-control-sm col-sm-10" id="profesor" placeholder="profesor">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="materias">periodo</label>
                                        <input type="text" name="periodo" value="{{ $notas->periodo }}" class="form-control form-control-sm col-sm-10" id="periodo" placeholder="periodo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="materias">actividad 1</label>
                                        <input type="text" name="actividad1" value="{{ $notas->actividad1 }}" class="form-control form-control-sm col-sm-10" id="actividad1" placeholder="actividad1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="materias">actividad2</label>
                                        <input type="text" name="actividad2" value="{{ $notas->actividad2 }}" class="form-control form-control-sm col-sm-10" id="actividad2" placeholder="actividad2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="materias">examen</label>
                                        <input type="text" name="examen" value="{{ $notas->examen }}" class="form-control form-control-sm col-sm-10" id="examen" placeholder="examen">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="materias">promedio</label>
                                        <input type="text" name="promedio" value="{{ $notas->promedio }}" class="form-control form-control-sm col-sm-10" id="promedio" placeholder="promedio">
                                    </div>
                                </div>
                                    
                                    <div class="modal-footer">
                                <a href="{{ route('notas.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>
                          
                                  
                                    
