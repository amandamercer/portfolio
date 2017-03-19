(function() {
    "use strict";

    var carList = document.querySelector('#car');

    var carModels = {};
    carModels['Chevrolet'] = ['MODEL', '1500', '2500', '3500', 'Avalanche', 'Colorado', 'Silverado 1500', 'Silverado 2500', 'Silverado 3500'];
    carModels['Dodge'] = ['MODEL', 'Ram 1500', 'Ram 2500', 'Ram 3500'];
    carModels['Ford'] = ['MODEL', 'F-150', 'F-250', 'F-350'];
    carModels['GMC'] = ['MODEL', 'Canyon', 'Sierra 1500', 'Sierra 2500'];
    carModels['Nissan'] = ['MODEL', 'Frontier', 'Titan XD', 'Titan'];
    carModels['Toyota'] = ['MODEL', 'Tacoma', 'Tundra'];

    carList.addEventListener("change", ChangeCarList, false);


    function ChangeCarList(e) {
        var carList = document.querySelector('#car');
        var modelList = document.querySelector('#carmodel');
        var selCar = carList.options[carList.selectedIndex].value;
        while (modelList.options.length) {
            modelList.remove(0);
        }
        var cars = carModels[selCar];
        if (cars) {
            var i;
            for (i = 0; i < cars.length; i++) {
                var car = new Option(cars[i], cars[i]);
                modelList.options.add(car);
            }
        }
    }

    //Get Years
    var start_year = new Date().getFullYear();
    var html = '';
    for (var i = start_year; i > start_year - 62; i--) {
        html += '<option value="' + i + '">' + i + '</option>';
    }
    document.getElementById("year").innerHTML = html;


    var fieldSets = document.getElementsByClassName('fieldset');
    for (var i = 0; i < fieldSets.length; i++) {
        setupEventListener(fieldSets, i);
    }

    function setupEventListener(object, index) {
        var prevButton = object[index].getElementsByClassName('prev');
        var nextButton = object[index].getElementsByClassName('next');

        if (prevButton.length > 0) {
            prevButton[0].addEventListener('click', function() {
                // var currentActiveStep = document.querySelector('#progressbar .active');
                var currentActiveStep = document.querySelectorAll('#progressbar li')[index];

                var newActiveStep = document.querySelectorAll('#progressbar li')[index - 1];


                // Hide current fields
                object[index].style.display = 'none';

                //De-activate current step on progressbar
                currentActiveStep.className = '';
                // Show previous fields
                object[index - 1].style.display = 'block';
                //Activate current step on progressbar
                // newActiveStep.className = 'active';
                //newActiveStep.addClassList = 'active'

            }, false);

        }

        if (nextButton.length > 0) {
            nextButton[0].addEventListener('click', function() {
                var currentActiveStep = document.querySelector('#progressbar .active');
                var newActiveStep = document.querySelectorAll('#progressbar li')[index + 1];

                // Hide current fields
                object[index].style.display = 'none';
                //currentActiveStep.className = '';

                // Show previous fields
                object[index + 1].style.display = 'block';
                //Activate current step on progressbar
                newActiveStep.className = 'active';

                //return false;

                //if 

                // false  getallvalue

                // Get all form data
                if (index + 1 == object.length - 1) {
                    collectInputs();
                }

            }, false);

        }
    }


    function collectInputs() {
        var carValue = document.getElementById('car').options[document.getElementById('car').selectedIndex].text;
        var carModelValue = document.getElementById('carmodel').options[document.getElementById('carmodel').selectedIndex].text;
        var yearValue = document.getElementById('year').options[document.getElementById('year').selectedIndex].text;
        var productOptionValue = document.querySelector('input[name="orders_modified"]:checked').value;
        var bedHeight = '';
        var tailWidth = '';

        document.querySelector('#car-selected .value').innerHTML = carValue;
        document.querySelector('#carmodel-selected .value').innerHTML = carModelValue;
        document.querySelector('#year-selected .value').innerHTML = yearValue;
        document.querySelector('#product-option-selected .value').innerHTML = productOptionValue;


        if (productOptionValue == 'Modified') {
            bedHeight = document.querySelector('input[name="orders_bHeight"]').value;
            tailWidth = document.querySelector('input[name="orders_tWidth"]').value;
            document.querySelector('#noneStock').style.display = "block";
        } else {
            document.querySelector('#noneStock').style.display = "none";
        }

        document.querySelector('#bedheight-selected .value').innerHTML = bedHeight;
        document.querySelector('#tailwidth-selected .value').innerHTML = tailWidth;
    }

    /*
     var orderSummary = document.querySelector('#result');

     */
    var modify = document.querySelector('#mdfRadio');
    var stock = document.querySelector('#stkRadio');
    var extraInfo = document.querySelector('#extraOpt');

    modify.addEventListener("click", function() {
        extraInfo.style.display = 'block';
    }, false);

    stock.addEventListener("click", function() {
        extraInfo.style.display = 'none';
    }, false);


    var individual = document.querySelector('#indivdlOpt');
    var dealers = document.querySelector('#dealerOpt');
    var dealerInfo = document.querySelector('#dealer');

    //individual.addEventListener("click", function() {
        //dealerInfo.style.display = 'none';
    //}, false);

    function dealerHide() {
        dealerInfo.style.display = 'none';
    }

    individual.addEventListener("click", dealerHide, false);
    window.addEventListener("load", dealerHide, false);

    dealers.addEventListener("click", function() {
        dealerInfo.style.display = 'block';
    }, false);

})();
