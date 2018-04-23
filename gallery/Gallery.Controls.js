

function filePreview(input){
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
            // $('#gallery_upload_container + img').remove();
            $('#preview').append('<img src="'+e.target.result+'" width="300"; position="relative"; height="186X"; z-index="20"/>');
        };
            reader.readAsDataURL(input.files[0]);
    }
}

$('#gallery_file_upload').change(function(){
    filePreview(this);
});

//Custom choose file button event
$('#preview').click(function() {
    $('#gallery_file_upload').click();
});




var GalleryAPP = angular.module('GalleryAPP', ['ngSanitize']);
GalleryAPP.controller('ShowGalleryController', ['$scope', '$http', function ($scope, $http) {
    $scope.FetchImages = function(){
        $http({
            method: 'post',
            url: './gallery.controller.php?FetchImages="TRUE"',
            // headers: {'Content-Type': undefined},
        })
            .then(function(response, header, status, config) {
                // console.log(response.data);
                $scope.Records = response.data;
            });
    };

    $scope.deletePost = function(fileName, fileImage){
        var FD = new FormData();
        var myJFile = fileName;
        var myImage = fileImage;
        FD.append('myJFile', myJFile);
        FD.append('myImage', myImage);        
        $http({
            method: 'post',
            url: './gallery.controller.php?DeleteImage="TRUE"',
            data: FD,
            headers: {'Content-Type': undefined},
        })
            .then(function(response, header, status, config) {
                console.log(response.data);
                // $scope.Records = response.data;
            });
            $scope.FetchImages();
    };
}]);
//Manually Bootstraping REGISTER SYSTEM app^^^^^^^^^^^^^^^^
$('#GalleryAPP').ready( function() {
angular.bootstrap($('#GalleryAPP'), ['GalleryAPP']);
});




