

// $(document).ready(function() {
//     $("#image_slider").swiperight(function() {
//        $(this).carousel('plusindex(-1)');
//      });
//     $("#image_slider").swipeleft(function() {
//        $(this).carousel('plusindex(+1)');
//     });
//  });




// Image slider Java Script
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

// $("#image_slider").on("swiperight", plusindex(-1));

// $(function(){
//     $('#image_slider').bind(image_slider, function(event){
// alert('');
//     });

// });



