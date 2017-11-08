let mDown = -1;
let count = Math.floor(Math.random() * (100 - 0));

function mousedown(event){
	if(mDown == -1){
		mDown = setInterval(whilemousedown, 100);
	}
}

function mouseup(event){
	while(mDown != -1){
		clearInterval(mDown);
		mDown = -1;
	}
}

function whilemousedown(){
	document.getElementById("counter").innerHTML = count--;
}

function dblclick(event){
	let rand = Math.floor((Math.random() * 3) + 1);

	switch(rand){
		case 1:
		document.getElementById("bmiTitle").style.color = "magenta";
		break;
		
		case 2:
		document.getElementById("bmiTitle").style.color = "blue";
		break;
		
		case 3:
		document.getElementById("bmiTitle").style.color = "green";
	}
}

document.getElementById("listener").addEventListener("mousedown", mousedown);
document.getElementById("listener").addEventListener("mouseup", mouseup);
window.addEventListener("dblclick", dblclick)

function welcome(){
	window.alert("Witaj w miejscu dla fanów czterokołowych skuterów!")
	let bestCar = window.prompt("Najlepszy samochód świata to...")
	let newsletter = document.getElementById("newsletter")

	if(bestCar == "Matiz" || bestCar == "matiz" || bestCar == "MATIZ"){
		show(newsletter)
		alert("Ma się rozumieć!")
	}
	else{
		hide(newsletter)
	}
}


function hide(element){
	element.style.display = 'none'
}

function show(element){
	element.style.display = 'block'
}


function getBMI(){
	let form = document.getElementById("bmiForm");
	let height = parseFloat(form.elements[0].value);
	let weight = parseInt(form.elements[1].value);
	let bmi = 0;
	if(typeof(height) == "number"){
		if(height <= 0){
			bmi = "Błędne dane"
		}
		else{
			bmi = Math.floor(weight/(height^2));
		}
	}
	document.getElementById("BMI").innerHTML = bmi;
}

