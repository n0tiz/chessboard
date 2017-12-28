function ready(callback) {
    if (document.readyState === 'interactive' || document.readyState === 'complete') {
        callback();
    } else {
        document.addEventListener('DOMContentLoaded', callback);
    }
}

function mousedown(event) {
    var element = event.target;
    element.addEventListener('mouseup', mouseup, false);
    element.addEventListener('mousemove', mousemove, false);
}

function mousemove(event) {
    var element = event.target;
    var pX = event.pageX;
    var pY = event.pageY;
    element.style.left = (pX - 25) + 'px';
    element.style.top = (pY - 25) + 'px';
}

function mouseup(event) {
    var element = event.target;
    element.removeEventListener('mousemove', mousemove, false);
    element.removeEventListener('mouseup', mouseup, false);
}

ready(function () {
    /*var elements = document.getElementsByTagName('div');
    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        element.addEventListener('mousedown', mousedown, false);
    }*/
});