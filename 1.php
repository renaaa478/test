<html>
 <head>
 <meta charset="UTF-8">
 </head>

 <body>
  <table align="center">
    <tr><td>
 <form method="post" action="<?  ?>">

<input type="submit" name="submit" value="OK">
   <input type="reset" name="reset" value="Cancel">
  <button onclick=" test([0,2,4,3,7,6],12); ">vvv</button>



<script>
function test(p1,p2){
  let ans = 0;
  for(let i=0;i<p1.length;i++){
    for(let j=i+1;j<p1.length;j++){
      if(p1[i]*p1[j] === p2){
        ans+=1
        console.log( p1[i] ,'*', p1[j],'=',p1[i]*p1[j])
      }
    }
  }
  console.log("answer = "+ ans)
}
// test([0, 9, 11, 100],0)


</script>
 </body>
</html>
