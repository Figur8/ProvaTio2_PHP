function deleteConfirmation() {
        var txt;
        var r = confirm("Press a button!\nEither OK or Cancel.\nThe button you pressed will be displayed in the result window.");
        if (r == true) {
          txt = "You pressed OK!";
        } else {
          txt = "You pressed Cancel!";
            window.location.reload();
        }
        document.getElementById("demo").innerHTML = txt;
}