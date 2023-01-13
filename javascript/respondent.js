//Button Functionality
var btn1 = document.getElementById('publics');
var btn2 = document.getElementById('mys');
var btn3 = document.getElementById('completes');
var btn4 = document.getElementById('incompletes');
var btn5 = document.getElementById('pendings');
var mini = document.getElementById('mini-tasks');
var themeToqqle = document.getElementById("theme");
var chatToqqle = document.getElementById('chat_icon');
var chat = document.getElementById('wrapper');
var closeChat = document.getElementById('logout');
var popUp = document.getElementById('popup');

var tasks = document.getElementById('tasks');
var mytasks = document.getElementById('mytasks');
var completetasks = document.getElementById('completetasks');
var incompletetasks = document.getElementById('incompletetasks');

//Chanqe theme
themeToqqle.onclick = function name() {
    document.body.classList.toggle("dark-theme");
    themeToqqle.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToqqle.querySelector('span:nth-child(2)').classList.toggle('active');
}



//Naviqate throuqh tasks
//When "public tasks button is clicked"
function publicClick() {
    btn1.style.backgroundColor = '#348ceb';
    btn2.style.backgroundColor = '#ffffff';
    mini.style.display = 'none';
    tasks.style.display = 'block';
    mytasks.style.display = 'none';
}

//When "my tasks button is clicked" 
function myClick() {
    btn2.style.backgroundColor = '#348ceb';
    btn1.style.backgroundColor = '#ffffff';
    mini.style.display = 'block';
    tasks.style.display = 'none';
    mytasks.style.display = 'block';
    btn3.style.backgroundColor = '#ffffff';
    btn4.style.backgroundColor = '#ffffff';
    btn5.style.backgroundColor = '#ffffff';

    table = document.getElementById('mytasks');
    tr = table.querySelector('tbody').getElementsByTagName('tr');
    for (var i = 0; i < tr.length; i++) {
        tr[i].classList.remove('donotShow_row')
    }
}

//When "complete button is clicked"
function completeClick() {
    btn3.style.backgroundColor = '#0e7526';
    btn4.style.backgroundColor = '#ffffff';
    btn5.style.backgroundColor = '#ffffff';

    table = document.getElementById('mytasks');
    tr = table.querySelector('tbody').getElementsByTagName('tr');
    for (var i = 0; i < tr.length; i++) {
        if (tr[i].getElementsByTagName('td')[3].innerText.indexOf('Complete') > -1) {
            tr[i].classList.remove('donotShow_row')
        } else {
            tr[i].classList.add('donotShow_row')
        }
    }

}

//When "incomplete button is clicked"
function incompleteClick() {
    btn4.style.backgroundColor = '#0e7526';
    btn3.style.backgroundColor = '#ffffff';
    btn5.style.backgroundColor = '#ffffff';

    table = document.getElementById('mytasks');
    tr = table.querySelector('tbody').getElementsByTagName('tr');
    for (var i = 0; i < tr.length; i++) {
        if (tr[i].getElementsByTagName('td')[3].innerText.indexOf('Incomplete') > -1) {
            tr[i].classList.remove('donotShow_row')
        } else {
            tr[i].classList.add('donotShow_row')
        }
    }
}

//When "pending button is clicked"
function pendingClick() {
    btn5.style.backgroundColor = '#0e7526';
    btn4.style.backgroundColor = '#ffffff';
    btn3.style.backgroundColor = '#ffffff';

    table = document.getElementById('mytasks');
    tr = table.querySelector('tbody').getElementsByTagName('tr');
    for (var i = 0; i < tr.length; i++) {
        if (tr[i].getElementsByTagName('td')[3].innerText.indexOf('Pending') > -1) {
            tr[i].classList.remove('donotShow_row')
        } else {
            tr[i].classList.add('donotShow_row')
        }
    }
}


//Display Chat
function toqqleChat() {
    chat.style.display = 'block';
    chatToqqle.style.display = 'none';
}

//Close Chat
function logout() {
    chat.style.display = 'none';
    chatToqqle.style.display = 'flex';
}



