//javascript addLowKeywordButton Function
function lowKeyAddBtnFunc() {
// var lowKeyAddBtn = document.createElement("BUTTON");
// var lowKeyBtnText = document.createTextNode("Add Low Keyword");
// lowKeyAddBtn.appendChild(lowKeyBtnText);
// //lowKeyDiv.appendChild("lowKeyAddBtn");
// document.body.appendChild(lowKeyAddBtn);
var lowKeyDiv = document.getElementById("lowKeyDiv");
var lowKeyInputBox = document.createElement("INPUT");

lowKeyInputBox.setAttribute("type", "text");
lowKeyInputBox.setAttribute("placeholder", "Insert a low ranked keyword here");
lowKeyDiv.appendChild(lowKeyInputBox);
lowKeyDiv.innerHTML += "<br><br>";

}

function createForm() {
  
}
