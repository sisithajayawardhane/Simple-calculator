var a=0;
var num1='';
var num2='';
var result;
var operator;
var b=1;
function btnClickedNum(num){
    
    if(a==1){
        document.getElementById("display").innerHTML = '';
    }
    document.getElementById("display").innerHTML += num;
    if(b==1){
    num1+=num;
    //alert("1:"+num1);
}
    else{
    num2+=num;
    //alert("2:"+num2);
}
a=0;
 } 
function btnClickedOpr(opr){
    operator=opr;
    if(opr=='*'){
        document.getElementById("display").innerHTML = '&times';
    }
    else if(opr=='/'){
        document.getElementById("display").innerHTML = '&#247';
    }
    else{
        document.getElementById("display").innerHTML = opr;
    }
    a=1;
    b=0;

}
function myfunction(){
    document.getElementById("display").innerHTML =''; 
}
function switch_page(){
    window.location.href="result.php?number_1="+num1+"&number_2="+num2+"&symbol="+operator;
}

    

    
