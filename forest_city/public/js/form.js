(function(){

  //SELECTING THE FORM
  var form = document.querySelector('#wholesaleForm');


// review pop up
var requestBut = document.querySelector('#requestBut'),
    editBut = document.querySelector('.editBut'),
    reviewModal = document.querySelector('#reviewModal');

     function removeHide() {
        reviewModal.classList.remove("hide");
    }

    function addHide() {
        reviewModal.classList.add("hide");
    }


//FILL CONTAINERS WITH RESPECTIVE INPUT'S VALUES
function getInputs(){
  oneTime = form.querySelector('#oneTime').value;
  monthly = form.querySelector('#monthly').value;
  // console.log(form.querySelector('#cityProv'));
  // console.log(form.querySelector('#cityProv').value);
  weekly = form.querySelector('#weekly').value;
  //
  pickup = form.querySelector('#pickup').value;
  delivery = form.querySelector('#delivery').value;
  //
   date = form.querySelector('#date').value;
   time = form.querySelector('#time').value;
  //
   flavourName = form.querySelectorAll('.flavourName').value;
   quanNum = form.querySelectorAll('.quanNum').value;
   noPackg = form.querySelector('#noPackg').value;
   //
   firstName = form.querySelector('#firstName').value;
   lastName = form.querySelector('#lastName').value;
   email = form.querySelector('#email').value;
   phone = form.querySelector('#phone').value;
   //
   cash = form.querySelector('#cash').value;
   eTrans = form.querySelector('#eTrans').value;
   //
   address = form.querySelector('#address').value;
   city = form.querySelector('#city').value;
   province = form.querySelector('#province').value;
   postal = form.querySelector('#postal').value;
   //
   business = form.querySelector('#business').value;
   console.log("got inputs;");
}

requestBut.addEventListener("click", removeHide, false);
editBut.addEventListener("click", addHide, false);

})();