function verif_menu_active(){
    if(jQuery('#id_menu_active').length) {
        var val_id_menu=jQuery('#id_menu_active').attr("class");
        if (val_id_menu!=''){
            if ((val_id_menu!='video') && (val_id_menu!='imagen')){
                if (val_id_menu!="home"){
                    jQuery(".menu li").each(function(){
                         var val_split=jQuery(this).children('a').attr("href").split('/');
                         if(val_split[1] == val_id_menu) {
                            jQuery(this).addClass('active');
                        } 
                    })
                }else{
                    jQuery(".menu li.home").addClass('active');
                }
            }else{
                jQuery(".menu li.imgvideo").addClass('active');
            }
        }
    }
}

jQuery(document).ready(function() {
	jQuery(".menu li a").prepend('<div class="grouplog_menu"><span class="log_menu_left"> :.</span><span class="logmenu-leftr-hover"></span></div>');
	verif_menu_active();
    
    var heaven = heaven || new com.as.Heaven();
    heaven.setupStudio();

    jQuery("#form_1").validate({
            rules: {
                nombre: {required: true},
                apellido: {required: true},
                mail: {required: true,email: true},
                telefono: {required: true,number: true},
                mensaje: {required: true}
            },
            messages: {
                nombre: {
                    required: "Debe ingresar su nombre"
                },
                apellido: {
                    required: "Debe ingresar su apellido"
                },
                mail: {
                    required: "Debe ingresar el email",
                    email: "Debe ingresar un email valido"
                },
                telefono: {
                    required: "Debe ingresar su telefono",
                    number: "Debe ser numerico"
                },
                mensaje: {
                    required: "Debe ingresar un mensaje",
                }
            },
            submitHandler: function(form) {            
                var data = jQuery(form).serialize();
                var url = jQuery(form).attr('action');             
                jQuery.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    cache: false,
                    beforeSend: function() {
                        jQuery("#loading_sms").append('<h6> enviando <h6>');
                    },
                    success: function(data) {
                        jQuery("#loading_sms").children('h6').remove();
                        jQuery("#loading_sms").append('<h6> su mensaje fue enviado <h6>');
                    }
                });
            }
    });
});


