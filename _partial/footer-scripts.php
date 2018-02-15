<!-- Online -->
<!--Taken from jQuery CDN-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<!--Taken from Bootstrap CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Offline 
Downloaded from jquery 
<script src="js/jquery-1.12.4.min.js"></script>
Downloaded from get bootstrap
<script src="js/bootstrap.min.js"></script> -->

<script src="js/lightbox.min.js"></script>

<!--Your custom script code-->
<script src="js/main.js"></script>
<script src="js/wow.js"></script>

<script>
    new WOW().init();

</script>

<script>
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
        //alert(iKeyCode);
        if (iKeyCode > 31 && (iKeyCode < 39 || iKeyCode > 57 || iKeyCode == 42 || iKeyCode == 43 || iKeyCode == 45 || iKeyCode == 47 || iKeyCode == 46) && iKeyCode != 32 && iKeyCode !== 39 && iKeyCode !== 37 && iKeyCode !== 46) {
            alert("Enter Numbers only.");
            return false;
        }
        return true;
    }

    function keycheckval(evt) {
        evt = (evt) ? evt : event;
        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
            ((evt.which) ? evt.which : 0));
        if (charCode > 31 && (charCode < 65 || charCode > 90) &&
            (charCode < 97 || charCode > 122) && charCode != 32) {
            alert("Enter Letters only.");
            return false;
        }
        return true;
    }

</script>

<script>
    function checkmobile() {
        var mobile = document.getElementById("mobile");
        if (mobile.value.length != 10) {
            mobile.value = "";
            alert("Enter 10 digit Number")
        }
    }

</script>
