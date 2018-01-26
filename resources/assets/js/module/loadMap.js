var Regiones = (function () {
    var Regiones = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': "http://polytex.loc/api/regiones",
        'dataType': "json",
        'success': function (data) {
            Regiones = data;
        }
    });
    return Regiones;
})(); 


jQuery(document).ready(function () {

    var iRegion = 0;
    var htmlRegion = '<option value="sin-region">Seleccione región</option><option value="sin-region">--</option>';
    var htmlComunas = '<option value="sin-region">Seleccione comuna</option><option value="sin-region">--</option>';

    jQuery.each(Regiones, function () {
        htmlRegion = htmlRegion + '<option value="' + Regiones[iRegion].id + '">' + Regiones[iRegion].nombre + '</option>';
        iRegion++;
    });

    jQuery('#regiones').html(htmlRegion);
    jQuery('#comunas').html(htmlComunas);

    jQuery('#regiones').change(function () {
        var iRegiones = 0;
        var valorRegion = jQuery(this).val();
        var htmlComuna = '<option value="sin-comuna">Seleccione comuna</option><option value="sin-comuna">--</option>';
        jQuery.each(Regiones, function () {

            var iComunas = 0;
            var arreglo = [];
            if (Regiones[iRegiones].id == valorRegion) {
            console.log(Regiones[iRegiones].communes);
            jQuery.each(Regiones[iRegiones].communes, function () {
                console.log(Regiones[iRegiones].communes[iComunas].nombre);

          htmlComuna = htmlComuna + '<option value="' + Regiones[iRegiones].communes[iComunas].id + '">' +Regiones[iRegiones].communes[iComunas].nombre+ '</option>';
           iComunas++;

   });
        

            }
            iRegiones++;
        });
        jQuery('#comunas').html(htmlComuna);

    });
    jQuery('#comunas').change(function () {
        if (jQuery(this).val() == 'sin-region') {
            alert('selecciones Región');
        } else if (jQuery(this).val() == 'sin-comuna') {
            alert('selecciones Comuna');
        }
    });
    jQuery('#regiones').change(function () {
        if (jQuery(this).val() == 'sin-region') {
            alert('selecciones Región');
        }
    });

});
