/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     19/05/2021 20:56:18                          */
/*==============================================================*/

/*==============================================================*/
/* Table: CAT_PRESTACION                                        */
/*==============================================================*/
create table CAT_PRESTACION
(
   IDCATPRESTACION      int not null auto_increment  comment '',
   IDPRESTACION         int  comment '',
   NOMCATPRESTACION     varchar(30) not null  comment '',
   primary key (IDCATPRESTACION)
);

/*==============================================================*/
/* Table: EQUIPO                                                */
/*==============================================================*/
create table EQUIPO
(
   CODIGO_EQUIPO        varchar(16) not null  comment '',
   CANTIDAD_EQUIPO      int not null  comment '',
   DESCRIPCION_EQUIPO   varchar(100)  comment '',
   CARACTERISTICAS      varchar(100)  comment '',
   MARCA_EQUIPO         varchar(50)  comment '',
   MODELO_EQUIPO        varchar(50)  comment '',
   TIPO_EQUIPO          varchar(50)  comment '',
   primary key (CODIGO_EQUIPO)
);

/*==============================================================*/
/* Table: EQUIPO_OBRA                                           */
/*==============================================================*/
create table EQUIPO_OBRA
(
   CODIGO_EQUIPO        varchar(16)  comment '',
   ID_OBRA              varchar(50)  comment '',
   IDTRABAJADOR         int  comment ''
);

/*==============================================================*/
/* Table: GASTOS                                                */
/*==============================================================*/
create table GASTOS
(
   IDGASTO              int not null auto_increment  comment '',
   IDTRABAJADOR         int  comment '',
   FECHAGASTO           date not null  comment '',
   MONTO                float not null  comment '',
   DESCRIPCION          varchar(100) not null  comment '',
   primary key (IDGASTO)
);

/*==============================================================*/
/* Table: GASTOS_EQUIPO                                         */
/*==============================================================*/
create table GASTOS_EQUIPO
(
   IDGASTO              int  comment '',
   CODIGO_EQUIPO        varchar(16)  comment '',
   CANTIDAD_GE          int not null  comment '',
   PRECIO_UNITARIO_GE   float not null  comment ''
);

/*==============================================================*/
/* Table: GASTOS_MATERIAL                                       */
/*==============================================================*/
create table GASTOS_MATERIAL
(
   IDGASTO              int  comment '',
   ID_MATERIAL          varchar(16)  comment '',
   CANTIDAD_GM          int not null  comment '',
   PRECIO_UNITARIO_GM   float  comment ''
);

/*==============================================================*/
/* Table: GASTOS_SERVICIO                                       */
/*==============================================================*/
create table GASTOS_SERVICIO
(
   IDSERVICIO           int  comment '',
   IDGASTO              int  comment ''
);

/*==============================================================*/
/* Table: INCIDENTES                                            */
/*==============================================================*/
create table INCIDENTES
(
   ID_INCIDENTE         varchar(15) not null  comment '',
   ID_OBRA              varchar(50)  comment '',
   IDTRABAJADOR         int  comment '',
   DESCRIPCION_INCIDENTE varchar(100) not null  comment '',
   FECHA_INCIDENTE      date not null  comment '',
   primary key (ID_INCIDENTE)
);

