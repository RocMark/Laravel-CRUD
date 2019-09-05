<template>
    <div>
        <h2>{{ token }}</h2>
    </div>
</template>


<script>
    // import axios from 'axios'

    export default {
        data() {
            return {
                token: ''
            }
        },
        methods: {
        },
        mounted: function () {
            this.token = document.querySelector('meta[name="csrf-token"]').content;

            const currentToken = this.token;
            console.log('currentToken', currentToken);

            test(currentToken)
            function test(currentToken) {

                //* Token 不變 可以連發過去
                //? 1位置對1 token???  重開 php artisan serve，token 不變
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "http://127.0.0.1:8000/blog",
                    "method": "POST",
                    "headers": {
                        "X-CSRF-TOKEN": currentToken,

                        "Content-Type": "application/x-www-form-urlencoded,text/plain",
                        "Accept": "*/*",
                        "Cache-Control": "no-cache",
                        "cache-control": "no-cache",
                        // "Postman-Token": "4b417f23-01f9-4fb2-9883-ac723ac4ae5d,ae0cce3c-4cba-49f9-bfd0-ada41655164e"

                        //* Refused to set unsafe header
                        // "Cookie": "laravel_session=eyJpdiI6IkpMTHY3ZXlLUytKWWpWYklVdzRFNUE9PSIsInZhbHVlIjoiWU90c1wveTRCWll2cGM1NCsrRVVPOW9vMFR6aW5xb0xzdGhVem53TUVNM2cwaVoxakZ6TFNISlRTWHNBVnNMZ0giLCJtYWMiOiJkODE5NGM3OWM0NzIxNjg2MjViNDQ5OThhZTRiMmNiZWQyMDVmZTUwYzQ5ZGVjNzgyNjFmN2YyZGVhZjE5YWU4In0%3D; XSRF-TOKEN=eyJpdiI6IjFqa09OZzBSS2Y5MnJKNDY0N2dXWUE9PSIsInZhbHVlIjoiWGxCR3BoS3FsXC9jNURlNkpDem0xVkZzaXBGcFBqTTUxU01iY0R6ZVZ0MXRFZjU5Z0dEYUk3cVJtSldZU2RIbEUiLCJtYWMiOiIzYzI2NzFiOTFkYzZiNzQ1M2FhNzgzZDUwZTFmYmU2MGJjN2EzZjIxODM2ZmYyNDkxYzllOTNjNzQ2NmQ0OWIwIn0%3D",
                        // "Host": "127.0.0.1:8000",
                        // "Accept-Encoding": "gzip, deflate",
                        // "Content-Length": "136",
                        // "Connection": "keep-alive",
                        // "User-Agent": "PostmanRuntime/7.15.2",
                    },
                    "data": {title: '123456',userId: 123,content: 'test',tag: 123}
                }

                $.ajax(settings).done(function (response) {
                    // console.log(response); // 回傳 HTML，我寫導向到 index
                    console.log('post blog send')
                });

                //* 建議改寫成如下，追加 Header，不需要明確定義所有 Header
                // $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     }
                // });
            }

        }
    }
</script>
