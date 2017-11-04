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