/*==============================================================*/
/* Table: INFORME_MUESTREO                                      */
/*==============================================================*/
create table INFORME_MUESTREO
(
   ID_INFORME_MUESTREO  int not null auto_increment  comment '',
   ID_OBRA              varchar(50)  comment '',
   ENSAYE               int not null  comment '',
   FECHA_PRUEBA         date not null  comment '',
   FECHA_INFORME        date not null  comment '',
   ELEMENTO_COLADO      varchar(50) not null  comment '',
   FC_PROYECTO          varchar(50) not null  comment '',
   CANTIDAD_EMPLEADA    varchar(50) not null  comment '',
   ADITIVO              varchar(50) not null  comment '',
   FINALIDAD_ADITIVO    varchar(50) not null  comment '',
   TEMPERATURA          varchar(15) not null  comment '',
   TAM_MAX              varchar(15) not null  comment '',
   REV_PYCT             varchar(15) not null  comment '',
   INICIO_COLADO        time not null  comment '',
   FINAL_COLADO         time not null  comment '',
   CONCRETERA_UBIC      varchar(100) not null  comment '',
   TIPO_CONCRETO        varchar(50) not null  comment '',
   TIPO_CEMENTO         varchar(50) not null  comment '',
   LABORATORISTA        varchar(50) not null  comment '',
   JEFE_LABORATORIO     varchar(50) not null  comment '',
   primary key (ID_INFORME_MUESTREO)
);

/*==============================================================*/
/* Table: INFORME_RESISTENCIAS                                  */
/*==============================================================*/
create table INFORME_RESISTENCIAS
(
   ID_INFORME_RESIS     varchar(50) not null  comment '',
   ID_OBRA              varchar(50)  comment '',
   NO_ENSAYO_RESIS      int not null  comment '',
   NO_MUESTRA_RESIS     int not null  comment '',
   PROPORCIONAMIENTO_FC varchar(50) not null  comment '',
   REVENIMIENTO_CM      float not null  comment '',
   ADICIONANTE          varchar(50) not null  comment '',
   TIPO_RESIS           varchar(50) not null  comment '',
   MARCA_RESIS          varchar(50) not null  comment '',
   CANTIDAD_USADA       varchar(25) not null  comment '',
   FINALIDAD            varchar(100) not null  comment '',
   EQUIPO_MEZCLADO_CAPACIDAD varchar(100) not null  comment '',
   EQUIPO_ACOMODO_CONCRETO varchar(100) not null  comment '',
   DIAMETRO_CM          float not null  comment '',
   SECCION_CM2          float not null  comment '',
   FECHA_COLADO         date not null  comment '',
   FECHA_RUPTURA        date not null  comment '',
   EDAD_DIAS            int not null  comment '',
   PROCEDIMIENTO_CURADO varchar(100) not null  comment '',
   CARGA_ROPTURA_KG     float not null  comment '',
   RESISTENCIA_KG_CM2   float not null  comment '',
   RESISTENCIA_PROYECTO float not null  comment '',
   LABORATORISTA        varchar(50) not null  comment '',
   JEFE_LABORATORIO     varchar(50) not null  comment '',
   primary key (ID_INFORME_RESIS)
);

/*==============================================================*/
/* Table: INGRESOS                                              */
/*==============================================================*/
create table INGRESOS
(
   IDINGRESO            int not null auto_increment  comment '',
   ID_OBRA              varchar(50)  comment '',
   MONTO_INGRESO        float not null  comment '',
   FECHAINGRESO         date not null  comment '',
   DESCRIPCIONINGRESO   varchar(100) not null  comment '',
   primary key (IDINGRESO)
);

/*==============================================================*/
/* Table: MATERIAL                                              */
/*==============================================================*/
create table MATERIAL
(
   ID_MATERIAL          varchar(16) not null  comment '',
   NOMBRE_MATERIAL      varchar(50) not null  comment '',
   CANTIDAD_MATERIAL    int not null  comment '',
   UNIDAD_MEDIDA        varchar(50) not null  comment '',
   DESCRIPCION          varchar(100) not null  comment '',
   primary key (ID_MATERIAL)
);

/*==============================================================*/
/* Table: MATERIAL_OBRA                                         */
/*==============================================================*/
create table MATERIAL_OBRA
(
   ID_MATERIAL          varchar(16)  comment '',
   ID_OBRA              varchar(50)  comment '',
   IDTRABAJADOR         int  comment ''
);

