







$(document).ready(function() { 
      
    $("#fullLucille").mouseenter(function(){ 
        $("#whiteLucille").stop().animate({ 
            width: "40%"
        },
        {duration:2436}); 
    }).mouseleave(function(){ 
        $("#whiteLucille").stop().animate({ 
            width: "0%"
        }); 
    }); 
}); 

$(document).ready(function() { 
      
    $("#fullSamuel").mouseenter(function(){ 
        $("#whiteSamuel").stop().animate({ 
            width: "40%"
        },
        {duration:2436}); 
    }).mouseleave(function(){ 
        $("#whiteSamuel").stop().animate({ 
            width: "0%"
        }); 
    }); 
}); 

$(document).ready(function() { 
      
    $("#fullFlora").mouseenter(function(){ 
        $("#whiteFlora").stop().animate({ 
            width: "40%"
        },
        {duration:2436}); 
    }).mouseleave(function(){ 
        $("#whiteFlora").stop().animate({ 
            width: "0%"
        }); 
    }); 
}); 