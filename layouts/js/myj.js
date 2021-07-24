
/*back to top button*/
const toTop = document.querySelector(".to-top");

window.addEventListener("scroll",()=>{
    if(window.pageYOffset > 200 ){
        toTop.classList.add("active");
    }else{
        toTop.classList.remove("active");
    }
});


/*pointer curseur desing*/


const curseur = document.querySelector(".curseur");
const curseur2 = document.querySelector(".curseur2");
document.addEventListener("mousemove",function(e){
    curseur.style.cssText = curseur2.style.cssText = "left: "+e.clientX+"px; top: "+e.clientY+"px;";

});