/*==============================================================*/
/* Table: NOMINA                                                */
/*==============================================================*/
create table NOMINA
(
   IDPAGO               int not null auto_increment  comment '',
   FECHA                date not null  comment '',
   TOTALPAGO            float not null  comment '',
   OBSPAGO              varchar(200)  comment '',
   primary key (IDPAGO)
);

/*==============================================================*/
/* Table: PRESTACIONES                                          */
/*==============================================================*/
create table PRESTACIONES
(
   IDPRESTACION         int not null auto_increment  comment '',
   NOMBREPRES           varchar(30) not null  comment '',
   DESCRIPCIONPRES      varchar(100) not null  comment '',
   primary key (IDPRESTACION)
);

/*==============================================================*/
/* Table: PRESTACION_NOMINA_TRAB                                */
/*==============================================================*/
create table PRESTACION_NOMINA_TRAB
(
   IDPRESNOMTRAB        int not null auto_increment  comment '',
   IDPRESTACION         int  comment '',
   IDPAGO               int  comment '',
   IDTRABAJADOR         int  comment '',
   VALOR                float not null  comment '',
   primary key (IDPRESNOMTRAB)
);

/*==============================================================*/
/* Table: PRESTAMOS                                             */
/*==============================================================*/
create table PRESTAMOS
(
   IDPRESTAMO           int not null auto_increment  comment '',
   IDTRABAJADOR         int  comment '',
   MONTO                float not null  comment '',
   RESTANTE             float not null  comment '',
   primary key (IDPRESTAMO)
);

/*==============================================================*/
/* Table: PRESUPUESTO_OBRAS                                     */
/*==============================================================*/
create table PRESUPUESTO_OBRAS
(
   ID_PRESUPUESTO       varchar(15) not null  comment '',
   ID_OBRA              varchar(50)  comment '',
   DESCRIPCION          varchar(100)  comment '',
   FECHA_REGISTRO       date  comment '',
   primary key (ID_PRESUPUESTO)
);

/*==============================================================*/
/* Table: PUESTOS                                               */
/*==============================================================*/
create table PUESTOS
(
   IDPUESTOS            int not null auto_increment  comment '',
   NOMBREPUESTO         varchar(50) not null  comment '',
   DESCRIPCIONPUESTO    varchar(200)  comment '',
   primary key (IDPUESTOS)
);

/*==============================================================*/
/* Table: REGISTRO_OBRAS                                        */
/*==============================================================*/
create table REGISTRO_OBRAS
(
   ID_OBRA              varchar(50) not null  comment '',
   IDTRABAJADOR         int  comment '',
   DESCRIPCION          varchar(50)  comment '',
   CONTRATISTA_NOMBRE   varchar(100)  comment '',
   TEL_CONTRATISTA      varchar(15)  comment '',
   LUGAR_DESARROLLO     varchar(50)  comment '',
   FECHA_INICIO_OBRA    date  comment '',
   FECHA_FINAL_OBRA     date  comment '',
   STATUS_OBRA          varchar(50)  comment '',
   COSTO                money  comment '',
   primary key (ID_OBRA)
);

/*==============================================================*/
/* Table: SERVICIOS                                             */
/*==============================================================*/
create table SERVICIOS
(
   IDSERVICIO           int not null auto_increment  comment '',
   NOMBREAERVICIO       varchar(50) not null  comment '',
   DESCRIPCION          varchar(100) not null  comment '',
   primary key (IDSERVICIO)
);

/*==============================================================*/
/* Table: TRABAJADORES                                          */
/*==============================================================*/
create table TRABAJADORES
(
   IDTRABAJADOR         int not null auto_increment  comment '',
   IDPUESTOS            int  comment '',
   NOMBRETRAB           varchar(30) not null  comment '',
   APEPATTRAB           varchar(30) not null  comment '',
   APEMATTRAB           varchar(30) not null  comment '',
   DIRECCIONTRAB        varchar(60) not null  comment '',
   CELULARTRAB          varchar(10) not null  comment '',
   TIPOSANGRETRAB       varchar(10) not null  comment '',
   CUENTABANCTRAB       varchar(18) not null  comment '',
   NOSEGUROTRAB         varchar(11) not null  comment '',
   USUARIO              varchar(50) not null  comment '',
   CONTRASENA           varchar(50) not null  comment '',
   primary key (IDTRABAJADOR)
);

