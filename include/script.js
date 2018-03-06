function postSetH(){
    $.post( "../horoscope/sethoroscope.php", function( data ) {
        $("body").append(data);
    });           
}


function postGetH(){
    $.post( "../horoscope/gethoroscope.php", function( data1 ) {
        $("#writeHere").append(data1);
    });           
}