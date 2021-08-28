
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pure CSS Percentage Circle Demo</title>
<meta name="description" content="A demo of Percentage Circles. No graphics, no JavaScript - pure CSS percentage circle tutorial. Download HTML, CSS and SASS files." />
<meta name="author" content="Codeconvey" />

<style type="text/css">
  @import "https://fonts.googleapis.com/css?family=Roboto:400,700,300";
body {
  font-family: roboto, sans-serif;
  background: #d7bd94
}

.circle-wrap {
  margin: 50px auto;
  width: 150px;
  height: 150px;
  background: #e6e2e7;
  border-radius: 50%
}

.circle-wrap .circle .mask,
.circle-wrap .circle .fill {
  width: 150px;
  height: 150px;
  position: absolute;
  border-radius: 50%
}

.circle-wrap .circle .mask {
  clip: rect(0px, 150px, 150px, 75px)
}

.circle-wrap .circle .mask .fill {
  clip: rect(0px, 75px, 150px, 0px);
  background-color: #9e00b1
}

/*.circle-wrap .circle .mask.full,
.circle-wrap .circle .fill {
  animation: fill ease-in-out 3s;
  transform: rotate(126deg)
}

@keyframes fill {
  0% {
    transform: rotate(0deg)
  }
  100% {
    transform: rotate(126deg)
  }
}*/

.circle-wrap .inside-circle {
  width: 130px;
  height: 130px;
  border-radius: 50%;
  background: #fff;
  line-height: 130px;
  text-align: center;
  margin-top: 10px;
  margin-left: 10px;
  position: absolute;
  z-index: 100;
  font-weight: 700;
  font-size: 2em
}
</style>
</head>
<body>


<section>
<div class="circle-wrap">
<div class="circle">
<div class="mask full">
<div class="fill"></div>
</div>
<div class="mask half">
<div class="fill"></div>
</div>
<div class="inside-circle"> 60% </div>
</div>
</div>
</section>

</body>
</html>