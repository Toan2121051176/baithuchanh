
document.addEventListener('DOMContentLoaded', function(){
    document.querySelector('#new-task').onsubmit = function() {
        const li = document.createElement('li');
        li.innerHTML = document.querySelector('#task').value;
        document.querySelector('#tasks').append(li);
        document.querySelector('#task').value = '';
        return false;
        };
    });