/*==============================================================*/
/* Table: VIAJES                                                */
/*==============================================================*/
create table VIAJES
(
   IDVIAJE              int not null auto_increment  comment '',
   NO_CARRO             varchar(20) not null  comment '',
   NO_REMISION          varchar(20) not null  comment '',
   VOLUMEN              float not null  comment '',
   HORA_SALIDA_VIAJE    time not null  comment '',
   HORA_LLEGADA_VIAJE   time not null  comment '',
   HORA_INICIAL_VIAJE   time not null  comment '',
   HORA_FINAL_VIAJE     time not null  comment '',
   REVENIMIENTO         float not null  comment '',
   NO_PROVETAS          varchar(25) not null  comment '',
   OBSERVACIONES        varchar(300) not null  comment '',
   primary key (IDVIAJE)
);

/*==============================================================*/
/* Table: VIAJE_INFORME_MUESTREO                                */
/*==============================================================*/
create table VIAJE_INFORME_MUESTREO
(
   IDVIAJE              int  comment '',
   ID_INFORME_MUESTREO  int  comment ''
);

alter table CAT_PRESTACION add constraint FK_CAT_PRES_REFERENCE_PRESTACI foreign key (IDPRESTACION)
      references PRESTACIONES (IDPRESTACION) on delete restrict on update restrict;

alter table EQUIPO_OBRA add constraint FK_EQUIPO_O_REFERENCE_EQUIPO foreign key (CODIGO_EQUIPO)
      references EQUIPO (CODIGO_EQUIPO) on delete restrict on update restrict;

alter table EQUIPO_OBRA add constraint FK_EQUIPO_O_REFERENCE_REGISTRO foreign key (ID_OBRA)
      references REGISTRO_OBRAS (ID_OBRA) on delete restrict on update restrict;

alter table EQUIPO_OBRA add constraint FK_EQUIPO_O_REFERENCE_TRABAJAD foreign key (IDTRABAJADOR)
      references TRABAJADORES (IDTRABAJADOR) on delete restrict on update restrict;

alter table GASTOS add constraint FK_GASTOS_REFERENCE_TRABAJAD foreign key (IDTRABAJADOR)
      references TRABAJADORES (IDTRABAJADOR) on delete restrict on update restrict;

alter table GASTOS_EQUIPO add constraint FK_GASTOS_E_REFERENCE_GASTOS foreign key (IDGASTO)
      references GASTOS (IDGASTO) on delete restrict on update restrict;

alter table GASTOS_EQUIPO add constraint FK_GASTOS_E_REFERENCE_EQUIPO foreign key (CODIGO_EQUIPO)
      references EQUIPO (CODIGO_EQUIPO) on delete restrict on update restrict;

alter table GASTOS_MATERIAL add constraint FK_GASTOS_M_REFERENCE_GASTOS foreign key (IDGASTO)
      references GASTOS (IDGASTO) on delete restrict on update restrict;

alter table GASTOS_MATERIAL add constraint FK_GASTOS_M_REFERENCE_MATERIAL foreign key (ID_MATERIAL)
      references MATERIAL (ID_MATERIAL) on delete restrict on update restrict;

alter table GASTOS_SERVICIO add constraint FK_GASTOS_S_REFERENCE_SERVICIO foreign key (IDSERVICIO)
      references SERVICIOS (IDSERVICIO) on delete restrict on update restrict;

alter table GASTOS_SERVICIO add constraint FK_GASTOS_S_REFERENCE_GASTOS foreign key (IDGASTO)
      references GASTOS (IDGASTO) on delete restrict on update restrict;

