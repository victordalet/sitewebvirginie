setTimeout(function(){
    document.querySelector('.entre').classList.remove('active');
    document.querySelector('.entre').classList.add('disabled');
    document.querySelector('.page').classList.remove('disabled');
    document.querySelector('.page').classList.add('active');
}, 2000)