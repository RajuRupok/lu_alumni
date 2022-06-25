// Slide Toggle
$(document).ready(function() {
    $("a.comment").click(function() {
        var comment = '#' + $(this).attr('id');
        var postComment = '#post-comment' + comment.substring(8, comment.length);
        $(postComment).slideToggle();
        return false;
    });
});

// ===============< Input File Part >=============
$(document).ready(function(){
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label	 = input.nextElementSibling,
            labelVal = label.innerHTML;
    
        input.addEventListener( 'change', function( e )
        {
            var fileName = '';
            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
                fileName = e.target.value.split( '\\' ).pop();
    
            if( fileName )
                label.querySelector( 'span' ).innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });
    });
});


// ===============< Input File Part for post >=============
$(document).ready(function(){

    $(".inputfilepost").click(function(){
        var a = $(this).attr("id");

        var inputs = document.querySelectorAll( '#' + $(this).attr("id") );
        Array.prototype.forEach.call( inputs, function( input )
        {
            var label	 = input.nextElementSibling,
                labelVal = label.innerHTML;
        
            input.addEventListener( 'change', function( e )
            {
                var fileName = '';
                if( this.files && this.files.length > 1 )
                    fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                else
                    fileName = e.target.value.split( '\\' ).pop();
        
                if( fileName ){
                    label.querySelector('span').innerHTML = fileName;
                } else
                    label.innerHTML = labelVal;
            });
        });

    });

});


// ============< Edit Change >===========
$(document).ready(function() {

    var editbtn;
    $(".editbtn").click(function(){
        editbtn = '#' + $(this).attr("id");
        
        var editPost = '#editPost' + editbtn.substring(8, editbtn.length);
        var viewPost = '#viewPost' + editbtn.substring(8, editbtn.length);
        var cancelbtn = '#cancelBtn' +  editbtn.substring(8, editbtn.length);
        
        $(editbtn).ready(function(){
            $(viewPost).addClass('d-none');
            $(editPost).removeClass('d-none');
            $(editbtn).attr('disabled', 'disabled');    
        });
               

        $(cancelbtn).click(function(){
            $(editPost).addClass('d-none');
            $(viewPost).removeClass('d-none');
            $(editbtn).removeAttr('disabled', 'disabled');
        });
            
    });
    
});

// // ==============< Like check >==================
// $(document).ready(function(){

// });