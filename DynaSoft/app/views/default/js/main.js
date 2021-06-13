$(document).ready(function () {
    var user_id, opcion;
    opcion = 4;

    tablaGenNom = $('#tablaGenNom').DataTable({
        "ajax": {
            "url": "app/model/crudGenerarNom.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "IDPAGO" },
            { "data": "FECHA" },
            { "data": "INICIOPERIODO" },
            { "data": "FINPERIODO" },
            { "data": "OBSPAGO" },
            { "data": "PERCEPCIONES" },
            { "data": "DESCUENTOS" },
            { "data": "TOTALPAGO" },
            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm '><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>" }
        ]
    });
    //ocultar la ultima columna
    var dt = $('#tablaGenNom').DataTable();
    dt.column(8).visible(false);

    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formGenNomina').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        fecha = $.trim($('#fecha_pago').val());
        total_pago = 2000;
        inicio_periodo = $.trim($('#inicio_periodo').val());
        fin_periodo = $('#fin_periodo').val();
        obs_pago = $.trim($('#observaciones').val());
        percepciones = 100;
        descuentos = 10;
        $.ajax({
            url: "app/model/crudGenerarNom.php",
            type: "POST",
            datatype: "json",
            data: {
                id_pago: id_pago,
                fecha: fecha,
                total_pago: total_pago,
                inicio_periodo: inicio_periodo,
                fin_periodo: fin_periodo,
                obs_pago: obs_pago,
                percepciones: percepciones,
                descuentos: descuentos,
                opcion: opcion
            },
            success: function (data) {
                tablaGenNom.ajax.reload(null, false);
            }

        });
        $('#modalCRUDGenNom').modal('hide');
        $("#formGenNomina").find("input,textarea,select").val("");
    });



    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevoNom").click(function () {
        opcion = 1; //alta           
        id_pago = null;
        $("#formGenNomina").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Alta de inventario");
        $('#modalCRUDGenNom').modal('show');
    });

    tablaPuestos = $('#tablaPuestos').DataTable({
        "ajax": {
            "url": "app/model/crudPuestos.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "IDPUESTOS" },
            { "data": "NOMBREPUESTO" },
            { "data": "DESCRIPCIONPUESTO" },
            { "data": "SUELDO" },
            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditarPuestos'><i class='material-icons'>edit</i></button></div></div>" }
        ]
    });

    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#FormPuestos').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        nombrePuestos = $.trim($('#NOMBREPUESTOS').val());
        descripcionPuestos = $.trim($('#DESCRIPCIONPUESTOS').val());
        sueldoPuestos = $.trim($('#SUELDOPUESTOS').val());
        $.ajax({
            url: "app/model/crudPuestos.php",
            type: "POST",
            datatype: "json",
            data: { IDPUESTOS: idPuestos, NOMBREPUESTOS: nombrePuestos, DESCRIPCIONPUESTOS: descripcionPuestos, SUELDOPUESTOS: sueldoPuestos, opcion: opcion },
            success: function (data) {
                tablaPuestos.ajax.reload(null, false);
            }

        });
        $("#FormPuestos").find("input,textarea,select").val("");
        $('#modalPuestos').modal('hide');
    });


    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevoPuesto").click(function () {
        opcion = 1; //alta           
        idPuestos = null;
        $("#formPuestos").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Alta de inventario");
        $('#modalPuestos').modal('show');
    });

    //Editar        
    $(document).on("click", ".btnEditarPuestos", function (e) {
        e.preventDefault();
        opcion = 2;//editar
        fila = $(this).closest("tr");
        idPuestos = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        nombrePuestos = fila.find('td:eq(1)').text();
        descripcionPuestos = fila.find('td:eq(2)').text();
        sueldoPuestos = fila.find('td:eq(3)').text();

        $("#NOMBREPUESTOS").val(nombrePuestos);
        $("#DESCRIPCIONPUESTOS").val(descripcionPuestos);
        $("#SUELDOPUESTOS").val(sueldoPuestos);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar inventariox");
        $('#modalPuestos').modal('show');
    });

    tablaServicio = $('#tablaServicios').DataTable({
        "ajax": {
            "url": "app/model/crudServicios.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "IDSERVICIO" },
            { "data": "NOMBRESERVICIO" },
            { "data": "DESCRIPCION" },
            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm'id='btn-editarServicio'><i class='material-icons'>edit</i></button></div></div>" }
        ]
    });

    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formServicios').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        nombreServicios = $.trim($('#nomSer').val());
        descripcionServicios = $.trim($('#desSer').val());
        $.ajax({
            url: "app/model/crudServicios.php",
            type: "POST",
            datatype: "json",
            data: { id_servicio: id_servicio, nombreServicios: nombreServicios, descripcionServicios: descripcionServicios, opcion: opcion },
            success: function (data) {
                tablaServicio.ajax.reload(null, false);
            }

        });
        $('#modalServicios').modal('hide');
        $("#formServicios").find("input,textarea,select").val("");
    });



    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevoServicio").click(function () {
        opcion = 1; //alta           
        id_servicio = null;
        $("#formServicios").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $("#modal-title").text("Alta de servicios");
        $('#modalServicios').modal('show');
    });

    //Editar        
    $(document).on("click", "#btn-editarServicio", function () {
        opcion = 2;//editar
        fila = $(this).closest("tr");
        id_servicio = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        nombreServicios = fila.find('td:eq(1)').text();
        descripcionServicios = fila.find('td:eq(2)').text();
        $("#nomSer").val(nombreServicios);
        $("#desSer").val(descripcionServicios);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $("#modal-title").text("Editar Servicio");
        $('#modalServicios').modal('show');
    });

    tablaPrestaciones = $("#tablaPrestaciones").DataTable({
        ajax: {
            url: "app/model/crudPrestaciones.php",
            method: "POST", //usamos el metodo POST
            data: { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            dataSrc: "",
        },
        columns: [
            { data: "IDPRESTACION" },
            { data: "NOMBREPRES" },
            { data: "DESCRIPCIONPRES" },
            { data: "NOMCATPRESTACION" },
            { data: "IDCATPRESTACION" },
            { data: "VALORMUL" },
            {
                defaultContent:
                    "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm 'id='btnEditPres'><i class='material-icons'>edit</i></button></div></div>",
            },
        ],
    });
    var dt = $('#tablaPrestaciones').DataTable();
    //hide the first column
    dt.column(0).visible(false);
    dt.column(4).visible(false);


    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $("#formPrestaciones").submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        prestVal = $.trim($("#prestVal").val());
        prestNom = $("#prestNom").val();
        prestDes = $("#prestDes").val();
        prestCat = $("#prestCat option:selected").val();
        $.ajax({
            url: "app/model/crudPrestaciones.php",
            type: "POST",
            datatype: "json",
            data: {
                id_prestaciones: id_prestaciones,
                prestVal: prestVal,
                prestNom: prestNom,
                prestDes: prestDes,
                prestCat: prestCat,
                opcion: opcion
            },
            success: function (data) {
                tablaPrestaciones.ajax.reload(null, false);
            },
        });
        $("#modalPrestacionesCRUD").modal("hide");
        $("#formPrestaciones").find("input,textarea,select").val("");
    });

    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevoPres").click(function () {
        opcion = 1; //alta
        id_prestaciones = null;
        $("#formPrestaciones").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $("#modalPresT").text("Alta de Prestación");
        $("#modalPrestacionesCRUD").modal("show");
    });
    /*document.getElementById('btnNuevo').disabled = true;  * */
    //Editar
    $(document).on("click", "#btnEditPres", function () {
        opcion = 2; //editar
        fila = $(this).closest("tr");
        var dt = $('#tablaPrestaciones').DataTable();
        dt.column(0).visible(true);
        dt.column(4).visible(true);
        prestNom = fila.find("td:eq(1)").text();
        prestDes = fila.find("td:eq(2)").text();
        prestCat = fila.find("td:eq(3)").val();
        prestVal = fila.find("td:eq(5)").text();
        id_prestaciones = fila.find("td:eq(0)").text(); //capturo el ID
        id_prestCat = fila.find("td:eq(4)").text();
        dt.column(0).visible(false);
        dt.column(4).visible(false);
        //alert(id_prestCat);
        $("#prestVal").val(prestVal);
        $("#prestNom").val(prestNom);
        $("#prestDes").val(prestDes);
        $("#prestCat").val(id_prestCat);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Prestacion");
        $("#modalPrestacionesCRUD").modal("show");
    });

    tablaPrestamos = $('#tablaPrestamos').DataTable({
        "ajax": {
            "url": "app/model/crudPres.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "IDPRESTAMO" },
            { "data": "IDTRABAJADOR" },
            { "data": "NOMBRETRAB" },
            { "data": "MONTO" },
            { "data": "RESTANTE" },
            { "data": "FECHAPRESTAMO" },
            { "data": "ESTADOPRESTAMO" }
        ]
    });

    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formPrestamos').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        nombre = $.trim($('#id_trab option:selected').val());
        monto = $.trim($('#monto').val());
        fecha = $.trim($('#fecha_prest').val());

        $.ajax({
            url: "app/model/crudPres.php",
            type: "POST",
            datatype: "json",
            data: { nombre: nombre, monto: monto, fecha: fecha, opcion: opcion },
            success: function (data) {
                tablaPrestamos.ajax.reload(null, false);
            }
        });
        $('#modalCRUDPres').modal('hide');
        $("#formPrestamos").find("input,textarea,select").val("");
    });



    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevoPres").click(function () {
        opcion = 1; //alta           
        id_trabajador = null;
        $("#formUsuarios").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Alta de inventario");
        $('#modalCRUDPres').modal('show');
    });

    tablaGenGasServ = $('#tablaGenGasServ').DataTable({
        "ajax": {
            "url": "app/model/crudGastoServ.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "IDGASTO" },
            { "data": "NOMBRETRAB" },
            { "data": "IDTRABAJADOR" },
            { "data": "FECHAGASTO" },
            { "data": "MONTO" },
            { "data": "DESCRIPCION" },
            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm 'id='btnAgregarServ'><i class='material-icons'>add_circle</i></button><button class='btn btn-info btn-sm' id='btnVerServ'><i class='material-icons'>info</i></button></div></div>" }
        ]
    });

    //ocultar la ultima columna
    var dt = $('#tablaGenGasServ').DataTable();
    dt.column(2).visible(false);
    dt.column(0).visible(false);

    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#GasServForm').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        IDTRABAJADOR = $.trim($('#gasServNombre option:selected').val());
        FECHAGASSERV = $.trim($('#fechaGasServ').val());
        descGasServ = $.trim($('#descGasServ').val());
        $.ajax({
            url: "app/model/crudGastoServ.php",
            type: "POST",
            datatype: "json",
            data: {
                IDTRABAJADOR: IDTRABAJADOR,
                FECHAGASSERV: FECHAGASSERV,
                descGasServ: descGasServ,
                opcion: opcion
            },
            success: function (data) {
                tablaGenGasServ.ajax.reload(null, false);
            }

        });
        $('#modalGasServ').modal('hide');
        $("#GasServForm").find("input,textarea,select").val("");
    });



    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevoGastoServicio").click(function () {
        opcion = 1; //alta           
        $("#viaticosForm").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Alta de inventario");
        $('#modalGasServ').modal('show');
    });

    //Agregar servicios a gastos
    $(document).on("click", "#btnAgregarServ", function () {

        var dt = $('#tablaGenGasServ').DataTable();
        dt.column(0).visible(true);
        opcion = 2;//editar

        fila = $(this).closest("tr");
        id_Gasto = parseInt(fila.find('td:eq(0)').text()); //capturo el ID	  

        var dt = $('#tablaGenGasServ').DataTable();
        dt.column(2).visible(false);
        dt.column(0).visible(false);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar inventariox");
        $('#modalAgregarServicio').modal('show');
    });

    $('#añadirServicioForm').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        IDSERV = $.trim($('#ServNombre option:selected').val());
        MONTOSERV = $.trim($('#montoServ').val());
        $.ajax({
            url: "app/model/crudGastoServ.php",
            type: "POST",
            datatype: "json",
            data: {
                id_Gasto: id_Gasto,
                IDSERV: IDSERV,
                MONTOSERV: MONTOSERV,
                opcion: opcion
            },
            success: function (data) {
                tablaGenGasServ.ajax.reload(null, false);
            }

        });
        $('#modalAgregarServicio').modal('hide');
        $("#añadirServicioForm").find("input,textarea,select").val("");
    });



    //Parte inception

    //Agregar viaticos a trabajadores 

    $(document).on("click", "#btnVerServ", function () {
        $("#tablaInceptionServ").dataTable().fnDestroy();
        //try {   
        opcion = 5;

        var dt = $('#tablaGenGasServ').DataTable();
        dt.column(0).visible(true);
        dt.column(2).visible(true);
        fila = $(this).closest("tr");
        id_Gasto = parseInt(fila.find('td:eq(0)').text()); //capturo el ID 
        dt.column(2).visible(false);
        dt.column(0).visible(false);


        tablaInception = $('#tablaInceptionServ').DataTable({
            "ajax": {
                "url": "app/model/crudGastoServ.php",
                "method": 'POST', //usamos el metodo POST
                "data": { opcion: opcion, id_Gasto: id_Gasto }, //enviamos opcion 4 para que haga un SELECT
                "dataSrc": ""

            },
            "columns": [
                { "data": "NOMBRESERVICIO" },
                { "data": "PRECIOUNITARIOSERVICIO" },
            ],
        });

        inceptionNombreServ = (fila.find('td:eq(0)').text()); //capturo el ID 
        inceptionFechaServ = (fila.find('td:eq(1)').text()); //capturo el ID  
        inceptionMontoServ = parseInt(fila.find('td:eq(2)').text());
        inceptionDescServ = (fila.find('td:eq(3)').text());

        $("#inceptionTrabajadorServ").val(inceptionNombreServ);
        $("#inceptionFechaServ").val(inceptionFechaServ);
        $("#inceptionMontoServ").val(inceptionMontoServ);
        $("#inceptionDescServ").val(inceptionDescServ);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar inventariox");
        $('#modalInceptionServ').modal('show');


        //Apagamos las alertas xd
        /*    window.alert = function ( text ) { console.log( 'tried to alert: ' + text ); return true; };
           alert( new Date() );
           $('#modalInception').modal('hide');	
           } catch (error) {
                   
           } */

    });

    tablaSolGas = $('#tablaSolGas').DataTable({
        "ajax": {
            "url": "app/model/crudSolGas.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "IDSOLICITUD" },
            { "data": "NOM_COMP" },
            { "data": "DESCRIPCION" },
            { "data": "MONTO" },
            { "data": "FECHAGASTO" },
            { "data": "ESTADOSOLICITUD" },
            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm' id='btnEditarSol'><i class='material-icons'>edit</i></button></div></div>" }
        ]
    });

    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formSolGas').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        estadoSol = $.trim($('input:radio[name=RadioEstado]:checked').val());
        $.ajax({
            url: "app/model/crudSolGas.php",
            type: "POST",
            datatype: "json",
            data: { id_solGas: id_solGas, estadoSol: estadoSol, opcion: opcion },
            success: function (data) {
                tablaSolGas.ajax.reload(null, false);
            }

        });
        $('#modalSolGas').modal('hide');
        $("#formSolGas").find("input,textarea,select").val("");
    });

    //Editar        
    $(document).on("click", "#btnEditarSol", function () {
        opcion = 2;//editar
        fila = $(this).closest("tr");
        id_solGas = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        nombreTrabSol = fila.find('td:eq(1)').text();
        descripcionSol = fila.find('td:eq(2)').text();
        montoSol = fila.find('td:eq(3)').text();
        fechaSol = fila.find('td:eq(4)').text();
        $("#nombreTrabSol").val(nombreTrabSol);
        $("#montoSol").val(montoSol);
        $("#fechaSol").val(fechaSol);
        $("#descripcionSol").val(descripcionSol);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar inventariox");
        $('#modalSolGas').modal('show');
    });

    tablaInventario = $('#tablaInventario').DataTable({
        "ajax": {
            "url": "app/model/crud.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "IDTRABAJADOR" },
            { "data": "NOMBRETRAB" },
            { "data": "APEPATTRAB" },
            { "data": "APEMATTRAB" },
            { "data": "NOMBREPUESTO" },
            { "data": "DIRECCIONTRAB" },
            { "data": "CELULARTRAB" },
            { "data": "TIPOSANGRETRAB" },
            { "data": "CUENTABANCTRAB" },
            { "data": "NOSEGUROTRAB" },
            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm'id='btn-editar'><i class='material-icons'>edit</i></button></div></div>" }
        ]
    });

    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formUsuarios').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        nombre = $.trim($('#NOMBRETRAB').val());
        apepat = $.trim($('#apepat').val());
        apemat = $.trim($('#apemat').val());
        puesto = $('#puesto option:selected').val();
        direccion = $.trim($('#direccion').val());
        celular = $.trim($('#celular').val());
        sangre = $.trim($('#sangre').val());
        cuenta_bancaria = $.trim($('#cuenta_bancaria').val());
        seguro = $.trim($('#seguro').val());
        usr = $.trim($('#usr').val());
        pass = $.trim($('#pass').val());
        $.ajax({
            url: "app/model/crud.php",
            type: "POST",
            datatype: "json",
            data: { id_trabajador: id_trabajador, nombre: nombre, usr, pass, apepat: apepat, apemat: apemat, puesto: puesto, direccion: direccion, celular: celular, sangre: sangre, cuenta_bancaria: cuenta_bancaria, seguro: seguro, opcion: opcion },
            success: function (data) {
                tablaInventario.ajax.reload(null, false);
            }

        });
        $('#modalCRUD').modal('hide');
        $("#formUsuarios").find("input,textarea,select").val("");
    });



    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevo").click(function () {
        opcion = 1; //alta           
        id_trabajador = null;
        $("#formUsuariosAgregar").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $("#modal-title").text("Agregar trabajador");
        $('#modalCRUD').modal('show');
    });

    //Editar        
    $(document).on("click", "#btn-editar", function () {
        opcion = 2;//editar
        fila = $(this).closest("tr");
        id_trabajador = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        nombre = fila.find('td:eq(1)').text();
        apepat = fila.find('td:eq(2)').text();
        apemat = fila.find('td:eq(3)').text();
        puesto = fila.find('td:eq(4)').text();
        direccion = fila.find('td:eq(5)').text();
        celular = fila.find('td:eq(6)').text();
        sangre = fila.find('td:eq(7)').text();
        cuenta_bancaria = fila.find('td:eq(8)').text();
        seguro = fila.find('td:eq(9)').text();
        $("#NOMBRETRAB").val(nombre);
        $("#apepat").val(apepat);
        $("#apemat").val(apemat);
        $("#NOMBREPUESTO").val(puesto);
        $("#direccion").val(direccion);
        $("#celular").val(celular);
        $("#sangre").val(sangre);
        $("#cuenta_bancaria").val(cuenta_bancaria);
        $("#seguro").val(seguro);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $("#modal-title").text("Editar infomacion del trabajador");
        $('#modalCRUD').modal('show');
    });

    tablaGenVia = $('#tablaGenVia').DataTable({
        "ajax": {
            "url": "app/model/crudGenerarVia.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "IDVIATICO" },
            { "data": "NOMBRETRAB" },
            { "data": "IDTRABAJADOR" },
            { "data": "FECHAASIG" },
            { "data": "MONTO" },
            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm 'id='btnAgregarVia' ><i class='material-icons'>add_circle</i></button><button class='btn btn-info btn-sm' id='btnVerVia'><i class='material-icons'>info</i></button></div></div>" }
        ]
    });

    //ocultar la ultima columna
    var dt = $('#tablaGenVia').DataTable();
    dt.column(2).visible(false);
    dt.column(0).visible(false);

    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#viaticosForm').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        IDTRABAJADOR = $.trim($('#viaticosNombre option:selected').val());
        FECHAASIG = $.trim($('#fechaViaticos').val());
        $.ajax({
            url: "app/model/crudGenerarVia.php",
            type: "POST",
            datatype: "json",
            data: {
                IDTRABAJADOR: IDTRABAJADOR,
                FECHAASIG: FECHAASIG,
                opcion: opcion
            },
            success: function (data) {
                tablaGenVia.ajax.reload(null, false);
            }

        });
        $('#modalViaticos').modal('hide');
        $("#viaticosForm").find("input,textarea,select").val("");
    });



    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevoViatico").click(function () {
        opcion = 1; //alta           
        id_viatico = null;
        $("#viaticosForm").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Alta de inventario");
        $('#modalViaticos').modal('show');
    });

    //Agregar viaticos a trabajadores      
    $(document).on("click", "#btnAgregarVia", function () {

        var dt = $('#tablaGenVia').DataTable();
        dt.column(0).visible(true);
        opcion = 2;//editar

        fila = $(this).closest("tr");
        id_viatico = parseInt(fila.find('td:eq(0)').text()); //capturo el ID	  

        var dt = $('#tablaGenVia').DataTable();
        dt.column(2).visible(false);
        dt.column(0).visible(false);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar inventariox");
        $('#modalAsignarViatico').modal('show');


    });
    $(document).on("click", "#btnCompViat", function () {
        opcion = 7;//editar
        fila = $(this).closest("tr");
        id_detviatico = parseInt(fila.find('td:eq(0)').text()); //capturo el ID	
        Nomviatico = fila.find('td:eq(1)').text(); //capturo el ID	
        Descviatico = fila.find('td:eq(3)').text(); //capturo el ID
        $("#nombreViaticoComp").val(Nomviatico);
        $("#descripcionViaticoComp").val(Descviatico);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar inventariox");
        $('#modalComprobarViaticos').modal('show');
    });

    $('#viaticosComprobacion').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        montViaticoComp = $.trim($('#montoViaticoComp').val());
        $.ajax({
            url: "app/model/crudGenerarVia.php",
            type: "POST",
            datatype: "json",
            data: {
                id_detviatico: id_detviatico,
                montViaticoComp: montViaticoComp,
                IDTRABAJADOR: id_trabajadorInception,
                id_viatico: id_viatico,
                opcion: opcion
            },
            success: function (data) {
                tablaInception2.ajax.reload(null, false);
                setTimeout(function(){
                    console.log("I am the third log after 5 seconds");
                    var data = tablaInception2.rows().data();
                    var datos = data.row(1).data();
                    var tamaño= data.length;
                    
                    for(var i = 0 ; i <tamaño; i++){
                        var datos = data.row(i).data();
                        if(datos['ESTADO']=='E'){
                            
                            document.getElementById("tablaInception").rows[i+1].cells[5].innerHTML = "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn-sm ' id='btnActComp'><i class='material-icons'>check_circle</i></button><button class='btn btn-danger btn-sm ' id='btnNoActComf'><i class='material-icons'>cancel</i></button><button class='btn btn-warning btn-sm' id='btnCompViat'><i class='material-icons'>visibility</i></button></div></div>"
                        }
                        else{
                            document.getElementById("tablaInception").rows[i+1].cells[5].innerHTML = "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn-sm ' id='btnActComp' disabled><i class='material-icons'>check_circle</i></button><button class='btn btn-danger btn-sm ' id='btnNoActComf' disabled><i class='material-icons'>cancel</i></button><button class='btn btn-warning btn-sm' id='btnCompViat' disabled><i class='material-icons'>visibility</i></button></div></div>"
                        }
                    }
                
                },300);
            }

        });
        $('#modalComprobarViaticos').modal('hide');
        $("#viaticosComprobacion").find("input,textarea,select").val("");
    });

    $('#añadirViaticoForm').submit(function (e) {
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        IDTIVIATICO = $.trim($('#tipoViaticosNombre option:selected').val());
        MONTOVIAT = $.trim($('#montoViatico').val());
        DESCVIAT = $.trim($('#descripcionViatico').val());
        $.ajax({
            url: "app/model/crudGenerarVia.php",
            type: "POST",
            datatype: "json",
            data: {
                id_viatico: id_viatico,
                IDTIVIATICO: IDTIVIATICO,
                MONTOVIAT: MONTOVIAT,
                DESCVIAT: DESCVIAT,
                opcion: opcion
            },
            success: function (data) {
                tablaGenVia.ajax.reload(null, false);
            }

        });
        $('#modalAsignarViatico').modal('hide');
        $("#añadirViaticoForm").find("input,textarea,select").val("");
    });



    //Parte inception

    //Agregar viaticos a trabajadores 

    $(document).on("click", "#btnVerVia", function () {
        $("#tablaInception").dataTable().fnDestroy();
        //try {   
        opcion = 5;

        var dt = $('#tablaGenVia').DataTable();
        dt.column(0).visible(true);
        dt.column(2).visible(true);
        fila = $(this).closest("tr");
        id_viatico = parseInt(fila.find('td:eq(0)').text()); //capturo el ID 
        id_trabajadorInception = parseInt(fila.find('td:eq(2)').text()); //capturo el ID 
        dt.column(2).visible(false);
        dt.column(0).visible(false);


        tablaInception = async () => {
            tablaInception2 = $('#tablaInception').DataTable({
                "ajax": {
                    "url": "app/model/crudGenerarVia.php",
                    "method": 'POST', //usamos el metodo POST
                    "data": { opcion: opcion, id_viatico: id_viatico }, //enviamos opcion 4 para que haga un SELECT
                    "dataSrc": ""

                },
                "columns": [
                    { "data": "IDDETVIAT" },
                    { "data": "NOMBRE" },
                    { "data": "MONTOVIAT" },
                    { "data": "DESCVIAT" },
                    { "data": "ESTADO" },
                    { "defaultContent": "" }
                ],
            })
        };
        tablaInception().then(function(){
            setTimeout(function(){
                console.log("I am the third log after 5 seconds");
                var data = tablaInception2.rows().data();
                var datos = data.row(1).data();
                var tamaño= data.length;
                
                for(var i = 0 ; i <tamaño; i++){
                    var datos = data.row(i).data();
                    if(datos['ESTADO']=='E'){
                        
                        document.getElementById("tablaInception").rows[i+1].cells[5].innerHTML = "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn-sm ' id='btnActComp'><i class='material-icons'>check_circle</i></button><button class='btn btn-danger btn-sm ' id='btnNoActComf'><i class='material-icons'>cancel</i></button><button class='btn btn-warning btn-sm' id='btnCompViat'><i class='material-icons'>visibility</i></button></div></div>"
                    }
                    else{
                        document.getElementById("tablaInception").rows[i+1].cells[5].innerHTML = "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn-sm ' id='btnActComp' disabled><i class='material-icons'>check_circle</i></button><button class='btn btn-danger btn-sm ' id='btnNoActComf' disabled><i class='material-icons'>cancel</i></button><button class='btn btn-warning btn-sm' id='btnCompViat' disabled><i class='material-icons'>visibility</i></button></div></div>"
                    }
                }
            
            },300);
        inceptionNombre = (fila.find('td:eq(0)').text()); //capturo el ID 
        inceptionFecha = (fila.find('td:eq(1)').text()); //capturo el ID  
        inceptionMonto = parseInt(fila.find('td:eq(2)').text());

        $("#inceptionIdTrabajador").val()
        $("#inceptionTrabajador").val(inceptionNombre);
        $("#inceptionFecha").val(inceptionFecha);
        $("#inceptionMonto").val(inceptionMonto);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar inventariox");
        $('#modalInception').modal('show');
        });

        
       
        //Apagamos las alertas xd
        /*    window.alert = function ( text ) { console.log( 'tried to alert: ' + text ); return true; };
           alert( new Date() );
           $('#modalInception').modal('hide');	
           } catch (error) {
                   
           } */

    });
    







    //Actualizar de A a E
    $(document).on("click", "#btnActComp", function (e) {
        e.preventDefault();
        fila = $(this).closest("tr");
        id_det_viat = parseInt($(this).closest('tr').find('td:eq(0)').text());
        opcion = 3;
        var respuesta = confirm("¿Está seguro que quieres confirmar el viatico " + id_det_viat + "?");
        if (respuesta) {
            $.ajax({
                url: "app/model/crudGenerarVia.php",
                type: "POST",
                datatype: "json",
                data: { opcion: opcion, id_det_viat: id_det_viat, id_viatico:id_viatico },
                success: function (data) {
                    tablaInception2.ajax.reload(null, false);
                    setTimeout(function(){
                        console.log("I am the third log after 5 seconds");
                        var data = tablaInception2.rows().data();
                        var datos = data.row(1).data();
                        var tamaño= data.length;
                        
                        for(var i = 0 ; i <tamaño; i++){
                            var datos = data.row(i).data();
                            if(datos['ESTADO']=='E'){
                                
                                document.getElementById("tablaInception").rows[i+1].cells[5].innerHTML = "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn-sm ' id='btnActComp'><i class='material-icons'>check_circle</i></button><button class='btn btn-danger btn-sm ' id='btnNoActComf'><i class='material-icons'>cancel</i></button><button class='btn btn-warning btn-sm' id='btnCompViat'><i class='material-icons'>visibility</i></button></div></div>"
                            }
                            else{
                                document.getElementById("tablaInception").rows[i+1].cells[5].innerHTML = "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn-sm ' id='btnActComp' disabled><i class='material-icons'>check_circle</i></button><button class='btn btn-danger btn-sm ' id='btnNoActComf' disabled><i class='material-icons'>cancel</i></button><button class='btn btn-warning btn-sm' id='btnCompViat' disabled><i class='material-icons'>visibility</i></button></div></div>"
                            }
                        }
                    
                    },300);
                }
            });
        }
    });
    //Actualiza de E a A 
    $(document).on("click", "#btnNoActComf", function (e) {
        e.preventDefault();
        fila = $(this).closest("tr");
        id_det_viat = parseInt($(this).closest('tr').find('td:eq(0)').text());
        inceptioninceptionMonto = parseInt(fila.find('td:eq(2)').text());
        opcion = 6;
        var respuesta = confirm("¿Está seguro que quieres desconfirmar el viatico " + id_det_viat + "?");
        if (respuesta) {
            $.ajax({
                url: "app/model/crudGenerarVia.php",
                type: "POST",
                datatype: "json",
                data: { opcion: opcion, id_det_viat: id_det_viat, IDTRABAJADOR: id_trabajadorInception, MONTO: inceptioninceptionMonto },
                success: function (data) {
                    tablaInception2.ajax.reload(null, false);
                    setTimeout(function(){
                        console.log("I am the third log after 5 seconds");
                        var data = tablaInception2.rows().data();
                        var datos = data.row(1).data();
                        var tamaño= data.length;
                        
                        for(var i = 0 ; i <tamaño; i++){
                            var datos = data.row(i).data();
                            if(datos['ESTADO']=='E'){
                                
                                document.getElementById("tablaInception").rows[i+1].cells[5].innerHTML = "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn-sm ' id='btnActComp'><i class='material-icons'>check_circle</i></button><button class='btn btn-danger btn-sm ' id='btnNoActComf'><i class='material-icons'>cancel</i></button><button class='btn btn-warning btn-sm' id='btnCompViat'><i class='material-icons'>visibility</i></button></div></div>"
                            }
                            else{
                                document.getElementById("tablaInception").rows[i+1].cells[5].innerHTML = "<div class='text-center'><div class='btn-group'><button class='btn btn-success btn-sm ' id='btnActComp' disabled><i class='material-icons'>check_circle</i></button><button class='btn btn-danger btn-sm ' id='btnNoActComf' disabled><i class='material-icons'>cancel</i></button><button class='btn btn-warning btn-sm' id='btnCompViat' disabled><i class='material-icons'>visibility</i></button></div></div>"
                            }
                        }
                    
                    },300);
                }
            });

        }
    });



});