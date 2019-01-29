<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tau Control</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/components.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/custom.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->
    <!--plugin styles Datatables-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/scroller.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/colReorder.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/dataTables.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/responsive.dataTables.min.css" />

    <link type="text/css" rel="stylesheet" href="/css/dashboard/tables.css" />
    <!--Radio Checkbox styles-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrap-switch.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/switchery.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/radiobox.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/checkbox.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/dashboard/radio_checkbox.css" />
    <!--File input-->
    <link type="text/css" rel="stylesheet" href="/css/dashboard/jquery.inputlimiter.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/chosen.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/jquery.tagsinput.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/daterangepicker.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrap-timepicker.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/bootstrap-switch.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/jasny-bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/fileinput.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/multi-select.css"/>
    <link type="text/css" rel="stylesheet" href="/css/dashboard/form_elements.css"/>
</head>

<body class="body">
<div id="wrap">
    @include('dashboard.partials.topbar')
    <div class="wrapper">
        @include('dashboard.partials.sidebar')
        <div id="content" class="bg-container">
            @yield('content')
        </div>
    </div>
</div>
<!-- global scripts-->
<script type="text/javascript" src="/js/dashboard/components.js"></script>
<script type="text/javascript" src="/js/dashboard/custom.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<!-- end of global scripts-->
<!--File Input-->
<script type="text/javascript" src="/js/dashboard/jquery.uniform.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.inputlimiter.js"></script>
<script type="text/javascript" src="/js/dashboard/chosen.jquery.js"></script>
<script type="text/javascript" src="/js/dashboard/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.tagsinput.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.validVal.min.js"></script>
<script type="text/javascript" src="/js/dashboard/moment.min.js"></script>
<script type="text/javascript" src="/js/dashboard/daterangepicker.js"></script>
<script type="text/javascript" src="/js/dashboard/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/js/dashboard/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="/js/dashboard/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.autosize.min.js"></script>
<script type="text/javascript" src="/js/dashboard/inputmask.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.inputmask.js"></script>
<script type="text/javascript" src="/js/dashboard/inputmask.date.extensions.js"></script>
<script type="text/javascript" src="/js/dashboard/inputmask.extensions.js"></script>
<script type="text/javascript" src="/js/dashboard/fileinput.min.js"></script>
<script type="text/javascript" src="/js/dashboard/theme.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.multi-select.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.min.js"></script>
<!--end of plugin scripts-->
<script type="text/javascript" src="/js/dashboard/form.js"></script>
<script type="text/javascript" src="/js/dashboard/form_elements.js"></script>
<!--plugin scripts Datatables-->
<script type="text/javascript" src="/js/dashboard/select2.js"></script>
<script type="text/javascript" src="/js/dashboard/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.tableTools.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.bootstrap.min.js"></script>
{{--<script type="text/javascript" src="/js/dashboard/dataTables.buttons.min.js"></script>--}}
<script type="text/javascript" src="/js/dashboard/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="/js/dashboard/dataTables.rowReorder.min.js"></script>
{{--<script type="text/javascript" src="/js/dashboard/buttons.colVis.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/dashboard/buttons.html5.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/dashboard/buttons.bootstrap.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/dashboard/buttons.print.min.js"></script>--}}
<script type="text/javascript" src="/js/dashboard/dataTables.scroller.min.js"></script>
<!-- Radio Checkbox scripts-->
<script type="text/javascript" src="/js/dashboard/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="/js/dashboard/switchery.min.js"></script>
<script type="text/javascript" src="/js/dashboard/radio_checkbox.js"></script>
<script type="text/javascript" src="/js/dashboard/datatable.js"></script>
<!-- end of global scripts-->
<script>
    $("#project_files").fileinput({
        overwriteInitial: false,
        uploadAsync: false,
        {{--uploadUrl: '{{ route('dashboard.projects.documents.upload', $project->id) }}',--}}
        showUpload: false,
        showRemove: false,
        showCaption: false,
        initialPreviewAsData: true,
        fileSingle: 'archivo',
        filePlural: 'archivos',
        browseLabel: 'Examinar &hellip;',
        removeLabel: 'Quitar',
        removeTitle: 'Quitar archivos seleccionados',
        cancelLabel: 'Cancelar',
        cancelTitle: 'Abortar la subida en curso',
        uploadLabel: 'Subir archivo',
        uploadTitle: 'Subir archivos seleccionados',
        msgNo: 'No',
        msgNoFilesSelected: 'No hay archivos seleccionados',
        msgCancelled: 'Cancelado',
        msgPlaceholder: 'Seleccionar {files}...',
        msgZoomModalHeading: 'Vista previa',
        msgFileRequired: 'Debes seleccionar un archivo para subir.',
        msgSizeTooSmall: 'El archivo "{name}" (<b>{size} KB</b>) es demasiado pequeño y debe ser mayor de <b>{minSize} KB</b>.',
        msgSizeTooLarge: 'El archivo "{name}" (<b>{size} KB</b>) excede el tamaño máximo permitido de <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Debe seleccionar al menos <b>{n}</b> {files} a cargar.',
        msgFilesTooMany: 'El número de archivos seleccionados a cargar <b>({n})</b> excede el límite máximo permitido de <b>{m}</b>.',
        msgFileNotFound: 'Archivo "{name}" no encontrado.',
        msgFileSecured: 'No es posible acceder al archivo "{name}" porque está siendo usado por otra aplicación o no tiene permisos de lectura.',
        msgFileNotReadable: 'No es posible acceder al archivo "{name}".',
        msgFilePreviewAborted: 'Previsualización del archivo "{name}" cancelada.',
        msgFilePreviewError: 'Ocurrió un error mientras se leía el archivo "{name}".',
        msgInvalidFileName: 'Caracteres no válidos o no soportados en el nombre del archivo "{name}".',
        msgInvalidFileType: 'Tipo de archivo no válido para "{name}". Sólo se permiten archivos de tipo "{types}".',
        msgInvalidFileExtension: 'Extensión de archivo no válida para "{name}". Sólo se permiten archivos "{extensions}".',
        msgFileTypes: {
            'image': 'image',
            'html': 'HTML',
            'text': 'text',
            'video': 'video',
            'audio': 'audio',
            'flash': 'flash',
            'pdf': 'PDF',
            'object': 'object'
        },
        msgUploadAborted: 'La carga de archivos se ha cancelado',
        msgUploadThreshold: 'Procesando...',
        msgUploadBegin: 'Inicializando...',
        msgUploadEnd: 'Hecho',
        msgUploadEmpty: 'No existen datos válidos para el envío.',
        msgUploadError: 'Error',
        msgValidationError: 'Error de validación',
        msgLoading: 'Subiendo archivo {index} de {files} &hellip;',
        msgProgress: 'Subiendo archivo {index} de {files} - {name} - {percent}% completado.',
        msgSelected: '{n} {files} seleccionado(s)',
        msgFoldersNotAllowed: 'Arrastre y suelte únicamente archivos. Omitida(s) {n} carpeta(s).',
        msgImageWidthSmall: 'El ancho de la imagen "{name}" debe ser de al menos {size} px.',
        msgImageHeightSmall: 'La altura de la imagen "{name}" debe ser de al menos {size} px.',
        msgImageWidthLarge: 'El ancho de la imagen "{name}" no puede exceder de {size} px.',
        msgImageHeightLarge: 'La altura de la imagen "{name}" no puede exceder de {size} px.',
        msgImageResizeError: 'No se pudieron obtener las dimensiones de la imagen para cambiar el tamaño.',
        msgImageResizeException: 'Error al cambiar el tamaño de la imagen.<pre>{errors}</pre>',
        msgAjaxError: 'Algo ha ido mal con la operación {operation}. Por favor, inténtelo de nuevo mas tarde.',
        msgAjaxProgressError: 'La operación {operation} ha fallado',
        ajaxOperations: {
            deleteThumb: 'Archivo borrado',
            uploadThumb: 'Archivo subido',
            uploadBatch: 'Datos subidos en lote',
            uploadExtra: 'Datos del formulario subidos '
        },
        dropZoneTitle: 'Arrastre y suelte aquí los archivos &hellip;',
        dropZoneClickTitle: '<br>(o haga clic para seleccionar {files})',
        fileActionSettings: {
            showRemove: true,
            showUpload: false,
            showDownload: false,
            showZoom: false,
            showDrag: false,
            removeTitle: 'Eliminar archivo',
            uploadTitle: 'Subir archivo',
            uploadRetryTitle: 'Reintentar subir',
            downloadTitle: 'Descargar archivo',
            zoomTitle: 'Ver detalles',
            dragTitle: 'Mover / Reordenar',
            indicatorNewTitle: 'No subido todavía',
            indicatorSuccessTitle: 'Subido',
            indicatorErrorTitle: 'Error al subir',
            indicatorLoadingTitle: 'Subiendo...'
        },
        previewZoomButtonTitles: {
            prev: 'Anterior',
            next: 'Siguiente',
            toggleheader: 'Mostrar encabezado',
            fullscreen: 'Pantalla completa',
            borderless: 'Pantalla completa',
            close: 'Cerrar vista detallada'
        },
        initialPreview: [
            @foreach($project->documents as $document)
                "{{ asset('storage/'.$document->file) }}",
            @endforeach
        ],
        initialPreviewConfig: [
                @foreach($project->documents as $document)
            {caption: "{{ $document->file }}", width: "120px", url: "{{ route('dashboard.projects.documents.remove', $document->id) }}", key: "{{ $document->id }}"},
            @endforeach
        ],
        allowedFileExtensions: ['jpg', 'png', 'gif', 'jpeg','pdf', 'doc', 'docx', 'xls', 'xlsx']
    });
</script>
</body>
</html>
