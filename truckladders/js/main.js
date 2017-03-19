(function(){

	var valRequest;
	var login = document.querySelector("#signin form");
	var error = document.querySelector("#signin p");
	var login_mob = document.querySelector("#mobileSignin form");
	var error_mob = document.querySelector("#mobileSignin p");
	var formName;

	var menuIcon = document.querySelector("#menu");
	var mobileNav = document.querySelector("#nav");
	var signIn = document.querySelector("#navSignin");
	var mobileSignin = document.querySelector("#mobileSignin");
	var account = document.querySelector("#accountSignin");
	var accountNav = document.querySelector("#account");
	var accountBack = document.querySelector("#accountBack");
	var close = document.querySelector("#close");
	var menuOpen = false;
	var loginOpen = false;
	var accountOpen = false;

	function formVal(loginForm) {
		valRequest = createRequest();

		if(valRequest === null){
			alert("Please upgrade to a modern browser");
			return;
		}

		formName = loginForm.parentNode.id;
		
		var user = loginForm.elements.username.value;
		var pass = loginForm.elements.password.value;

		if(user && pass){
			var url = baseURL + "home/verifyUser/" + user + "/" + pass;
			valRequest.onreadystatechange = formSubmitted;
			valRequest.open("GET",url,true);
			valRequest.send(null);
		}else{
			if(formName === "signin"){
				error.innerHTML = "Please fill out both fields.";
			}else if(formName === "mobileSignin"){
				error_mob.innerHTML = "Please fill out both fields.";
			}
		}
	}

	function formSubmitted() {
		if(valRequest.readyState === 4 || valRequest.readyState === "complete"){
			var account = JSON.parse(valRequest.responseText);

			if(account){
				if(account.dealers_approved == 1){
					if(formName === "signin"){
						login.submit();
					}else if(formName === "mobileSignin"){
						login_mob.submit();
					}
				}else{
					if(formName === "signin"){
						error.innerHTML = "Your account has not been approved yet.";
					}else if(formName === "mobileSignin"){
						error_mob.innerHTML = "Your account has not been approved yet.";
					}
				}
			}else{
				if(formName === "signin"){
					error.innerHTML = "Username or Password is incorrect.";
				}else if(formName === "mobileSignin"){
					error_mob.innerHTML = "Username or Password is incorrect.";
				}
			}
		}
	}

	function toggleNav() {
		if(!menuOpen){
			if(signIn){
				mobileSignin.style.bottom = "-400px";
				loginOpen = false;
			}else if(account){
				accountNav.style.bottom = "-350px";
				accountOpen = false;
			}
			nav.style.bottom = "0px";
			menuOpen = true;
		}else{
			nav.style.bottom = "-280px";
			menuOpen = false;
		}
	}

	function toggleSignin() {
		if(!loginOpen){
			nav.style.bottom = "-280px";
			menuOpen = false;
			mobileSignin.style.bottom = "0px";
			loginOpen = true;
		}else{
			mobileSignin.style.bottom = "-400px";
			loginOpen = false;
		}
	}

	function toggleAccount() {
		if(!accountOpen){
			nav.style.bottom = "-280px";
			menuOpen = false;
			accountNav.style.bottom = "0px";
			accountOpen = true;
		}else{
			accountNav.style.bottom = "-350px";
			accountOpen = false;
		}
	}

	login.addEventListener("submit", function(e) {
		e.preventDefault();
		formVal(this);
	}, false);
	login_mob.addEventListener("submit", function(e) {
		e.preventDefault();
		formVal(this);
	}, false);
	menuIcon.addEventListener("click", toggleNav, false);
	if(signIn){
		signIn.addEventListener("click", toggleSignin, false);
		close.addEventListener("click", toggleSignin, false);
	}
	if(account){
		account.addEventListener("click", toggleAccount, false);
		accountBack.addEventListener("click", toggleNav, false);
	}

})();