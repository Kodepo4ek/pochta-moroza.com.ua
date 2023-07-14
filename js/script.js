
         var gramota2 = document.getElementById ('gramota');
          var Old3 = document.getElementByName ('Old');
         var podarok4 =document.getElementByName ('podarok');

                var New_god1 = document.getElementById('New_god');
                var batton = document.getElementById("knopka");
                var modal = document.getElementById('myModal');

                batton.onclick = function (){
                   if  (New_god1.checked){
                     modal.style.display="block";
                   }
                    else if (.checked){
                     modal.style.display="block";
                    }
                    else {
                        alert("Не выбран");
                    }
                }
                    window.onclick = function(event){
                        if(event.target == modal){
                            modal.style.display="none";
                        }
                    }
