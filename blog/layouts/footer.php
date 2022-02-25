<footer>
    <div class="container">
        <span class="text-muted">2022 Все права защищены</span>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('#exit_btn').click(function () {
            const login = $('#login').val();
            const pass = $('#pass').val();

            $.ajax({
                url: 'reg/exit.php',
                type: 'POST',
                cache: false,
                data: {'login': login, 'pass': pass},
                dataType: 'html',
                success: function (data) {
                    document.location.reload(true);
                }
            });
        })
    </script>