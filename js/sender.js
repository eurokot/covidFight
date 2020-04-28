function send_post(url, name, data = '') {
    var form = '';
    if(data) {
        $.each(data.split('.'), function(k, v) {
            form += '&' + v + '=' + $('#' + v).val();
        });
    }

    $.ajax({
        type: 'POST',
        url: '/' + url,
        data: name + '_f=1' + form,
        cache: false,
        success: function(result) {
            obj = jQuery.parseJSON(result);
            if (obj.go){
                go(obj.go);
            }
            else{
                alert(obj.message);
            }
        }
    }); 
}

function move() {
    $('#display').load('update');
}

function buy(url, name, data = '') {
    var form = '';
    if(data) {
        $.each(data.split('.'), function(k, v) {
            form += '&' + v + '=' + $('#' + v).val();
        });
    }

    $.ajax({
        type: 'POST',
        url: '/' + url,
        data: name + '_f=1' + form,
        cache: false,
        success: function(result) {
            if(result.length == 35){
                alert("Недостаточно бактерий");
            }
            else if(result.length == 28){
                alert("Вы уже здоровы!");
            }
            else{
                $('#display_magazine').load('update_magazine');
            }
        }
    }); 
}

function go_mgz(url, name, data = '') {
    var form = '';
    if(data) {
        $.each(data.split('.'), function(k, v) {
            form += '&' + v + '=' + $('#' + v).val();
        });
    }

    $.ajax({
        type: 'POST',
        url: '/' + url,
        data: name + '_f=1' + form,
        cache: false,
        success: function(result) {
            $('#swup').load('magazine');
        }
    }); 
}

function go(url) {
    window.location.href = '/' + url;
}