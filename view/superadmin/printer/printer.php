<?php
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Untitled Page</title>

    <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //دریافت تگ مورد نظر بر اساس شناسه
            var divElements = document.getElementById(divID).innerHTML;
            //تمامی محتوای صفحه را دریافت می کنیم
            var oldPage = document.body.innerHTML;

            //تمام محتوای صفحه را خالی و تگ مورد نظر برای چاپ را درونش قرار میدهیم
            document.body.innerHTML =
                "<html><head><title></title></head><body>" +
                divElements + "</body>";

            //صفحه را چاپ میکنیم
            window.print();

            //محتوای صفحه را که در بالا دریافت نموده بودیم به صفحه بازمیگردانیم.
            document.body.innerHTML = oldPage;


        }
    </script>

</head>
<body>
<div id="printablediv" style="width: 100%; background-color: black; color:white; height: 100px; direction:rtl; text-align:center">
    پارس راد ارائه دهنده انواع محصولات نرم افزاری تحت وب، ویندوز و اندروید
</div>
<a style="background-color:red; color:white; cursor:pointer" onclick="javascript:printDiv('printablediv')">چاپ</a>
</body>
</html>
