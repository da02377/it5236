// Javascript file for the calculator
// Function for displaying value for the calculator
    function dis(num) {
        document.getElementById('answer').value += num;
    }

    // Function that solves the equation given
    function solve() {
        var x = document.getElementById('answer').value;
        var re = x.search(/\D\D+/);
        if (re == -1) {
            y = eval(x);
            document.getElementById('answer').value = y;   
        }
        else {
            alert('Function is not able to be solved');
            reset();
        }
    }
    
    // Function that clears the answer bar
    function reset() {
        document.getElementById('answer').value = '';
    }

    // Function finds square root once the button is clicked
    function sqroot() {
        var x = document.getElementById('answer').value;
        var y = Math.sqrt(x);
        if (isNaN(y)) {
            alert('Function is not able to be solved');
            reset();
        } else {
        document.getElementById('answer').value = y;
        }
    }
