function clicked() {
    if (confirm('Do you want to submit?')) {
        yourformelement.submit();
    } else {
        return false;
    }
 }