/**
 * Created by Арсений on 31.03.2018.
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});

var getHtmlResponse = function (url, data, callback, callback_error) {
    $.ajax({
        method: "POST",
        url: url,
        data: data,
        success: function (answer) {
            callback(answer)
        },
        error: function (answer) {
            return false;
        }
    });
}