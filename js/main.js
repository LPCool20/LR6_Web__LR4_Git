// після завершення завантаження сторінки
$(document).ready(function(){
    $('.pic a').lightBox({
        // викликаємо lightBox і конвертуємо усі посилання в контейнері .pic в галерею Lightbox
        imageLoading: 'lightbox/dist/images/loading.gif',
        imageBtnClose: 'lightbox/dist/images/close.png',
        imageBtnPrev: 'lightbox/dist/images/prev.png',
        imageBtnNext: 'lightbox/dist/images/next.png'
    });
});
