// $(document).ready(function () {
//     var $inputClass = $('.inputClass');
//
//     $hilightableClass.on('focus', function () {
//         $(this).toggleClass('highlight');
//     });
//
//     $hilightableClass.on('blur', function () {
//         $(this).toggleClass('highlight');
//     });
//
//     $(':submit').click(function (e) {
//         $('.required').each(function () {
//             if ($(this).val().length == 0) {
//                 $(this).addClass('error');
//             }
//         });
//
//         $('.error').keyup(function () {
//             if ($(this).val().length > 0) {
//                 $(this).removeClass('error');
//             }
//         });
//
//         e.preventDefault();
//     });
// });


$(document).ready(function () {
    $(':submit').click(function (e) {
        $('.required').each(function () {
            if ($(this).val().length == 0) {
                $(this).addClass('error');
            }
        });

        $('.error').keyup(function () {
            if ($(this).val().length > 0) {
                $(this).removeClass('error');
            }
        });

        e.preventDefault();
    });
})