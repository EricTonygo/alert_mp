$(function () {
    var init =0;
    $('#add_call_offer_btn').click(function () {
        $('#add_call_offer.ui.modal').modal('setting', {
            autofocus: false,
            inverted: true
        });
        $('#add_call_offer.ui.modal').modal('show');
    });

    $('#submit_call_offer').click(function (e) {
        e.preventDefault();
        $('#add_call_offer_form.ui.form').submit();
    });
    
    $('#show_list_table').click(function(){
        if(init === 0){
            $('#list_as_grid').hide();
            $('#list_call_offer_as_table').show(); 
            init=1;
        }else if(init===1){
            $('#list_as_grid').show();
            $('#list_call_offer_as_table').hide();
            init =0;
        }        
    });

    $('#add_call_offer_form.ui.form')
            .form({
                fields: {
                    type_procedure: {
                        identifier: 'type_procedure',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Veuillez selectionner un type'
                            }
                        ]
                    },
                    reference: {
                        identifier: 'reference',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Veuillez saisir une reférence'
                            }
                        ]
                    },
                    object: {
                        identifier: 'object',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Veuillez saisir une reférence'
                            }
                        ]
                    },
                    owner: {
                        identifier: 'owner',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Veuillez renseigner le maître d\'ouvrage'
                            }
                        ]
                    }
                },
                inline: true,
                on: 'blur',
                onSuccess: function (event, fields) {
                    event.preventDefault();
                    $.ajax({

                    });
                }
            }
            );

    $('#login_form.ui.form')
            .form({
                fields: {
                    username_email: {
                        identifier: 'username_email',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Veuillez saisir votre matricule ou votre email valide'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Veuillez saisir votre mot de passe'
                            }
                        ]
                    }
                },
                inline: true,
                on: 'blur'
                        /*onSuccess: function (event, fields) {
                         event.preventDefault();
                         $.ajax({
                         
                         });
                         }*/
            }
            );

    $('#register_form.ui.form')
            .form({
                fields: {
                    lastname: {
                        identifier: 'lastname',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Veuillez saisir le nom'
                            }
                        ]
                    },
                    username: {
                        identifier: 'username',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Veuillez saisir le matricule'
                            }
                        ]
                    },
                    email: {
                        identifier: 'email',
                        rules: [
                            {
                                type: 'email',
                                prompt: 'Veuillez saisir une adresse email valide'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Veuillez saisir un mot de passe'
                            }
                        ]
                    },
                    passwordConfirm: {
                        identifier: 'passwordConfirm',
                        rules: [
                            {
                                type: 'match[password]',
                                prompt: 'Le mot de passe saisi ne correspond pas'
                            }
                        ]
                    }
                },
                inline: true,
                on: 'blur',
                onSuccess: function (event, fields) {
                    event.preventDefault();
                    $.ajax({
                        /*type: 'post',
                         url: $('#subscribe_form.ui.form').attr('action'),
                         data: fields,
                         dataType: 'json',
                         beforeSend: function () {
                         $('#cancel_subscribe').hide();
                         $('#submit_subscribe').addClass('loading');
                         },
                         success: function (response, textStatus, jqXHR) {
                         $('#modal_subscribe.ui.modal').modal('hide');
                         $('#cancel_subscribe').show();
                         $('#submit_subscribe').removeClass('loading');
                         if (response.success === true) {
                         alertify.success(response.data.message);
                         } else {
                         alertify.error(response.data.message);
                         }
                         },
                         error: function (jqXHR, textStatus, errorThrown) {
                         $('#modal_subscribe.ui.modal').modal('hide');
                         $('#submit_subscribe').removeClass('loading');
                         $('#cancel_subscribe').show();
                         alertify.error("Internal Server Error");
                         }*/
                    });
                }
            }
            );
});


