function jabatTangan(n){
    var x = 0;
    
    for(var i=0; i<n;i++){
        for(var j=0;j<i;j++){
            x++;
        }
    }
    console.log(x);
}

jabatTangan(6);