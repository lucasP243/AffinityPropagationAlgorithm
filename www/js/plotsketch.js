var parent = $("#plotgraph");
var canvas;

function setup() {
    canvas = createCanvas(parent.width(), parent.height());
    canvas.parent('plotgraph');
}

function windowResized() {
    resizeCanvas(parent.width(), parent.height());
}

function draw() {
	background(240);
	drawGrid();
    //points.forEach(p => drawPoint(p));
}

function drawGrid() {
    push();
	stroke(200);
	fill(120);
	for (var x = 0; x < width; x+=50) {
		line(x, 0, x, height);
		text(x, x+1, 12);
	}
	for (var y = 0; y < height; y+=50) {
		line(0, y, width, y);
		text(y, 1, y+12);
	}
    pop();
}