// Search All column in PUBLIC table
var searchBox_3 = document.getElementById("search");
searchBox_3.addEventListener("keyup", function() {
    var keyword = this.value;
    keyword = keyword.toUpperCase();
    var table_3 = document.getElementById("tasks");
    var all_tr = table_3.getElementsByTagName("tr");
    for (var i = 0; i < all_tr.length; i++) {
        var all_columns = all_tr[i].getElementsByTagName("td");
        for (j = 0; j < all_columns.length; j++) {
            if (all_columns[j]) {
                var column_value = all_columns[j].textContent || all_columns[j].innerText;

                column_value = column_value.toUpperCase();
                if (column_value.indexOf(keyword) > -1) {
                    all_tr[i].style.display = ""; // show
                    break;
                } else {
                    all_tr[i].style.display = "none"; // hide
                }
            }
        }
    }
})

//Search All column in MY_TASKS table
var searchBox_3 = document.getElementById("search");
searchBox_3.addEventListener("keyup", function() {
    var keyword = this.value;
    keyword = keyword.toUpperCase();
    var table_3 = document.getElementById("mytasks");
    var all_tr = table_3.getElementsByTagName("tr");
    for (var i = 0; i < all_tr.length; i++) {
        var all_columns = all_tr[i].getElementsByTagName("td");
        for (j = 0; j < all_columns.length; j++) {
            if (all_columns[j]) {
                var column_value = all_columns[j].textContent || all_columns[j].innerText;

                column_value = column_value.toUpperCase();
                if (column_value.indexOf(keyword) > -1) {
                    all_tr[i].style.display = ""; // show
                    break;
                } else {
                    all_tr[i].style.display = "none"; // hide
                }
            }
        }
    }
})

//Popup window and remove task from public tasks
var id;

function displayPopup(ind) {
    popUp.style.display = 'block';
    var test = document.getElementById('table1').rows[ind].cells[0].innerHTML;
    id = test;
}

function removePopup() {
    popUp.style.display = 'none';
}

function takeTask() {
    removePopup();
    //AJAX Request
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (
            this.readyState == 4 && this.status == 200
        ) {
            document.getElementById('tester').innerHTML = this.response;
            document.location.reload(true);
        }
    }
    xmlhttp.open("GET", "inc/query3.php?q=" + id, true);
    xmlhttp.send();
}


//Function to append data to HTML elements
function appender(id, content) {
    var paragraph = document.getElementById(id);
    var text = document.createTextNode(content);
    paragraph.appendChild(text);
}

//Function to clear data from HTML elements
function cleaner(id) {
    document.getElementById(id).innerHTML = ""
}

//For the Reply Box
const openModalButtons = document.querySelectorAll('[data-modal-target]');
const closeModalButtons = document.querySelectorAll('[data-close-button]');
const overlay = document.getElementById('overlay');
var ind1;
openModalButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        var index = e.currentTarget.rowIndex
        ind1 = document.getElementById('table2').rows[index].cells[0].innerHTML;
        var category = document.getElementById('table2').rows[index].cells[1].innerHTML;
        var description = document.getElementById('table2').rows[index].cells[2].innerHTML;
        appender("comment-category", category)
        appender("comment-description", description)
        const modal = document.querySelector(button.dataset.modalTarget)
        openModal(modal)
    })
})

overlay.addEventListener('click', () => {
    const modals = document.querySelectorAll('.comment-box.active')
    modals.forEach(modal => {
        closeModal(modal)
    })
})

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest(".comment-box")
        closeModal(modal)
        cleaner("comment-category")
        cleaner("comment-description")
    })
})

function openModal(modal) {
    if (modal == null) return
    modal.classList.add('active')
    overlay.classList.add('active')
}

function closeModal(modal) {
    if (modal == null) return
    modal.classList.remove('active')
    overlay.classList.remove('active')
}

//When Submit button is clicked
function submitter() {
    console.log(document.getElementById("text-area").value)
    var response = document.getElementById("text-area").value;
    document.getElementById("text-area").value = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (
            this.readyState == 4 && this.status == 200
        ) {
            document.getElementById('tester1').innerHTML = this.response;
            document.getElementById('mytasks').refresh();
        }
    }
    xmlhttp.open("GET", "inc/query4.php?q=" + response + "&p=" + ind1, true);
    xmlhttp.send();
}