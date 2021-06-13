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
        <h1>Lista de servicios</h1>
        <table id="tablaServicios" class="table table-striped table-bordered table-condensed" style="width:100%;">
            <button id="btnNuevoServicio" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>

            <thead class="text-center">
                <tr>
                    <th> </th>
                    <th>Nombre del servicio</th>
                    <th>Descripcion del servicio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!-- Aquí se acaba la inserción de la tabla-->


    <!--Modal para CRUD-->
    <div class="modal fade" role="dialog" tabindex="-1" id="modalServicios">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-title"></h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formServicios">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6" id="message">
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Nombre del servicio</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input class="form-control" type="text" name="name" required="" placeholder="" id="nomSer"></div>
                                </div>
                                <hr class="d-flex d-md-none">
                                <div class="form-group mb-3"><label class="form-label" for="from-name">Descripcion del servicio</label>
                                    <div class="input-group"><span class="input-group-text"><i class="fa fa-circle-o-notch"></i></span><input class="form-control" type="text" name="name" required="" placeholder="" id="desSer"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6" id="message-1" style="padding-top: 52px;">
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col"><button class="btn btn-primary d-block w-100" type="submit" style="height: 71px;">Enviar&nbsp;<i class="fa fa-chevron-circle-right"></i></button></div>
                                    </div>
                                </div>
                                <hr class="d-flex d-md-none">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>