alter table INCIDENTES add constraint FK_INCIDENT_REFERENCE_REGISTRO foreign key (ID_OBRA)
      references REGISTRO_OBRAS (ID_OBRA) on delete restrict on update restrict;

alter table INCIDENTES add constraint FK_INCIDENT_REFERENCE_TRABAJAD foreign key (IDTRABAJADOR)
      references TRABAJADORES (IDTRABAJADOR) on delete restrict on update restrict;

alter table INFORME_MUESTREO add constraint FK_INFORME__REFERENCE_REGISTRO foreign key (ID_OBRA)
      references REGISTRO_OBRAS (ID_OBRA) on delete restrict on update restrict;

alter table INFORME_RESISTENCIAS add constraint FK_INFORME__REFERENCE_REGISTRO foreign key (ID_OBRA)
      references REGISTRO_OBRAS (ID_OBRA) on delete restrict on update restrict;

alter table INGRESOS add constraint FK_INGRESOS_REFERENCE_REGISTRO foreign key (ID_OBRA)
      references REGISTRO_OBRAS (ID_OBRA) on delete restrict on update restrict;

alter table MATERIAL_OBRA add constraint FK_MATERIAL_REFERENCE_MATERIAL foreign key (ID_MATERIAL)
      references MATERIAL (ID_MATERIAL) on delete restrict on update restrict;

alter table MATERIAL_OBRA add constraint FK_MATERIAL_REFERENCE_REGISTRO foreign key (ID_OBRA)
      references REGISTRO_OBRAS (ID_OBRA) on delete restrict on update restrict;

alter table MATERIAL_OBRA add constraint FK_MATERIAL_REFERENCE_TRABAJAD foreign key (IDTRABAJADOR)
      references TRABAJADORES (IDTRABAJADOR) on delete restrict on update restrict;

alter table PRESTACION_NOMINA_TRAB add constraint FK_PRESTACI_REFERENCE_PRESTACI foreign key (IDPRESTACION)
      references PRESTACIONES (IDPRESTACION) on delete restrict on update restrict;

alter table PRESTACION_NOMINA_TRAB add constraint FK_PRESTACI_REFERENCE_NOMINA foreign key (IDPAGO)
      references NOMINA (IDPAGO) on delete restrict on update restrict;

alter table PRESTACION_NOMINA_TRAB add constraint FK_PRESTACI_REFERENCE_TRABAJAD foreign key (IDTRABAJADOR)
      references TRABAJADORES (IDTRABAJADOR) on delete restrict on update restrict;

alter table PRESTAMOS add constraint FK_PRESTAMO_REFERENCE_TRABAJAD foreign key (IDTRABAJADOR)
      references TRABAJADORES (IDTRABAJADOR) on delete restrict on update restrict;

alter table PRESUPUESTO_OBRAS add constraint FK_PRESUPUE_REFERENCE_REGISTRO foreign key (ID_OBRA)
      references REGISTRO_OBRAS (ID_OBRA) on delete restrict on update restrict;

alter table REGISTRO_OBRAS add constraint FK_REGISTRO_REFERENCE_TRABAJAD foreign key (IDTRABAJADOR)
      references TRABAJADORES (IDTRABAJADOR) on delete restrict on update restrict;

alter table TRABAJADORES add constraint FK_TRABAJAD_REFERENCE_PUESTOS foreign key (IDPUESTOS)
      references PUESTOS (IDPUESTOS) on delete restrict on update restrict;

alter table VIAJE_INFORME_MUESTREO add constraint FK_VIAJE_IN_REFERENCE_VIAJES foreign key (IDVIAJE)
      references VIAJES (IDVIAJE) on delete restrict on update restrict;

alter table VIAJE_INFORME_MUESTREO add constraint FK_VIAJE_IN_REFERENCE_INFORME_ foreign key (ID_INFORME_MUESTREO)
      references INFORME_MUESTREO (ID_INFORME_MUESTREO) on delete restrict on update restrict;

