                             <div class="container-fluid">
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="codprod">Código</label>
                                        <input type="text" name="codprod" value="{{ $productos->codprod }}" class="form-control form-control-sm col-sm-4" id="codprod" placeholder="Ej: AA-0001">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="nombreprod">Descripción</label>
                                        <input type="text" name="nombreprod" value="{{ $productos->nombreprod }}" class="form-control form-control-sm col-sm-10" id="nombreprod" placeholder="Nombre del producto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="typprod">Tipo de Producto</label>
                                        <input type="text" name="typprod" value="{{ $productos->typprod }}" class="form-control form-control-sm col-sm-10" id="typprod" placeholder="Tipo de producto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="costunit">Costo Unitario</label>
                                        <input type="number" name="costunit" value="{{ $productos->costunit }}" class="form-control form-control-sm col-sm-4" id="costunit" step="0000.0001" placeholder="000.000">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="cantprod">Cantidad</label>
                                        <input type="number" name="cantprod" value="{{ $productos->cantprod }}" class="form-control form-control-sm col-sm-4" id="cantprod" placeholder="0000">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('productos.index') }}" class="link btn btn-secondary">Cancelar</a>
                                <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
                            </div>
