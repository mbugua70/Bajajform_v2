const selectEls = document.getElementById("sub_1_6");
const ownerOne = document.getElementById("ownerone");
const ownerTwo = document.getElementById("ownertwo");

selectEls.addEventListener("input",function(){
    valueOne = $("#sub_yes_1").val()
    valueTwo = $("#sub_no_1").val();

    if($("#sub_1_6").val() !== "" || undefined){
        if($("#sub_1_6").val() === valueOne ){
            ownerOne.style.display = "block";
            ownerTwo.style.display = "none"
          }else{
            ownerOne.style.display = "none";
            ownerTwo.style.display = "block";
          }
    }else{
        ownerOne.style.display = "none";
        ownerTwo.style.display = "none";
    }


    },false);