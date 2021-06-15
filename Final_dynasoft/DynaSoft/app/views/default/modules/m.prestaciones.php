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
        <h1>Lista de Prestaciones</h1>
        <table id="tablaPrestaciones" class="table table-striped table-bordered table-condensed" style="width:100%;">
            <button id="btnNuevoPres" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>

            <thead class="text-center">
                <tr>
                    <th> </th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Categoria</th>
                    <th>Id Categoria</th>
                    <th>Multiplicador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <!-- Aquí se acaba la inserción de la tabla-->


    <!--Modal para CRUD-->

    <div class="modal fade" role="dialog" tabindex="-1" id="modalPrestacionesCRUD">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modalPresT" style="text-align: center;">Alta de Prestaciones</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formPrestaciones">
                        <div class="row">
                            <div class="col-12 col-md-6 offset-md-3 offset-lg-3" id="message">
                                <div class="form-group mb-3">
                                    <div class="form-group mb-3"><label class="form-label" for="from-phone">Categoria</label>
                                        <div class="input-group"><span class="input-group-text"><i class="fa fa-dropbox"></i></span><select class="form-select" id="prestCat" name="call time">
                                                <!--Aquí poblamos el select -->
                                                <?php foreach ($data as $row) : ?>
                                                    <!-- Le decimos que campo fue tomado desle la bd-->
                                                    <option value="<?php echo $row["IDCATPRESTACION"] ?>"><?php echo $row["NOMCATPRESTACION"] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            </select></div>
                                    </div><label class="form-label" for="from-name">Nombre Prestación</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input type="text" class="form-control" id="prestNom" name="name" required placeholder /></div>
                                </div>
                                <hr class="d-flex d-md-none" />
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Descripción Prestación</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><textarea class="form-control" id="prestDes"></textarea></div>
                                </div>
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Valor Multiplicador</label>
                                    <div class="input-group"><span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-x">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg></span><input type="text" class="form-control" id="prestVal" name="name" required placeholder /></div>
                                </div><button class="btn btn-primary d-block w-100" type="submit">Enviar<i class="fa fa-chevron-circle-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>