<div class="container">
    <div class="row">
        <h3 class="center-align">
            Control Prenatal
        </h3>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" id="condicion" name="condicion" value="1">
                            <div class="row">
                                <div class="col s12 m4">
                                    <div class="input-field">
                                        <label for="ultima_regla">Última regla</label>
                                        <input type="date" class="form-control" name="ultima_regla" required>
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="input-field">
                                        <label for="tiempo_embarazo">Tiempo de embarazo</label>
                                        <div class="form-inline">
                                            <input type="number" step="00.1" name="tiempo_embarazo" class="form-control" placeholder="Ejemplo: 20.5"  required>
                                            <label for="tiempo_embarazo" class="dias">Semanas</label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col s12 m4">
                                    <div class="input-field">
                                        <label for="fecha_parto">Fecha de parto</label>
                                        <input type="date" name="fecha_parto" class="form-control" required>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col s12 m4">
                                    <label for="control">¿Está en control?</label>
                                    <label>
                                        <input type="radio" name="tcontrol" id="tcontrol1" value="1" required checked>
                                        <span>Si</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="tcontrol" id="tcontrol2" value="2">
                                        <span>No</span>
                                    </label>   
                                </div>
                                <div class="col s12 m4">
                                    <label for="control">¿Tiene algun tipo de enfermedad?</label>
                                    <label>
                                        <input type="radio" name="enfermedad" id="enfermedad1" value="1" required>
                                        <span>Si</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="enfermedad" id="enfermedad2" value="2">
                                        <span>No</span>
                                    </label>   
                                </div>
                                <div class="col s12 m4">
                                    <label for="control">¿Recibe micronutrientes?</label>
                                    <label>
                                        <input type="radio" name="micronutrientes" id="micronutrientes" value="1" required>
                                        <span>Si</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="micronutrientes" id="micronutrientes" value="2">
                                        <span>No</span>
                                    </label>   
                                </div>
                            </div>
                            <div class="row mt-3">  
                                <div class="col-4">
                                    <label for="asic">¿ASIC?</label>
                                    <div class="form-inline">
                                        <label for="asic" class="mr-2 ml-2">SI</label>
                                        <input type="radio" class="input-field" name="asic" id="asic" value="1" required>
                                        <label for="asic" class="mr-2 ml-2">NO</label>
                                        <input type="radio" class="input-field" name="asic" id="asic" value="2">
                                    </div>    
                                </div>
                                <div class="col-4">
                                    <label for="parto_humanizado">¿Parto Humanizado?</label>
                                    <div class="form-inline">
                                        <label for="parto_humanizado" class="mr-2 ml-2">SI</label>
                                        <input type="radio" class="input-field" name="parto_humanizado" id="parto_humanizado" value="1" required>
                                        <label for="parto_humanizado" class="mr-2 ml-2">NO</label>
                                        <input type="radio" class="input-field" name="parto_humanizado" id="parto_humanizado" value="2">
                                    </div>    
                                </div>
                                <div class="col-4">
                                    <label for="antecedentes">¿Posee antecedentes?</label>
                                    <div class="form-inline">
                                        <label for="antecedentes" class="mr-2 ml-2">SI</label>
                                        <input type="radio" class="input-field" name="antecedentes" id="antecedentes1" value="1" required>
                                        <label for="antecedentes" class="mr-2 ml-2">NO</label>
                                        <input type="radio" class="input-field" name="antecedentes" id="antecedentes2" value="2">
                                    </div>    
                                </div>
                            </div>
                            <div class="row mt-3" id="centro">
                                <div class="col-8">
                                    <div class="input-field">
                                        <label for="centro">Centro</label>
                                        <input type="text" name="centro" placeholder="Nombre del centro asistencial" class="form-control">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-field">
                                        <label for="condicion_centro">Condicion del centro</label>
                                        <select name="condicion_centro" id="" class="form-control">
                                            <option value="0" selected>Seleccione</option>
                                            <option value="1">Publico</option>
                                            <option value="2">Privado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3" id="tipo_enfermedad">
                                <div class="col-12">
                                    <div class="input-field">
                                        <label for="tipo_enfermedad">Tipo de enfermedad</label>
                                        <input type="text" name="tipo_enfermedad" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3" id="tipo_antecedente">
                                <div class="col-12">
                                    <div class="input-field">
                                        <label for="tipo_antecedente">Tipo de antecedente</label>
                                        <textarea name="tipo_antecedente" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id_embarazada" id="ids">
                            <button class="btn btn-block btn-success mt-3">Guardar</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>