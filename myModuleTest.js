myAccessors = (function() {

	var data = "interesting data"; //effectively private

	var buffer = "..................big";

/**
 * 
 * @desc Kennwort verifizieren
 * @returns {undefined}
 */
	var getData = function() {
		console.log(data);
	};

	var setData = function(val) {
		data = val; // data resolves to outer scope
	};

	buffer = null;

	return { getData : getData, setData : setData};
})(); // "IIFE": just a func expr that we call right away

myAccessors.getData();
myAccessors.setData("new info");
myAccessors.getData();
