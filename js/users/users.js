(function($){
    $("#btn-add").click(function(){
        $("#mdl-add").modal();
    });
    $("#users").dataTable({
        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
        "sLengthMenu": "_MENU_ records per page",
        },
        "aoColumns":
        [
            {"bVisible":true},
            {"bVisible":true},
            {"bVisible":true},
            {"bVisible":true},
            {"bVisible":true}
        ]
    });
    $('#btnSaveUser').click(function(){
        $.ajax({
            url:'/users/save',
            data:{
                username:$('#username').val(),
                email:$('#email').val()
            },
            type:'post'
        })
        .done(function(res){
            $.ajax({
                url:'/mailer/welcomemail',
                data:{
                    username:$('#username').val(),
                    email:$('#email').val(),
                    password:$('#password').val()
                },
                type:'post'
            })
            .done(function(sentmail){
                console.log('Mail sent',sentmail);
            })
            .fail(function(errsentmail){
                console.log('Err sent mail',errsentmail);
            });
            console.log('Res',res);
        })
        .fail(function(err){
            console.log('Err',err);
        });
    })
}(jQuery))
