$(document).ready(function () {
    $('.dropdown-button-custom').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: true, // Does not change width of dropdown to that of the activator
        hover: false, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'right', // Displays dropdown with edge aligned to the left of button
        stopPropagation: true // Stops event propagation
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 120,
        max: new Date(),
        today: false,
        clear: false,
        close: 'Enviar',
        format: 'dd/mm/yyyy',
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
        showMonthsShort: undefined,
        showWeekdaysFull: undefined,
        labelMonthNext: 'Mes siguiente',
        labelMonthPrev: 'Mes anterior',
        labelMonthSelect: 'Seleccione el mes',
        labelYearSelect: 'Seleccione el año'
    });

    $('select').material_select();

    /* Fix text fields labels */
    Materialize.updateTextFields();
    $('#form_username').on('input', function (e) {
        var username = $(this).val();
        if (username.length > 9) {
            var cedula = username.substring(2);
            if (cedula > 80000000) {
                $(this).val('E-' + cedula);
            }
        }
    });

    $(".button-collapse").click(function () {
        $('#slide-out').toggleClass("hide-on-med-and-down");
        $('#slide-out').css('transform', "translateX(0)");
    });

    $("#radio_discapno").click(function(){
        $("#form_discap").prop('disabled', true);
    });

    $("#radio_discapsi").click(function(){
        $("#form_discap").prop('disabled', false);
    });

    $("#radio_penNo").click(function(){
        $("#form_pension").prop('disabled', true);
    });

    $("#radio_penSi").click(function(){
        $("#form_pension").prop('disabled', false);
    });


    //Configuration for field validation
    var options = {
        translation: {
            '0': {pattern: /\d/},
            '1': {pattern: /[1-9]/},
            '9': {pattern: /\d/, optional: true},
            '#': {pattern: /\d/, recursive: true},
            'C': {pattern: /V|v|E|e/, fallback: 'V'},
            'F': {pattern: /[\dA-Za-z]/}
        }
    };


    $('#form_username').mask('C-19999999', options);
    $('#form_cell').mask('(0000)-0000000', options);
    $('#form_hab').mask('(0000)-0000000', options);
    $('#form_ofic').mask('(0000)-0000000', options);
//    // Evitar los clicks repetidos.
//    $("a.btn").on('click', function () {
//        if (!$(this).hasClass('button-clicked')) {
//            $(this).addClass('button-clicked');
//            return true;
//        }
//        return false;
//    });


     // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
     //Modal Registro
});

$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });