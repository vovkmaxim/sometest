<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>AJAX</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

    </head>
<body>
    Subject: <input type="text" size="10" id="subject" name="subject" /><br>
    Message: <textarea type="textarea" size="10" id="message" name="message" rows="10" cols="50"/></textarea><br>
    <button onclick="SendRequest();">Send comment</button>
    <div id="loder"></div>
    <div id="result"></div>
    
    <script type="text/javascript" src="jquery-1.3.1.min.js"></script>
    <script type="text/javascript" src="jquery.json-1.3.js"></script>
    <script type="text/javascript">
       function SendRequest(){
           var formData = {
                    "subject":$("#subject").val(),
                    "message":$("#message").val()
                };
                $.ajax({
                    url:'dataparser.php',
                    type:'POST',
                    data:'jsonData=' + $.toJSON(formData),
                    beforeSend:function () {
                        document.getElementById('loder').innerHTML="send.....";                        
                    },
                    success: function(res) {
                        //document.getElementById('loder').innerHTML="";
                        document.getElementById('result').innerHTML=res;
                        //alert(res);
                    }
                });
        }
        
    </script>
    
</body>
</html>
    