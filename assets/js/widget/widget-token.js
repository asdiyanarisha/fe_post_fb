function searchGroupFb(){
    var search = $("#searchgroupfb").val();
    var token = get_token;
    var list_fb = get_list_fb_group(search, token);
    var x;
    var list = list_fb['data'];
    for (x in list){
        console.log(list[x]);
    }
}

function get_list_fb_group(search, token){
    var list_fb = null;
    $.ajax({
        async: false,
        global: false,
        url: "https://graph.facebook.com/v2.10/search?",
        type: 'GET',
        data: "q='"+search+"'&type=group&access_token="+ token,
        success: function(data){
            list_fb = data;
        }
    });
    return list_fb;
}

function check(){
    var token = $("#token-fb").val();
    $.ajax({
        type: 'POST',
        url: "AccessTokenController/getToken",
        data: 'data='+ token + '&type=fb&id=1',
        success: function() {
            alert('YES');
        },
        error: function () {
            alert("error");
        }
    });
}
var get_token = function (){
    var token = null;
    $.ajax({
        async: false,
        global: false,
        type: 'GET',
        url: "AccessTokenController/getStatus",
        data : "type=fb",
        success: function(data) {
            response = jQuery.parseJSON(data);
            token = response[0]['key'];
        }
    });
    return token;
}();
function get_status(){
    $.ajax({
        type: 'GET',
        url: "AccessTokenController/getStatus",
        data : "type=fb",
        success: function(data) {
            response = jQuery.parseJSON(data);
            console.log(response[0]['status']);
            if (response[0]['status'] === '1'){
                console.log("TRUE");
                document.getElementById("status").innerHTML = "ACTIVATE";
            }       
        }
    });
    
}

get_status();

//var get_list_fb_group = function (search, token){
//    var list_fb = null;
//    $.ajax({
//        async: false,
//        global: false,
//        url: "https://graph.facebook.com/v2.10/search?",
//        type: 'GET',
//        data: "q='"+search+"'&type=group&access_token="+ token,
//        success: function(data){
//            list_fb = data;
//            console.log(list_fb);
//        }
//    });
//    return list_fb;
//}();