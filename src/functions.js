function Get(id){ return document.getElementById(id) ; }
function sequence_meta(){
  var sequence = new Array() ;
  var counter = 0 ;
  var n = Get('input_meta_terms').value ;
  var source = Get('input_meta_source').value ;
  for(var i=0 ; i<source.length ; i++) sequence.push(source[i]) ;
  for(var i=0 ; i<n ; i++){
    var s = sequence[counter] ;
    var m = 1 ;
    counter++ ;
    for(var j=counter ; j<sequence.length ; j++){
      if(s==sequence[j]){
        m++ ;
        counter++ ;
      }
      else{
        break ;
      }
    }
    sequence.push(m) ;
    sequence.push(s) ;
  }
  Get('div_meta').innerHTML = sequence.join(' ') ;
}
function sequence_fib(){
  var sequence = new Array() ;
  var n = Get('input_fib_terms').value ;
  var a = parseInt(Get('input_fib_t1').value) ;
  var b = parseInt(Get('input_fib_t2').value) ;
  sequence.push(a) ;
  sequence.push(b) ;
  for(var i=0 ; i<n ; i++){
    var c = b+a ;
    a = b ;
    b = c ;
    sequence.push(b) ;
  }
  Get('div_fib').innerHTML = sequence.join(' ') ;
}