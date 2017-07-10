// ------------------------------------------java script-------------------------------------------------//

//---------------------------------------------PAGE1----------------------------------------------------//
    		function showform1() 
    		{
        		document.getElementById('signup').style.display = "block";
        		document.getElementById('signin').style.display = "none";
                
            }
    		function showform2() 
    		{
        		document.getElementById('signin').style.display = "block";
        		document.getElementById('signup').style.display = "none";
    		}

    function addForm() {
        // event.preventDefault();
        var count = parseInt(document.getElementById("class_type").value);
        //var form = document.createElement("div");
        //alert(count);
        //form.innerHTML = document.getElementById('show2').innerHTML;
        //console.log(form.innerHTML);
        document.getElementById('show1').style.display = "none";
        document.getElementById('show2').style.display = "block";
        var temp = document.getElementById('m1').innerHTML;
        //var par = document.getElementById('show2').parentElement;
        var temp2 = "";
        for (var i = 0; i < count; i++) {
            //par.appendChild(form);
            temp2=temp2+temp;
        }
        temp2 = temp2 + '<button class="btn waves-effect waves-light" type="submit" name="action" style="width: 250px; height: 50px; margin-left: 200px;">Submit<i class="material-icons right">send</i></button>';
        temp3 = document.getElementById('m1');
        temp3.innerHTML = temp2;
        //console.log(par);
    }
           
//---------------------------------------------PAGE2----------------------------------------------------//
    $(document).ready(function(){
      $('.slider').slider({full_width: true});
        var temp = document.getElementById("button12");
        if(temp!=null){
        temp.addEventListener("click", addForm);
    }
});
    
$(document).ready(function() {
    $('select').material_select();
});
    
document.getElementById("logout").addEventListener("click", function(event){
    event.stopPropagation();
    document.getElementById("gb").style.display="block";
});
            
// Close the dropdown if the user clicks outside of it
window.addEventListener("load", function() 
{
    window.onclick = function(event)
    {
        var element = document.getElementById("gb");
        if (event.target != element)
        {
            element.style.display = "none"; 
        }
    }
});


  // Initialize collapse button
   $(".button-collapse").sideNav();
  //Initialize collapsible (uncomment the line below if you use the dropdown variation)
   $('.collapsible').collapsible();