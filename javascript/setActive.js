function ChangeActive (id) {
	/*alert ("In here"+id);*/
            var obj = document.getElementById (id);
            if (obj.setActive) {
                obj.setActive ();
            }
            else {
                if (obj.focus)
                    obj.focus ();
                else
                    alert ("Your browser does not support this set active function!");
            }
        }
function getWebpage(url)
{
	   /*alert ("In here"+url);*/
   $.ajax({

     type: "GET",
     url: url,
     data: "id=" + url, // appears as $_GET['id'] @ your backend side
     success: function(data) {
           // data is ur summary
          $('#left').html(data);
     }

   });

}
		
		
		
		
function moveToContentDiv(){
   alert ("In here");
    var scrollto = $('uniqueID').attr('href');
    $('html, body').animate({
            scrollTop: $(scrollto).offset().top
        }, 1500);
}
