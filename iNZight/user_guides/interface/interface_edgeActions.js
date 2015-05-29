/***********************
* Adobe Edge Animate Composition Actions
*
* Edit this file with caution, being careful to preserve
* function signatures and comments starting with 'Edge' to maintain the
* ability to interact with these actions from within Adobe Edge Animate
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // aliases for commonly used Edge classes

   //Edge symbol: 'stage'
   (function(symbolName) {


      Symbol.bindElementAction(compId, symbolName, "${PlotToolbar}", "click", function(sym, e) {
         // insert code for mouse click here

         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute)
         window.open("../plot_options/?topic=plot_toolbar", "_self");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${PlotToolbar}", "mouseover", function(sym, e) {
         // insert code to be run when the mouse hovers over the object
         sym.stop();
         sym.play("PlotToolbarStart");


      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${PlotToolbar}", "mouseout", function(sym, e) {
         // insert code to be run when the mouse is moved off the object
         sym.stop();
         sym.play("PlotToolebarShow");

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 500, function(sym, e) {
         // insert code here
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1000, function(sym, e) {
         // insert code here
         sym.stop();

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${ManipVars}", "click", function(sym, e) {
         // insert code for mouse click here
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute)
         window.open("../manipulate_variables/", "_self");


      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${RowOperations}", "click", function(sym, e) {
         // insert code for mouse click here
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute)
         window.open("../data_options/", "_self");


      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

})(window.jQuery || AdobeEdge.$, AdobeEdge, "EDGE-7984144");
