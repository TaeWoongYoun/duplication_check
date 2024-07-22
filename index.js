$(document).ready(function() {
    $('#check_id').click(function(){
        var uid = $('#userid').val();
        if (uid.length < 4){
            alert("아이디 4자리 이상 입력");
            return false;
        }
        $.ajax({url: "check_id.php", data: {userid:uid},  method: "POST",
            success: function(data){
                if(data > 0) alert ("중복된 아이디입니다.")
                else{
                    alert("사용 가능한 아이디입니다.")
                    $("#idok").val(1);
                }
            }
        });
    });
    $("#userid").change(function(){
        $("#idok").val(0);
    });
    function ck(f){
        if (f.idok.value != 1){
            alert("아이디 중복확인을 먼저 해주세요.");
            return false;
        }
    }
    window.ck = ck;
})