
let discu = document.getElementById("discu");
let visited = document.getElementById("visited");
let span = document.getElementById("span");
// var text_visited = document.getElementById("text_visited");
// var text_discu = document.getElementById("text_discu");
function discushow(){
    discu.style.color = "black";
    visited.style.color = "rgba(0, 0, 0, 0.336)";
    span.style.right = "96px";
    // text_visited.style.display = "none";
    // text_discu.style.display = "block";
}
function visitshow(){
    discu.style.color = "rgba(0, 0, 0, 0.336)";
    visited.style.color = "black";
    span.style.right = "0px";
    // text_visited.style.display = "block";
    // text_discu.style.display = "none";
}
/*weather*/
let url_news = "http://www.mednews.ir/";

function countriesOfContinent(set) {
    let request = $.ajax({
        method: "POST",
        url: url_news + "fa/weather/countries/" + set.value,
        data: { continentid : set.value }
    });
    request.done(function (msg) {
        document.getElementById("demo_select") .innerHTML = msg ;
        });
    request.fail(function (jqXHR , textStatus ){
        alert( "Request failed: " +  textStatus );
    });
    request.always(function (){
    });
}
function citiesOfCountry(Country){
    let continent = document.getElementById("continent").value;
    let request = $.ajax({
        method: "POST",
        url: url_news + "fa/weather/cities/" +  Country.value + "/" + continent,
        data: { counrtyid : Country.value , continentid : continent }
    });
    request.done(function ( msg ) {
        document.getElementById("demo_select").innerHTML = msg ;
        });
    request.fail(function (jqXHR , textStatus ){
        alert( "Request failed: " +  textStatus );
    });
    request.always(function (){
    });
}
function showWeather(city){
    let request = $.ajax({
        method : "post",
        url : url_news + "fa/weather/" + city ,
        data : { wcode : city }
    });
    request.done(function ( msg ) {
            document.getElementById("wDiv") .innerHTML = msg ;
    });
    request.fail(function (jqXHR , textStatus ){
        alert( "Request failed: " +  textStatus );
    });
    request.always(function (){
    });
}
/*weather*/
/*Cont*/
/*let  submit = document.querySelector("#submit");
let Url_Cont = "http://www.mednews.ir";
submit.addEventListener("click" , function (event){
    event.preventDefault();
    let select = document.getElementById("select").value;
    let names = document.getElementById("name").value;
    let emails = document.getElementById("email").value;
    let  textAreas = document.querySelector(".textarea").value;
    if (textAreas !== "" && emails !== "" && names !== ""){
        let request = $.ajax({
            method : "post",
            url : Url_Cont,
            data : { name : names , email : emails  , selected : select , textarea : textAreas }
        });
        request.done(function (smg){
            document.querySelector("#form_Contacst").innerHTML = "<div class='text_Alert'><h3>نظر شما با موفقیت ثبت شد</h3></div>";
        });
        request.fail(function (jqXHR , textStatus ){
            alert( "در زمان اجرای درخواست مشکلی پیش آمده است لطفا بعدا دوباره امتحان کنید");
        });
    }else {
        alert("کادر ها نمی توانند خالی باشند");
    }

});*/
/*Cont*/




