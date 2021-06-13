<div class="container-fluid" style="background: #124177;"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: var(--white);"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="color: rgb(255,255,255);">Modulo&nbsp;<small>Nomina</small></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                <!-- Aquí se inserta la tabla-->
                <div class="table-responsive" style="padding: 0px 20px 0px;">
                    <h1>Lista de trabajadores</h1>
                    <table id="tablaInventario" class="table table-striped table-bordered table-condensed" style="width:100%;">
                        <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>

                        <thead class="text-center">
                            <tr>
                                <th> </th>
                                <th>Nombre</th>
                                <th>apepat</th>
                                <th>apemat</th>
                                <th>puesto</th>
                                <th>direccion</th>
                                <th>celular</th>
                                <th>sangre</th>
                                <th>cuenta_bancaria</th>
                                <th>seguro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!-- Aquí se acaba la inserción de la tabla-->


                <!--Modal para CRUD-->


                <div class="modal fade" role="dialog" tabindex="-1" id="modalCRUD">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 id="modal-title"></h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="formUsuarios">
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="successfail"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6" id="message">
                                            <div class="form-group mb-3"><label class="form-label" for="from-name">Nombre</label>
                                                <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input class="form-control" type="text" id="NOMBRETRAB"></div>
                                            </div>
                                            <div class="form-group mb-3"><label class="form-label" for="from-name">Apellido Paterno</label>
                                                <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input class="form-control" type="text" id="apepat"></div>
                                            </div>
                                            <hr class="d-flex d-md-none">
                                            <div class="form-group mb-3"><label class="form-label" for="from-name">Apellido Materno</label>
                                                <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input class="form-control" type="text" id="apemat"></div>
                                            </div>
                                            <div class="form-group mb-3"><label class="form-label" for="from-name">Dirección</label>
                                                <div class="input-group"><span class="input-group-text"><i class="fa fa-map-marker"></i></span><input class="form-control" type="text" id="direccion"></div>
                                            </div>
                                            <div class="form-group mb-3"><label class="form-label" for="from-name">Teléfono</label>
                                                <div class="input-group"><span class="input-group-text"><i class="fa fa-phone"></i></span><input class="form-control" type="tel" id="celular"></div>
                                            </div>
                                            <div class="form-group mb-3"><label class="form-label" for="from-name">Usuario</label>
                                                <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input class="form-control" type="text" id="usr"></div>
                                            </div>
                                            <div class="form-group mb-3"><label class="form-label" for="from-name">Constraseña</label>
                                                <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input class="form-control" type="password" id="pass"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6" id="message-1">
                                            <div class="form-group mb-3"><label class="form-label" for="from-name">Tipo de sangre</label>
                                                <div class="input-group"><span class="input-group-text"><i class="fas fa-stethoscope"></i></span><input class="form-control" type="text" id="sangre"></div>
                                            </div>
                                            <div class="form-group mb-3"><label class="form-label" for="from-email">Cuenta bancaria</label>
                                                <div class="input-group"><span class="input-group-text"><i class="fa fa-credit-card"></i></span><input class="form-control" type="text" id="cuenta_bancaria" name="email"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="form-group mb-3"><label class="form-label" for="from-phone">Número de seguro</label>
                                                        <div class="input-group"><span class="input-group-text"><i class="fa fa-hospital-o"></i></span><input class="form-control" type="number" id="seguro" name="phone"></div>
                                                    </div>
                                                    <div class="form-group mb-3"><label class="form-label" for="from-phone">Puesto</label>
                                                        <!-- Iniciamos con el select -->
                                                        <div class="input-group"><span class="input-group-text"><i class="fa fa-dropbox"></i></span><select class="form-select" id="puesto" name="puesto">
                                                                <!--Aquí poblamos el select -->
                                                                <?php foreach ($data as $row) : ?>
                                                                    <!-- Le decimos que campo fue tomado desle la bd-->
                                                                    <option value="<?php echo $row["IDPUESTOS"] ?>"><?php echo $row["NOMBREPUESTO"] ?></option>
                                                                <?php endforeach ?>
                                                            </select>


                                                        </div>

                                                    </div>
                                                    <!--Terminamos con el select -->
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="row">
                                                    <div class="col"><button id="btnGuardar" class="btn btn-primary d-block w-100" type="submit">Enviar <i class="fa fa-chevron-circle-right"></i></button></div>
                                                </div>
                                            </div>
                                            <hr class="d-flex d-md-none">
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>