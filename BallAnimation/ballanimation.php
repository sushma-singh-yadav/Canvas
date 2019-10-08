<!DOCTYPE html>
<html>
<head>
	<title>Canvas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
      body,html
      {
        width: 100%;
        height: 100%;
      }
    </style>
</head>
<body>
  <div>
  <div class="text-center">
 <canvas id="animation" width="900" height="600" style="border: 2px solid #2d0057;background: #2d0057;"></canvas>
</div>
</div>
<script type="text/javascript">
  var canvas=document.getElementById('animation');
  var ctx=canvas.getContext('2d');
x=100;
y=100;
vx=3;
vy=9;
r=70;

x2=800;
y2=100;
vx2=4;
vy2=5;

x3=550;
y3=550;
vx3=8;
vy3=8;
r3=50;

function createCircle()
{ 
  ctx.clearRect(0,0, canvas.width, canvas.height);
if(x > canvas.width- r || x<r)
{ vx=-vx;
}
if(y > canvas.height -r || y<r)
{ vy=-vy;
}
  x+=vx;
  y+=vy;
 
  ctx.beginPath();
  ctx.arc(x,y,r,0,2*Math.PI);
  ctx.fillStyle="orange";
  ctx.fill();
  ctx.stroke();
  ctx.closePath();

  //second circle
if(x2 > canvas.width- r || x2<r) { vx2=-vx2; }
if(y2 > canvas.height -r || y2<r)  { vy2=-vy2; }
  x2+=vx2;
  y2+=vy2;
 
  ctx.beginPath();
  ctx.arc(x2,y2,r,0,2*Math.PI);
  ctx.fillStyle="pink";
  ctx.fill();
  ctx.stroke();
  ctx.closePath();

    //third circle
if(x3 > canvas.width- r3 || x3<r3) { vx3=-vx3; }
if(y3 > canvas.height -r3 || y3<r3)  { vy3=-vy3; }
  x3+=vx3;
  y3+=vy3;
 
  ctx.beginPath();
  ctx.arc(x3,y3,r3,0,2*Math.PI);
  ctx.fillStyle="red";
  ctx.fill();
  ctx.stroke();
  ctx.closePath();


window.requestAnimationFrame(createCircle);
}
createCircle();
//setInterval(createCircle, 10);
</script>
</body>
</html> 

















