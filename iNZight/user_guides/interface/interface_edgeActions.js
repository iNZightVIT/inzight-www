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
      
      $hoverColor = "rgba(100, 100, 100, 0.4)";
      
      Symbol.bindElementAction(compId, symbolName, "${PlotToolbar}", "click", function(sym, e) {
         // insert code for mouse click here
      
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute)
         window.open("https://www.stat.auckland.ac.nz/~wild/iNZight/user_guides/plot_options/?topic=plot_toolbar", "_self");
      
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${PlotToolbar}", "mouseenter", function(sym, e) {
         // insert code to be run when the mouse hovers over the object
         sym.$("PlotToolbar").css("background", $hoverColor);
         sym.stop("PlotToolbarText");
      
      
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${PlotToolbar}", "mouseleave", function(sym, e) {
         // insert code to be run when the mouse is moved off the object
         sym.$("PlotToolbar").css("background", "none");
         sym.stop(0);
      
      });
      //Edge binding end
      
      
      
      
      
      Symbol.bindElementAction(compId, symbolName, "${ManipVars}", "click", function(sym, e) {
         // insert code for mouse click here
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute)
         window.open("https://www.stat.auckland.ac.nz/~wild/iNZight/user_guides/manipulate_variables/", "_self");
      
      
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${RowOperations}", "click", function(sym, e) {
         // insert code for mouse click here
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute)
         window.open("https://www.stat.auckland.ac.nz/~wild/iNZight/user_guides/data_options/", "_self");
      
      
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${AdvancedMenu}", "click", function(sym, e) {
         // insert code for mouse click here
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute)
         window.open("https://www.stat.auckland.ac.nz/~wild/iNZight/user_guides/add_ons/", "_self");
      
      
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${FileMenu}", "mouseenter", function(sym, e) {
         sym.$("FileMenu").css('background', $hoverColor);
         sym.stop("FileMenuText");
      
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${FileMenu}", "mouseleave", function(sym, e) {
         sym.$("FileMenu").css("background", "none");
         sym.stop(0);
      
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${RowOperations}", "mouseenter", function(sym, e) {
         sym.$("RowOperations").css("background", $hoverColor);
      	sym.stop("RowOpText");
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${RowOperations}", "mouseleave", function(sym, e) {
         sym.$("RowOperations").css("background", "none");
      	sym.stop(0);
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${ManipVars}", "mouseenter", function(sym, e) {
         sym.$("ManipVars").css("background", $hoverColor);
      	sym.stop("ManipVarsText");
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${ManipVars}", "mouseleave", function(sym, e) {
         sym.$("ManipVars").css("background", "none");
      	sym.stop(0);
      });
      //Edge binding end
      
      
      Symbol.bindElementAction(compId, symbolName, "${AdvancedMenu}", "mouseenter", function(sym, e) {
         sym.$("AdvancedMenu").css("background", $hoverColor);
      	sym.stop("AdvText");
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${AdvancedMenu}", "mouseleave", function(sym, e) {
         sym.$("AdvancedMenu").css("background", "none");
      	sym.stop(0);
      
      });
      //Edge binding end
      
      
      
      Symbol.bindElementAction(compId, symbolName, "${HelpMenu}", "mouseenter", function(sym, e) {
         sym.$("HelpMenu").css("background", $hoverColor);
      	sym.stop("HelpMenuText");
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${HelpMenu}", "mouseleave", function(sym, e) {
         sym.$("HelpMenu").css("background", "none");
      	sym.stop(0);
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${ViewChanger}", "mouseenter", function(sym, e) {
         sym.$("ViewChanger").css('background', $hoverColor);
         sym.stop("ViewChText");
      
      });
      //Edge binding end
      
      Symbol.bindElementAction(compId, symbolName, "${ViewChanger}", "mouseleave", function(sym, e) {
         sym.$("ViewChanger").css("background", "none");
         sym.stop(0);
      
      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${DataName}", "mouseenter", function(sym, e) {
         sym.$("DataName").css('background', $hoverColor);
         sym.stop("DataNameText");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${DataName}", "mouseleave", function(sym, e) {
         sym.$("DataName").css("background", "none");
         sym.stop(0);

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${DataViewer}", "mouseenter", function(sym, e) {
         sym.$("DataViewer").css('background', $hoverColor);
         sym.stop("DataViewerText");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${DataViewer}", "mouseleave", function(sym, e) {
         sym.$("DataViewer").css("background", "none");
         sym.stop(0);

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${DropTargets}", "mouseenter", function(sym, e) {
         sym.$("DropTargets").css('background', $hoverColor);
         sym.stop("DropTargetText");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${DropTargets}", "mouseleave", function(sym, e) {
         sym.$("DropTargets").css("background", "none");
         sym.stop(0);

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${DropTargets}", "click", function(sym, e) {
         // insert code for mouse click here
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute)
         window.open("https://www.stat.auckland.ac.nz/~wild/iNZight/user_guides/basics/", "_self");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${SummaryButtons}", "mouseenter", function(sym, e) {
         sym.$("SummaryButtons").css('background', $hoverColor);
         sym.stop("SummaryText");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${SummaryButtons}", "mouseleave", function(sym, e) {
         sym.$("SummaryButtons").css("background", "none");
         sym.stop(0);

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

   //=========================================================
   
   //Edge symbol: 'ContentBox'
   (function(symbolName) {   
   
   })("ContentBox");
   //Edge symbol end:'ContentBox'

})(window.jQuery || AdobeEdge.$, AdobeEdge, "EDGE-7984144");