function submit(){
    let userName = document.getElementById('userName').value;
    let sb = document.getElementById('soccerBall').value;
    let pencil = document.getElementById('pencil').value;
    let backpack = document.getElementById('backpack').value;
    let sevenDay = document.getElementById('sevenDay');
    let overnight = document.getElementById('overnight');
    let threeDay = document.getElementById('threeDay');

    if(document.getElementById('pw').value !=  "" && userName.indexOf('@') > 0 && userName.indexOf('.') > 0 && backpack != "" && sb != "" && pencil != "" && (sevenDay.checked | threeDay.checked | overnight.checked)){
        console.log('success')
        document.getElementById('productForm')
    }
    // else{
    //     if(sb == ""){

    //     }
    // }
}

function doBackend(){
    console.log('in doBackend')
}