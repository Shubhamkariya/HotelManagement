<html>
<body>
<div class ="TestRotator">
<img src="1.jpg" alt="rotating" width="100" height="232" id="rotator">
<script type="text/javascript">
(function () {
      var rotator=document.getElementById('rotator');
      var delayInSeconds = 5;
      var images=['2.jpg','3.jpg','4.jpg'];
      var num=0;
      var changeImage = function()
      {
        var len = images.length;
        rotator.src = images[num++];
        if(num==len)
        {
          num=0;
        }
      };
      setInterval(changeImage,delayInSeconds*1000);
})();
</script>
</div>
</body>
</html>
