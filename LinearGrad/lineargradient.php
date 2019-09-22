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
  <div style="width: 100%;position: relative;left: 50%;top: 50%;transform: translate(-50%,-50%);">
  <div class="text-center">
 <canvas id="lineargrad" width="300" height="300" style="border-radius: 50%;border: 2px solid yellow;"></canvas>
</div>
</div>
<script type="text/javascript">
  var canvas=document.getElementById('lineargrad');
  var ctx=canvas.getContext('2d');
  var x=0;
  var y=150;
  var x1=300;
  var y1=150;

  function drawlinear()
  {
  //x,y,x1,y1
  var grad=ctx.createLinearGradient(x,y,x1,y1);
  grad.addColorStop(0,'blue');
  grad.addColorStop(0.50,'yellow');
  grad.addColorStop(1,'blue');

  ctx.fillStyle=grad;
  ctx.fillRect(0,0,300,300);

if(y>0)
{
  y-=50;
  y1+=50;
}
if(x1>0 && y==0)
{
  x1-=50;
  x+=50;
}
if(x1==0)
{
  x=0;
  y=150;
  x1=300;
  y1=150;
}
  }
  drawlinear();
  setInterval(drawlinear,1000);
</script>
</body>
</html> 
















