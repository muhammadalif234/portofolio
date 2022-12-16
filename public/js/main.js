(function(){
    $(document).scroll(function(){
        var $nav =$(".navbar");
        if ($(this).scrollTop()>$nav.height()){
            alert('terjadi scroling lebih tinggi');
        } else{
            alert('scroling turun');
        }
    });
});

