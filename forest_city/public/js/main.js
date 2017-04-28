var faceRightArrow = document.querySelector("#right-arrow");
var count = 0;

//wholesale add input
var wholesaleAddInput = document.querySelector("#wholesaleADD");
var add = document.querySelector('#newInput');

function facebookLoad(e) {

    document.querySelector('#newsText').innerHTML= "";
        
    $.getJSON("https://graph.facebook.com/forestcitycakes/posts?access_token=1285272998227190%7ChdMAx6GfHTXbh6YkSklnSDUtPJU",
    function(data){
        console.log(data.data); 
        if ( count >= data.data.length){
            count = 0;
        }
        document.querySelector('#date').innerHTML = new Date (Date.parse(data.data[count].created_time)).toDateString();
        document.querySelector('#newsText').innerHTML = data.data[count].message;
                count++;
           })
        };


function instagramLoad() {

    document.querySelector('#galleryApi').innerHTML= "";
        
    $.getJSON("https://api.instagram.com/v1/users/self/media/recent?access_token=1514734757.1677ed0.11941aca22a041c796fe69ac59143ec0&callback=?",
    function(insta){
        console.log(insta.data);
        //console.log(insta.data[0].images.standard_resolution.url);
    if ( count >= insta.data.length){
            count = 0;
        }
      for (var i = 0; i < 6; i++) {
        document.querySelector('#galleryApi').innerHTML += 
        '<div class="small-12 medium-6 large-4 columns">'+
            '<img src="'+insta.data[i].images.standard_resolution.url+'" alt="Gallery Image" class="galImg">'+
        '</div>' 
        count+=6;
        };  
    })       
};


    function addNewInput()
    {
        add.innerHTML="<h1>Hey</h1>";
    }

window.addEventListener("load", facebookLoad, false);
window.addEventListener("load", instagramLoad, false);
faceRightArrow.addEventListener("click", facebookLoad, false);  
wholesaleAddInput.addEventListener("click", addNewInput, false);
  // editBut.addEventListener("click", changeHide, false);