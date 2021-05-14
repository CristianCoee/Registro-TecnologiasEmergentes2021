<div class="container-fluid">
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="NIE">NIE</label>
                                        <input type="text" name="NIE" class="form-control form-control-sm col-sm-4" id="NIE" placeholder="Ej: AA-0001">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="nombrealum">Nombre</label>
                                        <input type="text" name="nombrealum"  class="form-control form-control-sm col-sm-10" id="nombrealum" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="apellidoalum">Apellido</label>
                                        <input type="text" name="apellidoalum"  class="form-control form-control-sm col-sm-10" id="apellidoalum" placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="telefonoalum">Telefono</label>
                                        <input type="text" name="telefonoalum"  class="form-control form-control-sm col-sm-4" id="telefonoalum" placeholder="Telefono">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="fNacimiento">Fecha de Nacimiento</label>
                                        <input type="date" name="fNacimiento" class="form-control form-control-sm col-sm-4" id="fNacimiento" placeholder="Nacimiento">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="fIngreso">Fecha de Ingreso</label>
                                        <input type="date" name="fIngreso" class="form-control form-control-sm col-sm-4" id="fIngreso" placeholder="Ingreso">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="direccion">Direccion</label>
                                        <input type="text" name="direccion"  class="form-control form-control-sm col-sm-4" id="direccion" placeholder="direccion">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="responsable">Responsable</label>
                                        <input type="text" name="responsable"  class="form-control form-control-sm col-sm-4" id="responsable" placeholder="responsable">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="curso">Curso</label>
                                        <input type="text" name="curso" class="form-control form-control-sm col-sm-4" id="curso" placeholder="curso">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="estado">Estado</label>
                                        <input type="text" name="estado"  class="form-control form-control-sm col-sm-4" id="estado" placeholder="estado">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('alumnos.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>
