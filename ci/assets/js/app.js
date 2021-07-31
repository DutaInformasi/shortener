$(document).ready(function(){

    $("#short-btn").click(

        function(){

            var url=$("#url").val();
        
            $('#short-btn').html("<span class=\"glyphicon glyphicon-refresh\" aria-hidden=\"true\"></span> loading..").attr("id", "short-loading");
        
            $("#loading").html('<div class="preloader"><img src="assets/img/loading.gif" /></div>'); // set the preloader
            
            $(".short-results").delay(0).animate({"opacity": "0"}, 700); // set the container transparent
			$(".short-results").empty(); // empty the container

            if(url!='')
            {
                $.ajax({
                    type: "POST",
                    url: "index.php/shorten/create",
                    data: "url="+url,
                    cache:false,
                    error: function(html) {
						$("#loading").html('<div class="info-message">We couldn\'t fetch any data, please try again.</div>');
						$('#short-loading').html("<span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span> Short").attr("id", "short-btn");
					},
                    //success: function(data){
                    success: function(html){
                        //$("#alias").html(data);
                        
                        //stats(1);
						$("#loading").empty(); // empty the preloader container
						$(".short-results").append(html); // apend the content to the container
						$(".short-results").delay(0).animate({"opacity": "1"}, 700); // set the container visible
		
						$('#short-loading').html("<span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span> Short").attr("id", "short-btn");
						
						
						//$('#captcha-register').html(captcha_image);
                    }
                });
            }

            return false;

        });


});