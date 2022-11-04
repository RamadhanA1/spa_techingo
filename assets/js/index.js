const todo = document.getElementById('todo');

function add() {
    // ambil nilai dari textnya
    let newText = document.getElementById('new_text');

    // tambahkan list baru ke dalam ul
    let newTodo = "<li onclick='toggle(this)' class='p-1'>" 
    + newText.value 
    + "<button class='btn btn-success ms-2'>Selesai</button>"
    + "<button onclick='removeItem(this)' class='btn btn-danger ms-2'>Hapus</button>"
    + "</li>";

    todo.insertAdjacentHTML("afterbegin", newTodo);


    // kosongkan fieldnya 
    newText.value = null;
}

function toggle(el) {
    el.classList.toggle('done');
}

function removeItem(el) {
    el.parentElement.remove();
}