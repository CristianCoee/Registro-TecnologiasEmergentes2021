<div class="container-fluid">
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="NIE">NIE</label>
                                        <input type="text" name="NIE" value="{{ $alumnos->NIE }}" class="form-control form-control-sm col-sm-10" id="NIE" placeholder="Ej: AA-0001">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="nombrealum">Nombre</label>
                                        <input type="text" name="nombrealum" value="{{ $alumnos->nombrealum }}" class="form-control form-control-sm col-sm-10" id="nombrealum" placeholder="Nombre">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="apellidoalum">Apellido</label>
                                        <input type="text" name="apellidoalum" value="{{ $alumnos->apellidoalum }}" class="form-control form-control-sm col-sm-10" id="apellidoalum" placeholder="Apellido">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="telefonoalum">Telefono</label>
                                        <input type="text" name="telefonoalum" value="{{ $alumnos->telefonoalum }}" class="form-control form-control-sm col-sm-10" id="telefonoalum" placeholder="Telefono">
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="sexo">Sexo</label>
                                        <input type="text" name="sexo" value="{{ $alumnos->sexo }}" class="form-control form-control-sm col-sm-10" id="sexo" placeholder="F/M">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="fNacimiento">Fecha de Nacimiento</label>
                                        <input type="date" name="fNacimiento" value="{{ $alumnos->fNacimiento }}" class="form-control form-control-sm col-sm-10" id="fNacimiento" placeholder="Nacimiento">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="fIngreso">Fecha de Ingreso</label>
                                        <input type="date" name="fIngreso" value="{{ $alumnos->fIngreso }}" class="form-control form-control-sm col-sm-10" id="fIngreso" placeholder="Ingreso">
                                    </div>
                                </div>

                            

                            <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="direccion">Direccion</label>
                                        <input type="text" name="direccion" value="{{ $alumnos->direccion }}" class="form-control form-control-sm col-sm-10" id="direccion" placeholder="direccion">
                                    </div>
                                </div>

                           

                            <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="responsable">Responsable</label>
                                        <input type="text" name="responsable" value="{{ $alumnos->responsable }}" class="form-control form-control-sm col-sm-10" id="responsable" placeholder="responsable">
                                    </div>
                                </div>
                                
                            

                            <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="curso">Curso</label>
                                        <input type="text" name="curso" value="{{ $alumnos->curso }}" class="form-control form-control-sm col-sm-10" id="curso" placeholder="curso">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="estado">Estado</label>
                                        <input type="text" name="estado" value="{{ $alumnos->estado }}" class="form-control form-control-sm col-sm-10" id="estado" placeholder="estado">
                                    </div>  
                            </div>

                           
                                </div>
                                <div class="modal-footer">
                                <a href="{{ route('alumnos.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>     
                            
                            
