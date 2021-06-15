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
    <div class="jumbotron" style="background: rgba(233,236,239,0);padding-top: 34px;padding-bottom: 0px;">
        <h1 style="padding: 0px;padding-bottom: 26px;">&nbsp;Informes de ingresos</h1>
        <p>Seleccione las fechas en las que desea generar el informe.</p>
        <form action="index.php?action=genIngPDF" method="POST">
            <p><label style="padding-right: 2px;">Fecha de inicio del informe:</label><input type="date" name="fechaInicio" id="fechaInicio"></p>
            <p><label>Fecha de final del informe:&nbsp;&nbsp;</label><input type="date" name="fechaFin" id="fechaFin"></p>
            <p style="padding-bottom: 97px;"><button class="btn btn-primary" type="submit" style="background: rgb(18,65,119);border-style: none;">Generar Informe</button></p>
        </form>
    </div>

</div>