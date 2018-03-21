
// Image slider Java SCript
var index = 1;

function plusindex(n){
    index = index + n;
    showImage(index);
}


function showImage(n){
    var i;
    var pic= document.getElementsByClassName("slides");
    if(n > pic.length){ index = 1};
    if(n < 1){ index = pic.length};


        for(i=0;i<pic.length;i++){
            pic[i].style.display = "none";
}
 
 pic[index-1].style.display = "block";
}

showImage();