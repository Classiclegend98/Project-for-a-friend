// Ajax part

document.querySelector('#postForm').addEventListener('submit', postResult);

function postResult(e) {
    e.preventDefault();

    let result1 = document.querySelector('#num1').value;
    let result2 = document.querySelector('#num2').value;
    let result = parseInt(result1) + parseInt(result2);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'calculator.php', true);
    xhr.setRequestHeader('Content-type', 'application/x.www-form-urlencoded')

    xhr.onload = function () {
        document.querySelector("#result").innerHTML = result;
    }

    xhr.send(result);
} 
