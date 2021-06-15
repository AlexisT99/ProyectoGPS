function myFunction() {
    if (!document.getElementsByTagName || !document.createTextNode) return;
    var rows = document.getElementById('tblObras').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function () {
            var $t1 = this.getElementsByTagName('td')[0].innerHTML;
            var $t2 = this.getElementsByTagName('td')[1].innerHTML;
            var $t3 = this.getElementsByTagName('td')[2].innerHTML;
            var $t4 = this.getElementsByTagName('td')[3].innerHTML;
            var $t5 = this.getElementsByTagName('td')[4].innerHTML;
            alert('Se ha eliminado la obra con el id: ' + $t1)

            window.location = "aprendiendo.php?t1=" + $t1;

        }
    }
}

function myFunction1() {
    if (!document.getElementsByTagName || !document.createTextNode) return;
    var rows = document.getElementById('tblObras').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function () {
            var $t1 = this.getElementsByTagName('td')[0].innerHTML;
            var $t2 = this.getElementsByTagName('td')[1].innerHTML;
            var $t3 = this.getElementsByTagName('td')[2].innerHTML;
            var $t4 = this.getElementsByTagName('td')[3].innerHTML;
            var $t5 = this.getElementsByTagName('td')[4].innerHTML;


            window.location = "DataObra.php?t1=" + $t1;

        }
    }
}