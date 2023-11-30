@if (Auth::check())
    @if (Auth::user()->role != 2)
        <!DOCTYPE html>
        <html>

        <head>
            <title>{{ Auth::user()->name }}</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
                integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
                crossorigin="anonymous">
        </head>

        <body>
            <div class="container">
                <h4 class="text-center">Thông báo trúng tuyển công ty</h4>
                <p>
                    Chúng tôi vui mừng thông báo cho bạn biết rằng đơn đăng ký của bạn đã được thông qua thành công qua
                    giai
                    đoạn
                    sàng
                    lọc đầu tiên của chúng tôi. Giai đoạn tiếp theo là giai đoạn phỏng vấn, nơi chúng tôi sẽ hoàn thành
                    các thủ
                    tục
                    còn
                    lại trước khi đưa ra quyết định cuối cùng. Để chuyển sang giai đoạn tiếp theo, trước khi chúng tôi
                    có thể
                    lên
                    lịch
                    phỏng vấn, vui lòng gửi cho chúng tôi bản sao CV mới nhất của bạn và thời gian bạn có thể sẵn sàng
                    cho cuộc
                    phỏng
                    vấn.
                </p>
                <p>
                    Trân trọng,
                </p>
                <p>{{ Auth::user()->name }}</p>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
            </script>
        </body>

        </html>
    @endif
@endif
