<html>

    <head>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="{{ asset('css/chat.css') }}" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>

    <body>

        <div>
            <div class="container text-center">
                <div class="row">
                    <div class="round hollow text-center">
                        <a href="#" id="addClass"><span class="glyphicon glyphicon-comment"></span> Open in chat </a>
                    </div>
                </div>
            </div>

            <div class="popup-box chat-popup" id="qnimate">
                <div class="popup-head">
                    <div class="popup-head-left pull-left"><img src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" alt="iamgurdeeposahan"> Dangote Group</div>
                    <div class="popup-head-right pull-right">
                        <button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
                    </div>
                </div>
            <div class="popup-messages" id="popup_box">
                
            <div class="direct-chat-messages" id="new_chat_form" >
                
                <div class="chat-box-single-line">
                    <abbr class="timestamp">Continue Previous Chat</abbr>
                </div>

                <form onsubmit="event.preventDefault; continue_chat()">
                    <div>
                        <div style="width: 70%; float: left; padding-right: 10px;" >
                            <div class="form-group">
                                <label for="ccf_chat_id">Chat ID</label>
                                <input type="text" class="form-control" id="ccf_chat_id" aria-describedby="emailHelp" placeholder="Enter chat ID">
                                <small id="error_ccf_chat_id" class="text-danger"></small>
                            </div>
                        </div>

                        <div style="width: 25%; float: left;">
                            <button type="submit" class="btn btn-primary" id="send_message_btn" style="margin-top: 26px;">Start Chat</button>
                        </div>
                    </div>
                    
                    
                </form>
                    
                <div class="chat-box-single-line" style="clear: left">
                    <abbr class="timestamp">Start New Chat</abbr>
                </div>

                <form onsubmit="event.preventDefault; create_message()">
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" aria-describedby="emailHelp" placeholder="Enter full name">
                        <small id="error_mcb_customer_full_name" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="error_mcb_customer_email" class="text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" aria-describedby="emailHelp" placeholder="Enter phone number">
                        <small id="error_mcb_customer_phone_number" class="text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter address">
                        <small id="error_mcb_customer_address" class="text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label for="topic">Topic</label>
                        <input type="text" class="form-control" id="topic" placeholder="Enter topic">
                        <small id="error_mcb_chat_topic" class="text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" placeholder="Enter message"></textarea>
                        <small id="error_mcb_message" class="text-danger"></small>
                    </div>
                    <button type="submit" class="btn btn-primary" id="send_message_btn">Send</button>
                </form>
                    
            </div>
                
            <div class="direct-chat-messages" style="display: none;" id="chat_msg">

                <div id="chat_timeline" >

                </div>
                <br/>
                <br/>
                    
            </div>
            
            </div>
                <div class="popup-messages-footer" id="reply_box" style="display: none;">
                    <textarea id="reply_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
                    <input id="chat_id" type="hidden" value="" />
                    <button class="btn btn-primary" style="width: 100%;" onclick="create_reply()">Send</button>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

        <script>
              $(function(){
                $("#addClass").click(function () {
                    $('#qnimate').addClass('popup-box-on');
                });
                        
                $("#removeClass").click(function () {
                    $('#qnimate').removeClass('popup-box-on');
                });
            })





            const base_url = "{{ url('/') }}";

            jQuery(document).ready(function(e){ //when the page as completed loading start getting restaurants

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });

            })


            function continue_chat(){
                // disable the submit button so that user can not submite form more than once
                $("#create_coordinator_btn").attr("disabled", true);

                // clear all the error in the DOM
                $('#error_ccf_chat_id').text('');

                // collect the data in the form
                var form = new FormData();

                form.append("chat_id", $('#ccf_chat_id').val());

                // use jquery ajax to make request to the server
                $.ajax({
                "url": base_url + "/chat/continue",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Accept": "application/json",
                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form,
                "dataType": "JSON",
                error: function(response_errors) {

                    console.log(response_errors);

                    // check if the error is form data validation error
                    if(response_errors.responseJSON.message === "The given data was invalid.") {
                    
                    // get all the form validation errors
                    const errors = response_errors.responseJSON.errors;

                    // loop the all the validation errors ans show then on the form
                    for (var key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            // show the error in the DOM
                            $("#error_ccf_"+key).text(errors[key])
                        }
                    }

                    }
                    
                }
                })
                .done(function (response) {

                    if(response == null) {
                        return
                    }


                    $("#send_message_btn").attr("disabled", true);
                    $("#new_chat_form").css("display", "none");
                    $("#chat_msg").css("display", "block");
                    $("#reply_box").css("display", "block");

                    $("#chat_id").val(response);
                    get_chat_replies(response);

                    // enable the submite button
                    // disable the submit button so that user can not submite form more than once
                    $("#send_message_btn").attr("disabled", false);
                    
                })
            }

            

            function create_message() {

                // disable the submit button so that user can not submite form more than once
                $("#create_coordinator_btn").attr("disabled", true);

                // clear all the error in the DOM
                $('#error_mcb_full_name').text('');
                $('#error_mcb_email').text('');
                $('#error_mcb_phone_number').text('');
                $('#error_mcb_address').text('');
                $('#error_mcb_topic').text('');
                $('#error_mcb_message').text('');

                // collect the data in the form
                var form = new FormData();
                
                form.append("customer_email", $('#email').val());
                form.append("customer_full_name", $('#full_name').val());
                form.append("customer_phone_number", $('#phone_number').val());
                form.append("manufacturer_id", 1);
                form.append("customer_address", $('#address').val());
                form.append("chat_topic", $('#topic').val());
                form.append("message", $('#message').val());

                // use jquery ajax to make request to the server
                $.ajax({
                "url": base_url + "/chat/new_chat",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Accept": "application/json",
                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form,
                "dataType": "JSON",
                error: function(response_errors) {

                    console.log(response_errors);

                    // check if the error is form data validation error
                    if(response_errors.responseJSON.message === "The given data was invalid.") {
                    
                    // get all the form validation errors
                    const errors = response_errors.responseJSON.errors;

                    // loop the all the validation errors ans show then on the form
                    for (var key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            // show the error in the DOM
                            $("#error_mcb_"+key).text(errors[key])
                        }
                    }

                    }
                    
                }
                })
                .done(function (response) {

                    if(response == null) {
                        return
                    }


                    $("#send_message_btn").attr("disabled", true);
                    $("#new_chat_form").css("display", "none");
                    $("#chat_msg").css("display", "block");
                    $("#reply_box").css("display", "block");

                    $("#chat_id").val(response);
                    get_chat_replies(response)

                    // enable the submite button
                    // disable the submit button so that user can not submite form more than once
                    $("#send_message_btn").attr("disabled", false);

                })
            }



            function create_reply() {

                // disable the submit button so that user can not submite form more than once
                $("#create_coordinator_btn").attr("disabled", true);

                // clear all the error in the DOM
                $('#error_mcb_message').text('');

                // collect the data in the form
                var form = new FormData();

                form.append("message", $('#reply_message').val());
                form.append("chat_id", $('#chat_id').val());

                // use jquery ajax to make request to the server
                $.ajax({
                "url": base_url + "/chat/reply",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Accept": "application/json",
                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form,
                "dataType": "JSON",
                error: function(response_errors) {

                    console.log(response_errors);

                    // check if the error is form data validation error
                    if(response_errors.responseJSON.message === "The given data was invalid.") {
                    
                    // get all the form validation errors
                    const errors = response_errors.responseJSON.errors;

                    // loop the all the validation errors ans show then on the form
                    for (var key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            // show the error in the DOM
                            $("#error_mcb_"+key).text(errors[key])
                        }
                    }

                    }
                    
                }
                })
                .done(function (response) {

                    $('#reply_message').val('')

                    $("#send_message_btn").attr("disabled", true);

                    $("#new_chat_form").css("display", "none");
                    $("#chat_timeline").css("display", "block");
                    $("#reply_box").css("display", "block");

                    // loop through the returnes response containtaining the coordinators
                    for (var i = 0; i < response.length; i++) {

                        let chatHTML = `<div class="direct-chat-msg doted-border">

                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">`+ response[i]['replyer'] +`</span>
                            </div>

                            <!-- /.direct-chat-info -->
                            <img alt="message user image" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->

                            <div class="direct-chat-text">
                                `+ response[i]['message'] +`
                            </div>

                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-timestamp pull-right">`+ response[i]['created_at'] +`</span>
                            </div>

                        </div>`

                        $("#chat_timeline").prepend(chatHTML);

                    }

                    // enable the submite button
                    // disable the submit button so that user can not submite form more than once
                    $("#send_message_btn").attr("disabled", false);
                    
                })
            }


            function chat_replies(char_id) {

                $.ajax({
                url: base_url + "/chat/replies",
                type: "POST",
                data: {chat_id: char_id},
                error: function(response_errors) {
                    console.log(response_errors);
                }
                })
                .done(function (response) {

                    if(response == null) {
                        return;
                    }

                    $("#chat_timeline").empty();

                    // loop through the returnes response containtaining the coordinators
                    for (var i = 0; i < response.length; i++) {

                        let chatHTML = `<div class="direct-chat-msg doted-border">

                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">`+ response[i]['replyer'] +`</span>
                            </div>

                            <!-- /.direct-chat-info -->
                            <img alt="message user image" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->

                            <div class="direct-chat-text">
                                `+ response[i]['message'] +`
                            </div>

                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-timestamp pull-right">`+ response[i]['created_at'] +`</span>
                            </div>

                        </div>`

                        $("#chat_timeline").prepend(chatHTML);

                    }
                    
                });
            }

            function get_chat_replies(chat_id) {
                window.setInterval(function(){
                    chat_replies(chat_id)
                    $("#popup_box").animate({ scrollTop: $('#chat_timeline').prop("scrollHeight")}, 1000);
                }, 3000)
            }

        </script>
    </body>

</html>



<!------ Include the above in your HEAD tag ---------->

