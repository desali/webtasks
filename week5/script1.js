function onClick(){
	document.querySelector("#result").textContent=parseInt(document.querySelector("#s11").value)*parseInt(document.querySelector("#s22").value)*parseInt(document.querySelector("#s33").value)+parseInt(document.querySelector("#s12").value)*parseInt(document.querySelector("#s23").value)*parseInt(document.querySelector("#s31").value)+parseInt(document.querySelector("#s21").value)*parseInt(document.querySelector("#s32").value)*parseInt(document.querySelector("#s13").value) - parseInt(document.querySelector("#s13").value)*parseInt(document.querySelector("#s22").value)*parseInt(document.querySelector("#s31").value)-parseInt(document.querySelector("#s12").value)*parseInt(document.querySelector("#s21").value)*parseInt(document.querySelector("#s33").value)-parseInt(document.querySelector("#s23").value)*parseInt(document.querySelector("#s32").value)*parseInt(document.querySelector("#s11").value);
}