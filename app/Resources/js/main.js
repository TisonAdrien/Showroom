var r,g,b;
var ri,gi,bi;
r = 0;
g = 0;
b = 0;
ri = true;
gi = true;
bi = true;
setInterval(function(){
    if (ri){
        r++;
        if (r>=125)
            ri=false;
    }else{
        r--;
        if(r<=0)
            ri = true;
    }
},25);
setInterval(function(){
    if (gi){
        g++;
        if (g>=125)
            gi=false;
    }else{
        g--;
        if(g<=0)
            gi = true;
    }
},24);
setInterval(function(){
    if (bi){
        b++;
        if (b>=125)
            bi=false;
    }else{
        b--;
        if(b<=0)
            bi = true;
    }
},23);
setInterval(function(){
    $("body").css("background-color","rgb("+r+","+g+","+b+")");
},25);
