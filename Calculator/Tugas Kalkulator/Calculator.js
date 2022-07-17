function Screen(val) {
    document.getElementById("box").value = val;
}

function show(val) {
    document.getElementById("box").value += val;
}

function zero() {
    var view = document.getElementById("box");
    if (view.value != "") {
        view.value += '0';
    }
}

function solve() {
    try {
        Screen(eval(document.getElementById("box").value))
    } catch (err) {
        Screen('Syntax Error')
    }
}

function clearme() {
    document.getElementById("box").value = "";
}

function backspace() {
    var valueNeeded = document.getElementById("box").value;
    var finalValueNeeded = valueNeeded.substr(0, valueNeeded.length - 1);
    document.getElementById("box").value = finalValueNeeded;

}