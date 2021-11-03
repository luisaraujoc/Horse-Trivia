// function perguntas() {
//     var page = "../room.php";
//     $.ajax({
//             type: 'POST',
//             dataType: 'html',
//             url: page,
//             beforeSend: function() {
//                 $('$dados').html("loading...");
//             },
//             data: (tananan: tananan),
//             success: function(msg) {
//                 $('$dados').html(msg);
//             }
//         }
//     });
// }





// Caso acerte 
function answer__right() {
    alert('Vc acertou');
    the_timer = setInterval(do_timer, 5);
    var the_timer, fim = " . $fim . ",
        x_position_l = " . $x_position_l . ",
        the_image;

    function do_timer() {

        the_image = document.getElementById('stones_img');
        x_position_l = x_position_l + 1;
        if (x_position_l == fim) {
            clearInterval(the_timer);
        }
        the_image.style.left = x_position_l + 'px';
        console.log(x_position_l);
    };
}
// Caso erre 
function answer__missed() {
    alert('Vc errou');
    the_timer = setInterval(do_timer, 5);
    var the_timer, fim = " . $fim . ",
        x_position_l = " . $x_position_l . ",
        the_image;

    function do_timer() {

        the_image = document.getElementById('stones_img');
        x_position_l = x_position_l + 1;
        if (x_position_l >= fim) {
            clearInterval(the_timer);

        }
        the_image.style.left = x_position_l + 'px';
        console.log(x_position_l);
    };
}