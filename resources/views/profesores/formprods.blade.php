<div class="container-fluid">
<div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="nombre">nombre</label>
                                        <input type="text" name="nombre" class="form-control form-control-sm col-sm-4" id="nombre" placeholder="nombre">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="apellido">apellido</label>
                                        <input type="text" name="apellido"  class="form-control form-control-sm col-sm-10" id="apellido" placeholder="apellido">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="sexo">sexo</label>
                                        <input type="text" name="sexo"  class="form-control form-control-sm col-sm-10" id="sexo" placeholder="sexo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="tel">tel</label>
                                        <input type="integer" name="tel"  class="form-control form-control-sm col-sm-4" id="tel" placeholder="tel">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="nombre">cel</label>
                                        <input type="integer" name="cel" class="form-control form-control-sm col-sm-4" id="cel" placeholder="cel">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="usuario">usuario</label>
                                        <input type="text" name="usuario"  class="form-control form-control-sm col-sm-10" id="usuario" placeholder="usuario">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="clave">clave</label>
                                        <input type="text" name="clave"  class="form-control form-control-sm col-sm-10" id="clave" placeholder="clave">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="tel">activo</label>
                                        <input type="text" name="activo"  class="form-control form-control-sm col-sm-4" id="activo" placeholder="activo">
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                <a href="{{ route('profesores.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>      
