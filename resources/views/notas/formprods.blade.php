<div class="container-fluid">
<div class="row">
                   <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="alumno">alumno</label>
                                        <input type="text" name="alumno" class="form-control form-control-sm col-sm-4" id="alumno" placeholder="alumno ">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="materias">materias</label>
                                        <input type="text" name="materias"  class="form-control form-control-sm col-sm-10" id="materias" placeholder="materias">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="seccion">seccion</label>
                                        <input type="text" name="seccion"  class="form-control form-control-sm col-sm-10" id="seccion" placeholder="seccion">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="seccion">seccion</label>
                                        <input type="text" name="seccion"  class="form-control form-control-sm col-sm-10" id="seccion" placeholder="seccion">
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
                                        <label class="col-form-label col-form-label-sm" for="actividad1">actividad1</label>
                                        <input type="text" name="actividad1"  class="form-control form-control-sm col-sm-10" id="actividad1" placeholder="actividad1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="actividad2">actividad2</label>
                                        <input type="text" name="actividad2"  class="form-control form-control-sm col-sm-10" id="actividad2" placeholder="actividad2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="examen">examen</label>
                                        <input type="text" name="examen"  class="form-control form-control-sm col-sm-10" id="examen" placeholder="examen">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="promedio">promedio</label>
                                        <input type="text" name="promedio"  class="form-control form-control-sm col-sm-10" id="promedio" placeholder="promedio">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <a href="{{ route('notas.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>         
