/**
 * Created by Администратор on 05.05.16.
 */

$(document).ready(function(){
    /*отправка команды а устройство*/
    $('.irCommand').click(function(){

        var command = $(this).data('command')
        $.post(
            'http://remcon/user/sendcommand',
            {
                command : command
            },
            onAjaxSuccess
        );
    });

    function onAjaxSuccess(data){
        if (data == 'error'){
            alert("Пустой массив.")
        }
        else {
            alert(data)
        }
    }


})


