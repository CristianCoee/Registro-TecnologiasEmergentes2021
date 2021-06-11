<div class="container-fluid">
                                
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="nombre">nombre</label>
                                        <input type="text" name="nombre" value="{{ $profesores->nombre }}" class="form-control form-control-sm col-sm-10" id="nombre" placeholder="nombre">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="apellido">apellido</label>
                                        <input type="text" name="apellido" value="{{ $profesores->apellido }}" class="form-control form-control-sm col-sm-10" id="apellido" placeholder="apellido">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="sexo">sexo</label>
                                        <input type="text" name="sexo" value="{{ $profesores->sexo }}" class="form-control form-control-sm col-sm-10" id="sexo" placeholder="F/M">
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="tel">telefono</label>
                                        <input type="integer" name="tel" value="{{ $profesores->tel }}" class="form-control form-control-sm col-sm-10" id="tel" placeholder="tel">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="cel">celular</label>
                                        <input type="integer" name="cel" value="{{ $profesores->cel }}" class="form-control form-control-sm col-sm-10" id="cel" placeholder="cel">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="usuario">usuario</label>
                                        <input type="text" name="usuario" value="{{ $profesores->usuario }}" class="form-control form-control-sm col-sm-10" id="usuario" placeholder="usuario">
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="cel">clave</label>
                                        <input type="text" name="clave" value="{{ $profesores->clave }}" class="form-control form-control-sm col-sm-10" id="clave" placeholder="clave">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="curso">grado</label>
                                        <input type="text" name="curso" value="{{ $profesores->curso }}" class="form-control form-control-sm col-sm-10" id="curso" placeholder="curso">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="activo">activo</label>
                                        <input type="text" name="activo" value="{{ $profesores->activo }}" class="form-control form-control-sm col-sm-10" id="activo" placeholder="activo">
                                    </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                <a href="{{ route('profesores.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>
                          
                                  
                                    
