var porcent = document.querySelector('.porcent');
var loading = document.querySelector('.loading');
var count = 60;
var load = setInterval(animate, 50);

function animate(){
    if(count == 100){
        loading.parentElement.removeChild(loading);
        clearInterval(load);
    }
    else{
        count = count + 1;
    }
}