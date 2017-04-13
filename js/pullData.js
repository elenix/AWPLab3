$(document).ready(function() { 
	Transform(); 
	calculateDiscount(); 
});

function Transform() {
	// Download XML data from the server side.
	var xml = getXMLData("php/createXML.php");

	// Get XSL template at the client side.
	var xsl = getXMLData("xml/product_list.xml");

	// Only for Mozilla based browsers.
	xsltProcessor = new XSLTProcessor();
	xsltProcessor.importStylesheet(xsl);
	var result = xsltProcessor.transformToFragment(xml, document);

	$("#product_list").append(result);
}

function getXMLData(url) {
	return $.ajax({type:"GET",
				   url:url,
		           async:false}).responseXML;
}
