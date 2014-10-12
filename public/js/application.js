// common way to initialize jQuery
$(function() {
    // simple demo to show create something via javascript on the page
    
    
    var url = window.location.href;
    $('#menu a').filter(function() {
        return this.href == url;
    }).addClass('active');
    
    $('.conditional').hide();
    $('.write-in').hide();
    $('#vote').hide();
    
/*     $('.result').hide(); */
    
    $("input[name$='isVoting']").click(function() {
      $('.state').show();
      $('.conditional').show();
      $('#vote').show();
      
      var test = $(this).val();
/*       alert(test); */
      if (test == 1) {
        $('.voting').show();
        $('.not-voting').hide();
      }
      else {
        $('.voting').hide();
        $('.not-voting').show();
      }
    }); 

    $('#forWhom').change(function() {
      var test = $(this).val();
/*       alert(test); */
      if (test == 'Other') {
        $('.write-in').show();
      }
      else {
        $('.write-in').hide();
      }
    }); 


/*
    var fValidate = $.parselyConditions({
      
        csstoggle: 'parselyTaDa',
        formname: 'vote-now',
      
        validationfields: [
    
            {
                fid: 'forWhom',
                ftype: 'select',
                fvalue: 'Other',
                faffected: 'forWhomWriteIn',
                fhide: false
            }
        ]
    
    });
    
*/
    
   
    
    if ($('#javascript-header-demo-box').length != 0) {
        $('#javascript-header-demo-box').hide();
        $('#javascript-header-demo-box').text('Hello from JavaScript! This line has been added by public/js/application.js');
        $('#javascript-header-demo-box').css('color', 'green');
        $('#javascript-header-demo-box').fadeIn('slow');
    }
});



