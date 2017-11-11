"use strict";

function style(){
	let fontType = document.getElementById("fontType").selectedIndex;
	let bgColor = document.getElementById("bgColor").selectedIndex;
	let fontColor = document.getElementById("fontColor").selectedIndex;

	alert(fontType)

	switch(fontType){
		case 0:
		document.body.style.fontFamily: "bebasregular";
		break;

		case 1:
		document.body.style.fontFamily: "bebasregular";
		break;
	}

	switch(bgColor){
		case 0:
		document.body.style.backgroundColor = "white";
		break;

		case 1:
		document.body.style.backgroundColor = "gray";
		break;
	}

	switch(fontColor){
		case 0:
		document.body.style.color = "black";
		break;

		case 1:
		document.body.style.color = "white";
		break;
	}
}