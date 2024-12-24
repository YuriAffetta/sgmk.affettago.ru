/*
document.addEventListener("DOMContentLoaded", () => {
	const input = document.querySelector("input[name=q]");
	const btnReset = document.querySelector("button[type=reset]");
	
	input.addEventListener("input", function (event) {
		toggleBtnReset();
	});
	btnReset.addEventListener("click", function (event) {
		setTimeout(() => {
			toggleBtnReset();
		});
	});
	
	toggleBtnReset();
	
	function toggleBtnReset() {
		if (input.value.length > 0) {
			btnReset.classList.remove("d-none");
		} else {
			btnReset.classList.add("d-none");
		}
	}
});
*/
