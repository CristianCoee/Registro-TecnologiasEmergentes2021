<div class="container-fluid">
                                
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="alumno">ALUMNO</label>
                                        <input type="text" name="alumno" value="{{ $calificaciones->alumno }}" class="form-control form-control-sm col-sm-10" id="alumno" placeholder="alumno">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="grado">grado</label>
                                        <input type="text" name="grado" value="{{ $calificaciones->grado }}" class="form-control form-control-sm col-sm-10" id="grado" placeholder="grado">
                                    </div>

                                    <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="profesor">profesor</label>
                                        <input type="text" name="profesor" value="{{ $calificaciones->profesor }}" class="form-control form-control-sm col-sm-10" id="profesor" placeholder="profesor">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="materias">periodo</label>
                                        <input type="text" name="periodo" value="{{ $calificaciones->periodo }}" class="form-control form-control-sm col-sm-10" id="periodo" placeholder="periodo">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="matematicas">Matematicas</label>
                                        <input type="text" name="matematicas" value="{{ $calificaciones->matematicas }}" class="form-control form-control-sm col-sm-10" id="matematicas" placeholder="matematicas">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="lenguaje">Lenguaje</label>
                                        <input type="text" name="lenguaje" value="{{ $calificaciones->lenguaje }}" class="form-control form-control-sm col-sm-10" id="lenguaje" placeholder="lenguaje">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="sociales">Sociales</label>
                                        <input type="text" name="sociales" value="{{ $calificaciones->sociales }}" class="form-control form-control-sm col-sm-10" id="sociales" placeholder="sociales">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="ciencia">Ciencias</label>
                                        <input type="text" name="ciencia" value="{{ $calificaciones->ciencia }}" class="form-control form-control-sm col-sm-10" id="ciencia" placeholder="ciencia">
                                    </div>
                                </div>
                                    
                                    <div class="modal-footer">
                                <a href="{{ route('calificaciones.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>
                          
                                  
                                    
