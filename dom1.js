"use strict";

function addParagraph(){

let div = document.getElementById("dynamicDiv");
let paragraph = document.createElement("P");
let text = document.createTextNode("Kolejny paragraf o matizie...");
paragraph.appendChild(text);
div.appendChild(paragraph);

let header = document.createElement("H1");
let h = document.createTextNode("Kolejny nagłówek");
header.appendChild(h);
div.insertBefore(header, div.childNodes[0]);
}

addParagraph();
