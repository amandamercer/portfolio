(function(){

  // gallery

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

            var url = 'includes/getImages.php'+'?gallery_id='+this.id;
            console.log(url);
            httpRequest.onreadystatechange = showResults;
            httpRequest.open('GET', url);
            httpRequest.send();
        }

function showResults(){
  if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
      console.log("ready");
      var imageData = JSON.parse(httpRequest.responseText);
      console.log(imageData);

      [].forEach.call(document.querySelectorAll('.hidden'), function(item){
        item.classList.remove('hidden');
      });

      mainImage.src = "images/gallery/" + imageData.gallery_image;
      imageDesc.innerHTML = 'Photo taken by: '+imageData.gallery_credit;

      TweenMax.to(mainImage, 0, {alpha:0, onComplete:changeOpacity});
  }
}

[].forEach.call(thumbnails, function(img){
  img.addEventListener('click', makeRequest, false);
});

 function changeOpacity() {
      TweenMax.to(mainImage, 1, {opacity:1});
  }





  // about page

  var button = document.querySelectorAll('.aboutTab'),
      // title = document.querySelector('input'),
      // text = document.querySelector('textarea'),
      title = document.querySelector('.filler');

      function requestAbout(){
            httpRequest = new XMLHttpRequest();
            if(!httpRequest){
              console.log('Giving up, can\'t use Ajax.');
              return false;
            }

            var link = 'includes/getAbout.php'+'?about_id='+this.id;
            console.log(link);
            httpRequest.onreadystatechange = showAbout;
            httpRequest.open('GET', link);
            httpRequest.send();
        }

function showAbout(){
  console.log(httpRequest.status);
  if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
      console.log("ready");
      var json = JSON.parse(httpRequest.responseText);

      console.log(json);

      [].forEach.call(document.querySelectorAll('.hidden'), function(item){
        item.classList.remove('hidden');
      });

      title.innerHTML = json.about_title;

  }
}

[].forEach.call(button, function(tabTitle){
  tabTitle.addEventListener('click', requestAbout, false);
});






})();