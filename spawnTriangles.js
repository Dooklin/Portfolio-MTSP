let svg = document.getElementById("triangle-bg");
let numTriangles = 30;
let minDistance = 200;
let placed = [];

function rand(min, max) {
    return Math.random() * (max - min) + min;
}

function isFarEnough(x, y) {
    for (const p of placed) {
        let dx = p.x - x;
        let dy = p.y - y;
        let distance = Math.sqrt(dx * dx + dy * dy);
        if (distance < minDistance) return false;
    }
    return true;
}

for (let i = 0; i < numTriangles; i++) {
    let tries = 0;
    let x, y;

    do {
        x = rand(0, window.innerWidth);
        y = rand(0, window.innerHeight);
        tries++;
    } while (!isFarEnough(x, y) && tries < 100);

    if (tries >= 100) continue; // skip if no space found

    let size = rand(30, 100);
    let rotation = rand(0, 360);
    let opacity = rand(0.2, 0.5);

    let points = `0,0 ${size},0 ${size / 2},${size}`;
    let triangle = document.createElementNS("http://www.w3.org/2000/svg", "polygon");

    triangle.setAttribute("points", points);
    triangle.setAttribute("fill", "gray");
    triangle.setAttribute("opacity", opacity);
    triangle.setAttribute("transform", `translate(${x}, ${y}) rotate(${rotation})`);

    svg.appendChild(triangle);
    placed.push({ x, y });
}