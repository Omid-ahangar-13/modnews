var nc_child = document.querySelectorAll(".nc-child");
var discu = document.getElementById("discu");
var visited = document.getElementById("visited");
var span = document.getElementById("span");


nc_child.forEach(function(nc_child_items){
    nc_child_items.addEventListener("click" , function(){
        nc_child.forEach(function(nc_child_items){
            nc_child_items.classList.remove("active"); 
        })
        nc_child_items.classList.add("active");
    })
})
var best = document.getElementById("best");
var news = document.getElementById("news");
var span1 = document.getElementById("span1");
var text_best = document.getElementById("text_best");
var text_news = document.getElementById("text_news");
function bestshow(){
    news.style.color = "rgba(0, 0, 0, 0.336)";
    best.style.color = "black";
    span1.style.right = "0px";
    text_news.style.display = "none";
    text_best.style.display = "block";
}
function newsshow(){
    best.style.color = "rgba(0, 0, 0, 0.336)";
    news.style.color = "black";
    span1.style.right = "93px";
    text_news.style.display = "block";
    text_best.style.display = "none";
    
}


var text_visited = document.getElementById("text_visited");
var text_discu = document.getElementById("text_discu");
function discushow(){
    discu.style.color = "black";
    visited.style.color = "rgba(0, 0, 0, 0.336)";
    span.style.right = "89px";
    text_visited.style.display = "none";
    text_discu.style.display = "block";
}
function visitshow(){
    discu.style.color = "rgba(0, 0, 0, 0.336)";
    visited.style.color = "black";
    span.style.right = "0px";
    text_visited.style.display = "block";
    text_discu.style.display = "none";

}



// slider slidbar
var slider_1 = document.querySelector("#slider_1");
var slid = slider_1.getElementsByClassName('text_child_caption');
var dots = document.getElementsByClassName("dot_1");
var dot_1 = document.querySelector("#dot_1");
var dot_2 = document.querySelector("#dot_2");
var y = 0 , i=0;

    function disnone(){
        for(i = 0 ; i < slid.length ; i++)
            slid[i].style.display = "none";
           
        }
        function dot(){
            for(i = 0 ; i < slid.length ; i++){
                dots[i].classList.remove("active");
            }
        }
        setInterval (function(){
        y++;
        if(y > slid.length - 1){
             y = 0;
        }
        disnone();
        dot();
        slid[y].style.display = "block";
        dots[y].classList.add("active");
        },6000);


        dot_1.addEventListener("click",function(){
            dot_2.classList.remove("active");
            dot_1.classList.add("active");
            slid[1].style.display = "none";
            slid[0].style.display = "block";

        });
        dot_2.addEventListener("click",function(){
            dot_1.classList.remove("active");
            dot_2.classList.add("active");
            slid[0].style.display = "none";
            slid[1].style.display = "block";
        });
        
     
        

var slider_2 = document.querySelector("#slider_2");
var slid_1 = slider_2.getElementsByClassName('text_child_caption');
var dots_1 = document.getElementsByClassName("dot_2");
var dot_3 = document.querySelector("#dot_3");
var dot_4 = document.querySelector("#dot_4");
var x = 0 , i = 0;

    function disnone_1(){
        for(i = 0 ; i < slid_1.length ; i++)
            slid_1[i].style.display = "none";
           
        }
        function dot_01(){
            for(let i = 0 ; i < slid_1.length ; i++){
                dots_1[i].classList.remove("active");
            }
        }
        setInterval (function(){
        x++;
        if(x > slid_1.length - 1){
             x = 0;
        }
        disnone_1();
        dot_01();
        slid_1[x].style.display = "block";
        dots_1[x].classList.add("active");
        },6000);


        dot_3.addEventListener("click",function(){
            dot_4.classList.remove("active");
            dot_3.classList.add("active");
            slid_1[1].style.display = "none";
            slid_1[0].style.display = "block";

        });
        dot_4.addEventListener("click",function(){
            dot_3.classList.remove("active");
            dot_4.classList.add("active");
            slid_1[0].style.display = "none";
            slid_1[1].style.display = "block";
        });
            
   





// jqury
$(document).ready(function(){
    $(".menu-icon").click(function(){
        $(".navbar").slideToggle(500);
    });
    $("#mobile").click(function(){
        $("#1234").slideToggle(500);
    });
    $("#lable-items").click(function(){
        if ($(window).width() > 992){
            $("#lables-1").css("right","0");
            $("#lables-1").css("width","40px");
        }else {
            $("#lables-1").css("right", "0");
            $("#lables-1").css("width", "40px");
        }
        $(".lable-items").css("color", "rgba(0, 0, 0, 0.438)");
        $("#lable-items").css("color", "black");
    });
    $("#lable-items-1").click(function(){
        if ($(window).width() > 992){
            $("#lables-1").css("right","15%");
            $("#lables-1").css("width","12%");
        }else {
            $("#lables-1").css("right", "15%");
            $("#lables-1").css("width", "40px");
        }
        $(".lable-items").css("color", "rgba(0, 0, 0, 0.438)");
        $("#lable-items-1").css("color", "black");
    });
    $("#lable-items-2").click(function(){
        if ($(window).width() > 992){
            $("#lables-1").css("right","31%");
            $("#lables-1").css("width","18%");
        }else {
            $("#lables-1").css("right", "30%");
            $("#lables-1").css("width", "15%");
        }
        $(".lable-items").css("color", "rgba(0, 0, 0, 0.438)");
        $("#lable-items-2").css("color", "black");
    });
    $("#lable-items-3").click(function(){
        if ($(window).width() > 992){
            $("#lables-1").css("right","55%");
            $("#lables-1").css("width","19%");
        }else {
            $("#lables-1").css("right", "47%");
            $("#lables-1").css("width", "15%");
        }
        $(".lable-items").css("color", "rgba(0, 0, 0, 0.438)");
        $("#lable-items-3").css("color", "black");
    });
    $("#lable-items-4").click(function(){
        if ($(window).width() > 992){
            $("#lables-1").css("right","80%");
            $("#lables-1").css("width","15%");
        }else {
            $("#lables-1").css("right", "65%");
            $("#lables-1").css("width", "12%");
        }
        $(".lable-items").css("color", "rgba(0, 0, 0, 0.438)");
        $("#lable-items-4").css("color", "black");
    });
});
$(document).mouseup(function(e) 
{
    container = $("#1234");
 

    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.hide();
    }
});



