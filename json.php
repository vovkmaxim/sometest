<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>AJAX</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

    </head>
<body>
    <div id="error_subject"></div>
    Subject: <input type="text" size="10" id="subject" name="subject" /><br>
    <div id="error_message"></div>
    Message: <textarea type="textarea" size="10" id="message" name="message" rows="10" cols="50"/></textarea><br>
    <button onclick="SendRequest();">Send comment</button>
    <div id="loder"></div>
    <div id="result"></div>
    
   
    <script type="text/javascript" src="javascript/jquery.json-1.3.js"></script>
    <script type="text/javascript">
       function SendRequest(){
           document.getElementById('error_message').innerHTML = ""; 
           document.getElementById('error_subject').innerHTML = "";     
            var send_flag = true;
            var subject = document.getElementById('subject').value;
            
            if(subject.replace(/\s+/g, '').length) {          
            } else {
              document.getElementById('error_subject').innerHTML = "Please enter subject";      
              send_flag = false;
            } 
            
            var message = document.getElementById('message').value;
            
            if(message.replace(/\s+/g, '').length) {          
            } else {
              document.getElementById('error_message').innerHTML = "Please enter message";      
              send_flag = false;
            } 
            
           if(send_flag){
           var formData = {
                    "subject":subject,
                    "message":message
                };
                $.ajax({
                    url:'dataparser.php',
                    type:'POST',
                    dataType: 'json',
                    data:'jsonData=' + $.toJSON(formData),
                    beforeSend:function () {
                        document.getElementById('loder').innerHTML="send.....";                        
                    },
                    success: function(res) {
                         if (res.isSuccess === true) {
                             document.getElementById('loder').innerHTML=res.data.message;
                            }
                        document.getElementById('result').innerHTML=res.data.comment;
                       
                    }
                });
            }
        }
        
    </script>
    
</body>
</html>
    
