function myFunction(){
        document.getElementById("demo").innerHTML = "Thanks for reviewing!";
    }
let clicks=0;
function onClick(){
        clicks+=1;
        document.getElementById("clicks").innerHTML=clicks;
        if (clicks>9){
                alert("We appreciate the excellent response!!")
        }
}
