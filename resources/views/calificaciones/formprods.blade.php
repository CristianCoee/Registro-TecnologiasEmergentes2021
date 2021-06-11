<div class="container-fluid">
<div class="row">
                   <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="alumno">alumno</label>
                                        <input type="text" name="alumno" class="form-control form-control-sm col-sm-4" id="alumno" placeholder="alumno ">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="seccion">grado</label>
                                        <input type="text" name="grado"  class="form-control form-control-sm col-sm-10" id="grado" placeholder="grado">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="profesor">profesor</label>
                                        <input type="text" name="profesor"  class="form-control form-control-sm col-sm-10" id="profesor" placeholder="profesor">
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="perioro">periodo</label>
                                        <input type="text" name="periodo"  class="form-control form-control-sm col-sm-10" id="periodo" placeholder="periodo">
                                    </div>
                                </div>
                               
                               
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="matematicas">Matematicas</label>
                                        <input type="text" name="matematicas"  class="form-control form-control-sm col-sm-10" id="matematicas" placeholder="matematicas">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="lenguaje">Lenguaje</label>
                                        <input type="text" name="lenguaje"  class="form-control form-control-sm col-sm-10" id="lenguaje" placeholder="lenguaje">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="sociales">Sociales</label>
                                        <input type="text" name="sociales"  class="form-control form-control-sm col-sm-10" id="sociales" placeholder="sociales">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="ciencia">Ciencia</label>
                                        <input type="text" name="ciencia"  class="form-control form-control-sm col-sm-10" id="ciencia" placeholder="ciencia">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <a href="{{ route('calificaciones.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>         
