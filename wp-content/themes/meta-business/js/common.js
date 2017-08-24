(function ($) {
    // Тут пишем код, когда загружен ДОМ, но без картинок
    $(function () {
        // Тут пишем код,когда страница загрузилась полностью
        //так пишем евенты
        $(document).on('click','#subm',function(){
            event.preventDefault();

            var formData = new FormData($('#modal-form')[0]);

            $.ajax({
                url: myajax.url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    alert(response.message);

                    if (response.status === 'success') {
                        $('#modal-form')[0].reset();
                    }
                }
            });
        });
        $(document).on('click','#subm1',function(){
            event.preventDefault();

            var formData = new FormData($('#form-course-record')[0]);

            $.ajax({
                url: myajax.url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    alert(response.message);

                    if (response.status === 'success') {
                        $('#form-course-record')[0].reset();
                    }
                }
            });
        });
        $(document).on('click','#subm2',function(){
            event.preventDefault();

            var formData = new FormData($('#coast-traning-form')[0]);

            $.ajax({
                url: myajax.url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    alert(response.message);

                    if (response.status === 'success') {
                        $('#coast-traning-form')[0].reset();
                    }
                }
            });
        });
        $(document).on('click','#subm3',function(){
            event.preventDefault();

            var formData = new FormData($('#footer-form')[0]);

            $.ajax({
                url: myajax.url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    alert(response.message);

                    if (response.status === 'success') {
                        $('#footer-form')[0].reset();
                    }
                }
            });
        });

    });
})(jQuery);