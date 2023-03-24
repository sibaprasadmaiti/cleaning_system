

function Display_msg(msg,msg_type)
{
    if(msg_type=="success"){
        toastr.success(
            msg,
            "Success !",
            {timeOut:5e3}
        )
    }else{
        
        toastr.error(
            msg,
            "Error !",
            {timeOut:5e3}
        )
    }
}
