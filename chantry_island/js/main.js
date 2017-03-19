(function(){

  var thumbnails = document.querySelectorAll('#thumbnails img'),
      mainImage = document.querySelector('.gallery-large'),
      imageDesc = document.querySelector('.desc-text'),
      httpRequest;

      function makeRequest(){
            httpRequest = new XMLHttpRequest();

            if(!httpRequest){
              console.log('Giving up, can\'t use Ajax.');
              return false;
            }

            var url = 'includes/getImages.php'+'?gallery_name='+this.id;

            httpRequest.onreadystatechange = showResults;
            httpRequest.open('GET', url);
            httpRequest.send();
        }

function showResults(){
  if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
      var imageData = JSON.parse(httpRequest.responseText);

      [].forEach.call(document.querySelectorAll('.hidden'), function(item){
        item.classList.remove('hidden');
      });

      mainImage.src = "images/gallery/" + imageData.gallery_image + '.jpg';
      imageDesc.innerHTML = imageData.gallery_desc;

      TweenMax.to(mainImage, 0, {alpha:0, onComplete:changeOpacity});
  }
}

[].forEach.call(thumbnails, function(img){
  img.addEventListener('click', makeRequest, false);
});

 function changeOpacity() {
      TweenMax.to(mainImage, 1, {opacity:1});
  }

})();