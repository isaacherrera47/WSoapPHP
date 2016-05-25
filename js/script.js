/**
 * Created by isaac.herrera on 5/23/2016.
 */
$(document).ready(function () {
    $(".button-collapse").sideNav();
    $('select').material_select();

    // $('#enviaDatos').click(function (e) {
    //     data = $('#formOperacion').serialize();
    //     console.log(data)
    //     $.ajax({
    //         data: data,
    //         type: 'POST',
    //         url: 'ajaxCalculadora.php',
    //         success: function (data) {
    //             console.log('El resultado es '+data);
    //         }
    //     })
    // });
});