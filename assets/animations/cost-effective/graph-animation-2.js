/* I am fully aware that all of this code should be made into a class or jQuery plugin */

$(document).ready(function(){
	if($('html').hasClass('no-touchevents')) {
		if($('html').hasClass('ie9') || $('html').hasClass('ie8')) {
		} else {
			initLineGraph2();
		}
	}
});
			
// point attributes object to pass to raphael.js 
var pointOptions2 = {
	'fill' : '#7629f4',
	'stroke' : '#FFFFFF',
	'stroke-width': 2,
	radius : 3
}
			
// line attributes object to pass to raphael.js   
var lineOptions2 = {
	'stroke': '#FFFFFF',
	'stroke-width': 2,
	'fill': '#7629f4',
	/* nice inner shadow for line, requires line be convex and closed off */
	'fill-opacity': 1 /* <-- doesn't work in old IEs */
}
			
// initialize graph  
function initLineGraph2 () {
	// set up raphael.js canvas with the elements of the graph element 
	var paper = new Raphael(document.getElementById('line-graph-2'), $('#line-graph-2').width(), $('#line-graph-2').height());  
		graphData2.paper = paper;
			  
		// create initial line
		var path = createPathString2(graphData2);
		// draw intial line with raphael.js 
		var line = paper.path(path); 
			  
		// set line drawing attributes 
			line.attr(lineOptions2);
		
		// save line to our global(I know, I know - not smart ) data object
			graphData2.line = line;
			
		// draw initial points 
		drawPoints2(graphData2, pointOptions2);			
}

			
// changes between data sets in global graph object 
function advanceGraph2() {
	if(graphData2.current < graphData2.charts.length -1) {
		graphData2.current++;
	} else {
		graphData2.current = 1;
	}
		  
	// animate to new data positions 
	animatePoints2(graphData2, graphData2.charts[graphData2.current]);
}
			
// draw initial points 
function drawPoints2(data, options) {		  
	
	var radius = options.radius; // point radius 
		// set points to initial data set 
		var points = data.charts[0].points;
				
		// iterate through points
		for (var i = 0, length = points.length; i < length; i++) {
			// calculate x and y positions: x delta is a constant, y value is intially set to start at 0 on y axis
			// xOffset and yOffets values are the locations within the canvas where the x and y axes are located

					var xPos = data.xOffset + (i * data.xDelta);


			var yPos = data.yOffset;
			
			if(i == 0 || i == 13) {
				radius = 0;
			} else {
				radius = options.radius;
			}
			
			// draw 
			var circle = data.paper.circle(xPos, yPos, radius);
				circle.attr(pointOptions2);
			// store raphael.js point object in global data set */
				points[i].point = circle;
			
		}
}
			
		
			
			/* animate points into new positions */
			/* data is the global data object, newData is the new dataset to animate to*/
			function animatePoints2(data, newData) {
				/* varibale to hold new raphael path string */
				var newPath = '';
				/* upper and lower limits are the limits of the data set and are used to scale the data values into pixel positions */
				var upperLimit = parseInt(newData.upper);
				if(isNaN(upperLimit)) {
					/* don't set to 0 to avoid divide by 0 error */
					upperLimit = 1;
				}
				
				var lowerLimit = parseInt(newData.lower);
				if(isNaN(lowerLimit)) {
					lowerLimit = 0;
				}
			  
			
			  /* used to calculate pixel positions based on limits */ 
				var scaleFactor = data.yOffset / (upperLimit - lowerLimit) ; 
			
			  /* get initial points from global data  */
			  var points = data.charts[0].points;
			  
			  /* loop through points */
				for (var i = 0, length = points.length; i < length; i++) {
					/* if this is the first point add an 'M' set to start drawing the raphael.js path  or use and 'L' set */
					
			    if(i == 0) {
			      /* I have hard coded the start of the line, sorry */
			      newPath += 'M 25 291 L ';
						/* since the x axis is constant, pass along the original x coordinate */
			      newX = data.xOffset + ' ';
						newPath += newX;
						/* calculate the new y value using scale factor and limits */
			      newY = data.yOffset - ((newData.points[i].value - lowerLimit) * scaleFactor) + ' ';
						/* add new y to path string */
			      newPath += newY;
				} else {
						newPath += ' L ';
						
						if(i == 13) {
							newX = data.xOffset + (i * data.xDelta) + 3 + ' ';
						} else {
							newX = data.xOffset + (i * data.xDelta) + ' ';	
						}
						newPath += newX;
						newY = data.yOffset - ((newData.points[i].value - lowerLimit) * scaleFactor);
						newPath += newY;
				}
			    
			    /* animate raphael.js points to new positions */
					points[i].point.animate({
							cy : data.yOffset - ((newData.points[i].value - lowerLimit) * scaleFactor)
						},
						1500,
						'ease-in-out'
					);
				}
			  /* add end of path string, sorry hardcoded again */
				//newPath += ' L 989 291 Z';
				newPath += ' L 450 291 Z';
			  
			  /* animate raphael.js line into new position */
			  data.line.animate({path : newPath}, 1500, 'ease-in-out');
			}
			
			/* create a raphael.js path string based on a data set */
			function createPathString2(data) {
			
			  var points = data.charts[data.current].points;
			
			  
				var path = 'M 25 291 L ' + data.xOffset + ' ' + (data.yOffset - points[0].value);
				var prevY = data.yOffset - points[0].value;
			
				for (var i = 1, length = points.length; i < length; i++) {
					path += ' L ';
					path += data.xOffset + (i * data.xDelta) + ' ';
					
					path += (data.yOffset - points[i].value);
			
					prevY = data.yOffset - points[i].value;
				}
				//path += ' L 989 291 Z';
				path += ' L 450 291 Z';
				return path;
			}
			
			/**** Global Data Object *****/
/**** Global Data Object *****/
  var graphData2 = {
    current     : 0,
    /* constant distance between points on the x axis */
    xDelta      : 28,
    /* location of y axis in horizontal space */
    xOffset     : 33,
    /* location of x axis in vertical space */
    yOffset     : 289,
    charts      :[
        /* initial data set */
        {
            /* lower limit of the data set (can be used to flatten or exaggerate the graph) */
            lower  : 0,
            /* upper limit is the upper limit of the data set (set it a bit above your highest data point)*/
            /* used to convert data values into pixel positions */
            upper  : 200,
            points : [
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
                { value : 0},
 
            ]
        },
        {
            lower  : 0,
            upper  : 200,
            points : [
	            { value : 27},
                { value : 18},
                { value : 25},
                { value : 25},
                { value : 80},
                { value : 36},
                { value : 18},
                { value : 18},
                { value : 105},
                { value : 100},
                { value : 34},
                { value : 140},
                { value : 150},
                { value : 27},
            ]
        }
    ]
};	