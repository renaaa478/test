import 'bootstrap@4.6.0'
import $ from 'jquery'
$('button')
  .html('Click me') 
  .on('click', () => console.log(test([6,2,3,4,5,7],12)))

console.log('App started')
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