function sendMessage() {

    var message = $("#messageBox").val();
    document.getElementById("chatBox").innerHTML =`
    <div class="flex justify-end">
                    <div class="flex my-2">
                        <div class=" bg-white min-w-20 px-2 py-2 mr-5 rounded-l-lg rounded-tr-lg">
                            ${message}
                        </div>
                        <div class="bg-blue-600 p-2 rounded-full">
                            <svg class="h-7 w-7" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/></svg>
                        </div>
                    </div>
                </div>
    ` + document.getElementById("chatBox").innerHTML ;
    
    // $.ajax({
    //     type: 'POST',    
    //     url:'http://127.0.0.1:5000/chat/hello',
        
    //     data:'data=hello',
    //     success: function(msg){
    //         alert('wow' + msg);
    //     }
    // });

    $.ajax({
        type: 'Get',
        url: 'http://127.0.0.1:5000/chat/hello',
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        data: { 
            'subsItem': subsItem, 
            'price_id': plan, 
           
        },
        success: function(msg){
            console.log(msg);
            if ($('#resumebtn').text() === 'Resume') {
                $('#resumebtn').text('Cancel').button("refresh");
            }else{
                $('#resumebtn').text('Resume').button("refresh");

            }
        }
    });

    // $.ajax({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     },
    //     url : "http://127.0.0.1:5000/chat/hello",
    //     data : {'token' : "token"},
    //     type : 'GET',
    //     dataType : 'json',
    //     success : function(result){

    //         console.log("===== " + result + " =====");

    //     }
    // });

    // $("#div").load( "http://127.0.0.1:5000/chat/hello", function( response, status, xhr ) {
    //     var responseAsObject = $.parseJSON(response);
    //     console.log(responseAsObject.ok);
    // });

    $("#messageBox").val('');

    // $.ajax({
    //     type: 'POST',    
    //     url:'http://nakolesah.ru/',
    //     data:'foo='+ bar+'&calibri='+ nolibri,
    //     success: function(msg){
    //         alert('wow' + msg);
    //     }
    // });
}
