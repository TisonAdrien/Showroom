var r,g,b;
var ri,gi,bi;
var vr,vg,vb,v;
vr = 90;
vg = 75;
vb = 50;
v = 10;
r = 127;
g = 127;
b = 127;
ri = true;
gi = true;
bi = true;
setInterval(function(){
    if (ri){
        r++;
        if (r>=255)
            ri=false;
    }else{
        r--;
        if(r<=127)
            ri = true;
    }
},vr);
setInterval(function(){
    if (gi){
        g++;
        if (g>=255)
            gi=false;
    }else{
        g--;
        if(g<=127)
            gi = true;
    }
},vg);
setInterval(function(){
    if (bi){
        b++;
        if (b>=255)
            bi=false;
    }else{
        b--;
        if(b<=127)
            bi = true;
    }
},vb);
setInterval(function(){
    $("body").css("background-color","rgb("+r+","+g+","+b+")");
},v);
