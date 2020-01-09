function input_validator(id){
    var err = 0;
    $('#'+id).find(':input').each(function(){
        var elm = $(this);
        var div = $(this).closest('div').html();
        var label = '<ul class="parsley-errors-list filled" id="parsley-id-4"><li class="parsley-required">This value is required.</li></ul>';
        
        if(elm.val().trim() === '')
        {
            if(elm.attr('required'))
            {
                // elm.closest('div').html(div + label);
                elm.addClass('parsley-error');
                err++;
            }
        }
    });
    if(err > 0)
        return response = {fail:true};
    else
        return response = {fail:false};
}

function percent_validation(id, value){
    if (value > 100) {
        /*swal('', 'max persentase tidak boleh lebih dari 100%', 'error');
        $('#' + id).val('');*/
    }
}

function loadingbar(id)
{
    var loading_img = '<img id="input_loading" src="'+base_url+'/assets/img/loader/facebook2.gif">'
    $('#'+id).show().html(loading_img);
}

function closeLoadingbar(id)
{
    $('#'+id).hide();
}

function ThausandSeperator(hidden, value, digit = 4) {
    var thausandSepCh = ",";
    var decimalSepCh = ".";
    var tempValue = "";
    var realValue = value + "";
    var devValue = "";
    if (digit == "")
        digit = 3;
    realValue = characterControl(realValue);
    var comma = realValue.indexOf(decimalSepCh);
    if (comma != -1) {
        tempValue = realValue.substr(0, comma);
        devValue = realValue.substr(comma);
        devValue = removeCharacter(devValue, thausandSepCh);
        devValue = removeCharacter(devValue, decimalSepCh);
        devValue = decimalSepCh + devValue;
        if (devValue.length > digit) {
            devValue = devValue.substr(0, digit + 1);
        }
    } else {
        tempValue = realValue;
    }
    tempValue = removeCharacter(tempValue, thausandSepCh);
    var result = "";
    var len = tempValue.length;
    while (len > 3) {
        result = thausandSepCh + tempValue.substr(len - 3, 3) + result;
        len -= 3;
    }
    result = tempValue.substr(0, len) + result;
    if (hidden != "") {
        $("#" + hidden).val(tempValue + devValue);
    }
    
    return result + devValue;
}

function characterControl(value) {
    var tempValue = "";
    var len = value.length;
    for (i = 0; i < len; i++) {
        var chr = value.substr(i, 1);
        if ((chr < '0' || chr > '9') && chr != '.' && chr != ',') {
            chr = '';
        }
        tempValue = tempValue + chr;
    }
    return tempValue;
}

function removeCharacter(v, ch) {
    var tempValue = v + "";
    var becontinue = true;
    while (becontinue == true) {
        var point = tempValue.indexOf(ch);
        if (point >= 0) {
            var myLen = tempValue.length;
            tempValue = tempValue.substr(0, point) + tempValue.substr(point + 1, myLen);
            becontinue = true;
        } else {
            becontinue = false;
        }
    }
    return tempValue;
}

function show_password(id, id_icon, id_div, show){
    var password = $('#' + id);
    var icon = $('#' + id_icon);
    var div = $('#' + id_div);

    if (show) {
        password.attr('type', 'text');
        icon.removeClass('fa-eye').addClass('fa-eye-slash');
        div.attr('onclick', 'show_password("'+ id +'", "'+ id_icon +'", "'+ id_div +'", false)');
    }
    else {
        password.attr('type', 'password');
        icon.removeClass('fa-eye-slash').addClass('fa-eye');
        div.attr('onclick', 'show_password("'+ id +'", "'+ id_icon +'", "'+ id_div +'", true)');
    }
}

function class_validation(id, input_id, class_code){
    var url = base_url + '/class-validation/' + id + '/' + class_code;
    $.get(url, function(res){
        if (res == 1) {
            $('#'+input_id).val('');
            swal('', 'class code sudah terdaftar', 'error');
        }
    });
}

function input_uppercase(id, val){
    var uppercase = val.toUpperCase();
    $('#'+id).val(uppercase);
}

function isNumber(e) {
    var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
    var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode == 45));
    return ret;
}

function master_delete(url){
    var url = url;
    
    swal({
        text: 'Anda yakin akan menghapus data ini?', 
        type: 'warning',
        showCancelButton: true
    }).then(result => {

          if (result.value) {
            $.ajax({
                url: url,
                type: 'get',
                success: function(res){
                    window.location.reload();
                },
                error: function(){
                    swal('', 'Internal Server Error!', 'error');
                }
            })
          }
    })
}

$.fn.serializeFormJSON = function () {

    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};