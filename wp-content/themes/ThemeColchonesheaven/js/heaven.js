var com = com || {};
com.as = com.as || {};

com.as.Heaven = function() {};

com.as.Heaven.prototype = {
    setupHeader: function(index) {
        // separador de idiomas
        $('#header .language .qtrans_language_chooser li').last().addClass('separator');
        
        // curveado de los idiomas
        var angle = 5;
        curvyCorners({tl: {radius: angle}, tr: {radius: angle}, bl: {radius: angle}, br: {radius: angle}, antiAlias: true}, "#header  .language");
        
        // efecto hover para el munú principal
        $('.main_menu li').hover(
            function (){
                if ($(this).index() != index) {
                    $(this).find('.dotted').css('display', 'none');
                    $(this).find('.shield').css('display', 'block');
                }
            },
            function (){
                if ($(this).index() != index) {
                    $(this).find('.shield').css('display', 'none');
                    $(this).find('.dotted').css('display', 'block');
                }
            }
        );
        
        // selecciona una opción del menu del header en función de la página actual

        $("#header .main_menu li[rel='"+$('#header .main_menu').attr('rel')+"'] .dotted" ).css('display', 'none');
        $("#header .main_menu li[rel='"+$('#header .main_menu').attr('rel')+"'] .shield" ).css('display', 'block');
        $("#footer .main_menu li[rel='"+$('#header .main_menu').attr('rel')+"'] .dotted" ).css('display', 'none');
        $("#footer .main_menu li[rel='"+$('#header .main_menu').attr('rel')+"'] .shield" ).css('display', 'block');
        /*$($('#header .main_menu li').get(index)).find('.dotted').css('display', 'none');
        $($('#header .main_menu li').get(index)).find('.shield').css('display', 'block');*/
        
        // selecciona una opción del menu del footer en función de la página actual
        /*$($('#footer .main_menu li').get(index)).find('.dotted').css('display', 'none');
        $($('#footer .main_menu li').get(index)).find('.shield').css('display', 'block');*/
    },
    
    
    
    
    setupIndex: function() {
        // quita los tittle de las imágenes
        $('#slides_banner .slide img').attr('title', '');
        
        // transparencia y curveado de la descripción del banner
        $('#slides_banner .prev').fadeTo(0, 0.7);
        $('#slides_banner .next').fadeTo(0, 0.7);
        $('#slides_banner .slide .description').fadeTo(0, 0.7);
        
        var angle = 3;
        //curvyCorners({tl: {radius: angle}, tr: {radius: angle}, bl: {radius: angle}, br: {radius: angle}, antiAlias: true}, "#slides_banner");
        
        angle = 10;
        curvyCorners({tl: {radius: angle}, tr: {radius: angle}, bl: {radius: angle}, br: {radius: angle}, antiAlias: true}, "#slides_banner .slide .description");
        
        // diapositivas del banner
        $('#slides_banner .slideshow').cycle(
            {fx: 'fade', prev: '#slides_banner .prev', next: '#slides_banner .next', timeout: 10000,
             after: function(curr, next, opts) {
                        var index = opts.currSlide;
                        
                        $('#slides_banner .prev')[index == 0 ? 'hide' : 'show']();
                        $('#slides_banner .next')[index == opts.slideCount - 1 ? 'hide' : 'show']();
                    }
            }
        );
        
        // hover para líneas
        this.hoverLines();
        
        // curveado de las noticias
        angle = 3;
        curvyCorners({tl: {radius: angle}, tr: {radius: angle}, bl: {radius: angle}, br: {radius: angle}, antiAlias: true}, '#news_container .news');
        
        // curveado de oferta
        angle = 3;
        //curvyCorners({tl: {radius: angle}, tr: {radius: angle}, bl: {radius: angle}, br: {radius: angle}, antiAlias: true}, '#offer .image');
    },
    
    
    
    
    setupStudio: function() {
        // hover para líneas
        this.hoverLines();
        
        // crea la galería de imágenes
        $('.ad-gallery').adGallery({thumb_opacity: 1});
    },
    
    
    
    
    setupContactos: function() {
        $("#formulario").validate({
            rules: {
                name: {
                    required: true
                },
                surnames: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: 'Por favor, introduzca su nombre'
                },
                surnames: {
                    required: 'Por favor, introduzca su apellido'
                },
                email: {
                    required: 'Por favor, introduzca su email',
                    email: 'Introduzca un email válido'
                },
                message: {
                    required: 'Por favor, introduzca un comentario'
                }
            },
            submitHandler: function() {
                /*$.ajax({
                    url: 'send_mail.php',
                    type: "POST",
                    async: true,
                    data: $('#formulario').serialize(),
                    beforeSend: function(jqXHR, settings) {
                        $('#contacto').css('cursor', 'wait');
                    },
                    success: function(data) {
                        alert(data);
                    },
                    complete: function(jqXHR, textStatus) {
                        $('#contacto').css('cursor', 'default');
                    }
                });*/
            }
        });
    },
    
    
    
    
    hoverLines: function() {
        //para hover de las lineas
        $(".tipo_linea").hover(
            function(){
                if (!$(this).find(".desc_tipo_linea").hasClass('selected'))
                    $(this).find(".desc_tipo_linea").css({"background-color":"#1d9db4"});
            },
            function(){
                if (!$(this).find(".desc_tipo_linea").hasClass('selected'))
                    $(this).find(".desc_tipo_linea").css({"background-color":"#d0d1d3"});
            }
        ).css({"cursor":"pointer"});
        
        if ($(".tipo_linea").length > 0)
            $($(".tipo_linea").get($(".tipo_linea").length - 1)).css('margin', '0');
    }
    
    
    
    
};