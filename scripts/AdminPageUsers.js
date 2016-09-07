$(document).ready(function(){
	$(".ulink").on("click", function(e){
	  e.preventDefault();
	  var uid = $(this).attr('href');
	  $.ajax({
			url: "scripts/deleteUser.php",
			type: "POST",
			data: {'uid': uid },
			success:function(data){
				if(data == "successful"){
				
					$('#dbresult').text("User Deleted Succssfully, Pls wait refershing data");
					setTimeout(location.reload.bind(location), 10000);

					
				}else{
					$('#dbresult').text("DB Error. Pls contact site admin");
					
				}	
			},
			  error: function(xhr,desc,err){
				  console.log("failed with error : " + xhr + "\n"+err);
			  }
			
		})//Ajax
		
	});
});
