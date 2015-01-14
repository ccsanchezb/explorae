$(document).ready(function() {
    $('.btn').tooltip();
    $('.bxslider').bxSlider({auto: true});
    $(".iframe").colorbox({iframe:true, width:"90%", height:"60%"});

    $("body").on('click', '#add-quote', function(event) {
        event.preventDefault();
        window.location.replace('http://localhost/explorae/');
    });

    $('body').on('click', '.btn-delete', function(event) {
        event.preventDefault();
        $cnf = confirm("¿Realmente desea eliminar este registro?");

        if ($cnf == true) {

            $id = $(this).attr("data-id");
            $rol = $(this).attr("data-rol");

            switch($rol) {
                /* ========================== ADMIN ========================== */
                case 'user':
                    window.location.replace("/explorae/Admin/dlt_user/"+$id);
                    break;               

                /*case 'room':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_rooms.php?id="+$id);
                    break;    

                case 'social':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_events.php?id="+$id+"&evento="+$rol);
                    break;

                case 'empresarial':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_events.php?id="+$id+"&evento="+$rol);
                    break;            

                case 'tool':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_tools.php?id="+$id);
                    break;

                case 'artist':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_artists.php?id="+$id);
                    break;*/

                default:
                    alert("No se puede eliminar el registro.");
                    break;
            }               
        };
    });
});

function add_cart(id, field) {
    console.log(id);
    console.log(field);
    /*var prod_id = $('#add-cart').attr('prod-id');
    var prod_table = $('#add-cart').attr('prod-table');
    var prod_field = $('#add-cart').attr('prod-field');*/
    $.ajax({
        data: {id: id, field: field},
        url: 'http://localhost/explorae/cart/add_cart',
        type: 'POST',
        dataType: 'json',        
        success: function(data) {
            var json_x = $.parseJSON(data);
            alert(json_x);
            /*console.log(json_x);*/

            /*var nombre_field = json_x.nombre_field;*/
            /*var m = json_x.loqueseaquellegue;*/

            /*var str = '<p>'+m+'</p>';*/

            jquery(".respuesta").html(data);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("hay un error: "+XMLHttpRequest+", "+textStatus+", "+errorThrown);
            console.log("hay un error: "+XMLHttpRequest+", "+textStatus+", "+errorThrown);
        }
    })
}