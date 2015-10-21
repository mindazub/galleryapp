Dropzone.options.addImages = {
	maxFilesize: 5,
	acceptedFiles:'image/*',
	success: function(file, response){
		// console.log(file),
		// console.log(response);
		if(file.status == 'success') {
			handleDropzoneUpload.handleSuccess(response);
		} else {
			handleDropzoneUpload.handleError(response);
		}
	}
};
var handleDropzoneUpload = {
	handleError: function(response){
		console.log(response);
	},
	handleSuccess: function(response){
		// console.log(response);
		var imageList = $('#galerry-images ul');
		var imageSrc = baseUrl + '/galleryapp/images/thumbs/' + response.file_name;
		$(imageList).append('<li><a href="' + imageSrc + '"><img src="' + imageSrc + '"><a/></li>');
	}
}

$(document).ready(function(){
	console.log('Document is ready!');
});
